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
                protected $manifestPath;
                protected $buildDirectory;

                public function __construct()
                {
                    $this->manifestPath = public_path('build/manifest.json');
                    $this->buildDirectory = 'build';
                }

                public function handle($expression) {
                    $path = trim($expression, "'\"");
                    
                    if (app()->environment('local')) {
                        // Development - use Vite dev server
                        return $this->devTags($path);
                    }
                    
                    // Production - use built assets
                    return $this->productionTags($path);
                }

                protected function devTags($path)
                {
                    return <<<HTML
                        <script type="module" src="http://localhost:5173/@vite/client"></script>
                        <script type="module" src="http://localhost:5173/$path"></script>
                    HTML;
                }

                protected function productionTags($path)
                {
                    try {
                        if (!file_exists($this->manifestPath)) {
                            throw new Exception('The Vite manifest does not exist. Please run "npm run build"');
                        }

                        $manifest = json_decode(file_get_contents($this->manifestPath), true);
                        
                        if (!isset($manifest[$path])) {
                            throw new Exception("Unable to locate file in Vite manifest: {$path}");
                        }

                        // Get the file from the manifest
                        $file = $manifest[$path]['file'];
                        
                        // Check for CSS files
                        $tags = '';
                        if (isset($manifest[$path]['css'])) {
                            foreach ($manifest[$path]['css'] as $css) {
                                $tags .= sprintf(
                                    '<link rel="stylesheet" href="/%s/%s">',
                                    $this->buildDirectory,
                                    $css
                                );
                            }
                        }
                        
                        // Add the JavaScript
                        $tags .= sprintf(
                            '<script type="module" src="/%s/%s"></script>',
                            $this->buildDirectory,
                            $file
                        );

                        return $tags;

                    } catch (Exception $e) {
                        if (app()->environment('local')) {
                            throw $e;
                        }
                        return "<!-- Vite asset error: {$e->getMessage()} -->";
                    }
                }
            };
        });
    }
}
