<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCatalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    private string $adminPassword = '';
    private string $adminName     = '';

    public function __construct()
    {
        $this->adminPassword = env('ADMIN_PASSWORD', '123456');
        $this->adminName     = env('ADMIN_NAME', 'Admin');
    }

    // ── Auth ──────────────────────────────────────────────

    public function loginForm()
    {
        if (Session::get('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate(['password' => 'required']);

        if ($request->password === $this->adminPassword) {
            Session::put('admin_logged_in', true);
            Session::put('admin_name', $this->adminName);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['password' => 'Incorrect password.']);
    }

    public function logout()
    {
        Session::forget('admin_logged_in');
        return redirect()->route('admin.login');
    }

    // ── Dashboard ─────────────────────────────────────────

    public function dashboard()
    {
        $catalog = ProductCatalog::where('is_active', true)->latest()->first();

        return view('admin.dashboard', compact('catalog'));
    }

    // ── Product Catalog ───────────────────────────────────

    public function catalogForm()
    {
        $catalogs = ProductCatalog::latest()->get();
        return view('admin.catalog', compact('catalogs'));
    }

    public function uploadCatalog(Request $request)
    {
        $request->validate([
            'catalog' => 'required|file|mimes:xlsx,xls,csv,pdf|max:20480',
        ]);

        $file       = $request->file('catalog');
        $stored     = $file->store('catalogs', 'local');
        $storedName = basename($stored);

        // deactivate old catalogs
        ProductCatalog::where('is_active', true)->update(['is_active' => false]);

        ProductCatalog::create([
            'original_name' => $file->getClientOriginalName(),
            'stored_name'   => $storedName,
            'mime_type'     => $file->getClientMimeType(),
            'file_size'     => $file->getSize(),
            'is_active'     => true,
        ]);

        return back()->with('success', 'Product catalog "' . $file->getClientOriginalName() . '" uploaded successfully.');
    }

    public function deleteCatalog(ProductCatalog $catalog)
    {
        Storage::disk('local')->delete('catalogs/' . $catalog->stored_name);
        $catalog->delete();
        return back()->with('success', 'Catalog deleted.');
    }

    public function activateCatalog(ProductCatalog $catalog)
    {
        ProductCatalog::where('is_active', true)->update(['is_active' => false]);
        $catalog->update(['is_active' => true]);
        return back()->with('success', 'Catalog set as active.');
    }
}
