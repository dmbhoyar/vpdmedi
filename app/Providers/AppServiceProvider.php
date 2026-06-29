<?php

namespace App\Providers;

use App\Models\ProductCatalog;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        // Share active catalog with every view so navbar & pages can show download link
        View::composer('*', function ($view) {
            $catalog = ProductCatalog::where('is_active', true)->latest()->first();
            $view->with('activeCatalog', $catalog);
        });
    }
}
