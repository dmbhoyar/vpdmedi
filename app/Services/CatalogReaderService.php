<?php

namespace App\Services;

use App\Models\ProductCatalog;
use PhpOffice\PhpSpreadsheet\IOFactory;

class CatalogReaderService
{
    /**
     * Read the active catalog and return [ 'headers' => [], 'rows' => [], 'error' => null ]
     */
    public function read(ProductCatalog $catalog): array
    {
        $path = storage_path('app/catalogs/' . $catalog->stored_name);

        if (!file_exists($path)) {
            return $this->error('File not found on server.');
        }

        $ext = strtolower(pathinfo($catalog->original_name, PATHINFO_EXTENSION));

        try {
            if ($ext === 'csv') {
                return $this->readCsv($path);
            }

            if (in_array($ext, ['xlsx', 'xls'])) {
                return $this->readExcel($path);
            }

            return $this->error('PDF files cannot be previewed. Please download the file.');
        } catch (\Throwable $e) {
            return $this->error('Could not read file: ' . $e->getMessage());
        }
    }

    private function readCsv(string $path): array
    {
        $rows    = [];
        $headers = [];
        $handle  = fopen($path, 'r');

        if (!$handle) {
            return $this->error('Cannot open CSV file.');
        }

        $first = true;
        while (($row = fgetcsv($handle)) !== false) {
            if ($first) {
                $headers = array_map('trim', $row);
                $first   = false;
                continue;
            }
            // Skip completely empty rows
            if (array_filter($row, fn($v) => trim($v) !== '') === []) {
                continue;
            }
            $rows[] = $row;
        }
        fclose($handle);

        return compact('headers', 'rows') + ['error' => null];
    }

    private function readExcel(string $path): array
    {
        $spreadsheet = IOFactory::load($path);
        $sheet       = $spreadsheet->getActiveSheet();
        $data        = $sheet->toArray(null, true, true, false);

        if (empty($data)) {
            return $this->error('The spreadsheet appears to be empty.');
        }

        // First non-empty row = headers
        $headers = array_map(fn($v) => trim((string) $v), array_shift($data));

        $rows = array_values(array_filter($data, function ($row) {
            return array_filter($row, fn($v) => trim((string) $v) !== '') !== [];
        }));

        return compact('headers', 'rows') + ['error' => null];
    }

    private function error(string $msg): array
    {
        return ['headers' => [], 'rows' => [], 'error' => $msg];
    }
}
