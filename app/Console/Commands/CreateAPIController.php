<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateAPIController extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:api_c {prefix} {middleware} {model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

      $prefix = $this->argument('prefix');

      $middleware = $this->argument('middleware');
      
      $model = $this->argument('model');

      $model_snake_case = snake_case($model);


      $templateContents = file_get_contents(app_path('Console/Commands/templates/APIController.example'));

      $fileContents = str_replace('{{prefix}}', $prefix, $templateContents);

      $fileContents = str_replace('{{model}}', $model, $fileContents);

      $fileContents = str_replace('{{middleware}}', $middleware, $fileContents);

      $fileContents = str_replace('{{model_snake_case}}', $model_snake_case, $fileContents);

      $fullpath = app_path() . '/Http/Controllers/API/' . $prefix . $middleware . $model . 'APIController.php';

      file_put_contents($fullpath , $fileContents);

      $this->info('File created at: ', $fullpath);

      $this->info('');

      $route = 'Route::apiResource("'. $model_snake_case . '", \API\\' . $prefix . $middleware . $model . 'APIController::class);';

      $this->info("Generated Controller: " . $prefix. $middleware . $model . 'APIController');

      $this->info("");
      $this->info("Add this line to routes/api.php:");
      $this->info("");

      $this->info( $route );
      $this->info("");

      return 0;

    }
}
