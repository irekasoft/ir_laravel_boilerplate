<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Exception;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        Blade::directive('viteAssets', function ($expression) {
            return "<?php echo app('vite.handler')->handle($expression); ?>";
        });

        // Register Vite Handler singleton
        $this->app->singleton('vite.handler', function () {
            return new class {
                public function handle($expression) {
                    // Check if native @vite is available (Laravel 9+)
                    if (method_exists('Illuminate\Support\Facades\Vite', 'useBuildDirectory')) {
                        return "@vite([$expression])";
                    }

                    // Fall back to our custom implementation
                    $path = trim($expression, "'\"");
                    
                    if (app()->environment('local')) {
                        return <<<HTML
                            <script type='module' src='http://localhost:5173/@vite/client'></script>
                            <script type='module' src='http://localhost:5173/{$path}'></script>
                        HTML;
                    } else {
                        try {
                            $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
                            if (!isset($manifest[$path])) {
                                throw new Exception("Asset not found in manifest: {$path}");
                            }
                            return "<script type='module' src='/build/{$manifest[$path]['file']}'></script>";
                        } catch (Exception $e) {
                            return '<!-- Vite asset error: ' . $e->getMessage() . ' -->';
                        }
                    }
                }
            };
        });
    }
}
