<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
   public function boot()
{
    if (strpos($_SERVER['HTTP_HOST'] ?? '', 'localhost') !== false) {
        // Force l'URL de Codespaces
        $codespacesUrl = 'https://glowing-space-palm-tree-7v5jgp4jr5w4cv49-8000.app.github.dev';
        
        \Illuminate\Support\Facades\URL::forceRootUrl($codespacesUrl);
        \Illuminate\Support\Facades\URL::forceScheme('https');
        
        // Modifie la requête
        request()->server->set('HTTPS', 'on');
        request()->server->set('SERVER_PORT', '443');
        request()->server->set('HTTP_HOST', 'glowing-space-palm-tree-7v5jgp4jr5w4cv49-8000.app.github.dev');
    }
}
}
