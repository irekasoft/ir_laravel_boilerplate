<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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

        Blade::directive('vite', function ($expression) {
            // Remove quotes from the expression
            $path = trim($expression, "'\"");
            
            if (app()->environment('local')) {
                return "<?php echo <<<HTML
                    <script type='module' src='http://localhost:5173/@vite/client'></script>
                    <script type='module' src='http://localhost:5173/{$path}'></script>
                HTML; ?>";
            } else {
                return "<?php 
                    \$manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
                    echo \"<script type='module' src='/build/{\$manifest[{$expression}]['file']}'></script>\";
                ?>";
            }
        });
    }
}
