<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateNewReactPageFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:react {filename}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new file and add a line of code to webpack.mix.js';

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
      // Specify the name of the new file
      $fileName = $this->argument('filename');


      // Specify the path to the folder where you want to create the new file
      $folderPath = 'resources/react';

      // $filename2 = clone $fileName;

      $file_comps = explode('/', $fileName);
      $fileNameWithoutPath = $file_comps[ count($file_comps) - 1 ];

    //   $this->info($fileNameWithoutPath);
    //   return;

      $templateContents = file_get_contents(app_path('Console/Commands/templates/newfile.js'));

      // Replace any placeholders in the template with the filename
      $fileContents = str_replace('{{filename}}', $fileNameWithoutPath, $templateContents);


      // Create the new file
      file_put_contents($folderPath . '/' . $fileName . '.js', $fileContents);

      // Add a line of code to webpack.mix.js
      file_put_contents('webpack.mix.js', "mix.js('$folderPath/$fileName', 'public/js/').react().version();\n", FILE_APPEND);

      // Output a message to the console
      $this->info("New file '$fileName' created in '$folderPath' and added to webpack.mix.js");

      $this->info("");

      $this->info("Add this to HTML file:");

      $this->info("<div id='$fileNameWithoutPath'></div>");
      $this->info("<script src='{{mix('js/$fileNameWithoutPath.js')}}'></script>");

      return 0;

    }
}
