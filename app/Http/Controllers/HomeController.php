<?php

namespace App\Http\Controllers;

use App\Models\ProductCatalog;
use App\Services\CatalogReaderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function franchise()
    {
        return view('franchise');
    }

    public function career()
    {
        return view('career');
    }

    public function support()
    {
        return view('support');
    }

    public function contact()
    {
        return view('contact');
    }

    public function orderForm()
    {
        $activeCatalog = ProductCatalog::where('is_active', true)->exists();
        return view('order', compact('activeCatalog'));
    }

    public function order(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:100',
            'phone'         => 'required|string|max:20',
            'city'          => 'required|string|max:100',
            'business_type' => 'nullable|string|max:50',
            'products'      => 'required|string|max:2000',
        ]);

        $message = implode("\n", [
            '*New Order – MedCare Distributors*',
            '',
            'Name: ' . $validated['name'],
            'Phone: ' . $validated['phone'],
            'City: ' . $validated['city'],
            'Business Type: ' . ($validated['business_type'] ?? '—'),
            '',
            'Products:',
            $validated['products'],
        ]);

        return redirect()->away('https://wa.me/919022281139?text=' . rawurlencode($message));
    }

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'phone'   => 'required|string|max:20',
            'city'    => 'required|string|max:100',
            'product' => 'required|string|max:200',
            'qty'     => 'nullable|string|max:1000',
        ]);

        $message = implode("\n", [
            '*New Enquiry – MedCare Distributors*',
            '',
            'Name: ' . $validated['name'],
            'Phone: ' . $validated['phone'],
            'City: ' . $validated['city'],
            'Type: ' . $validated['product'],
            '',
            'Message:',
            $validated['qty'] ?? '—',
        ]);

        return redirect()->away('https://wa.me/919022281139?text=' . rawurlencode($message));
    }

    public function products(Request $request, CatalogReaderService $reader)
    {
        $catalog = ProductCatalog::where('is_active', true)->latest()->first();

        $headers = [];
        $rows    = [];
        $error   = null;

        if ($catalog) {
            $data    = $reader->read($catalog);
            $headers = $data['headers'];
            $rows    = $data['rows'];
            $error   = $data['error'];
        }

        // Return JSON when called via AJAX from the order page tab
        if ($request->ajax()) {
            return response()->json(compact('headers', 'rows', 'error'));
        }

        return view('products', compact('catalog', 'headers', 'rows', 'error'));
    }

    public function downloadCatalog()
    {
        $catalog = ProductCatalog::where('is_active', true)->latest()->first();

        if (!$catalog) {
            return back()->with('error', 'No product catalog is available for download at the moment.');
        }

        $path = storage_path('app/catalogs/' . $catalog->stored_name);

        if (!file_exists($path)) {
            return back()->with('error', 'Catalog file not found. Please contact us.');
        }

        $catalog->increment('download_count');

        return response()->download($path, $catalog->original_name);
    }
}
