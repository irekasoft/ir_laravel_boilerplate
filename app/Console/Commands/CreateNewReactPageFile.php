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
      $fileNameWithoutPath = array_pop($file_comps);
      $directoryPath = implode('/', $file_comps);

      // Create the directory if it doesn't exist
      if (!empty($directoryPath)) {
          $fullDirectoryPath = base_path("resources/react/{$directoryPath}");
          if (!file_exists($fullDirectoryPath)) {
              mkdir($fullDirectoryPath, 0755, true);
          }
      }

      $fullFilePath = base_path("resources/react/{$fileName}.js");

      // Create the file
      if (!file_exists($fullFilePath)) {
          
          // $fileContent = "import React from 'react';\n\nconst {$fileNameWithoutPath} = () => {\n  return (\n    <div>\n      <h1>{$fileNameWithoutPath}</h1>\n    </div>\n  );\n};\n\nexport default {$fileNameWithoutPath};";

          $templateContents = file_get_contents(app_path('Console/Commands/templates/react_file.js'));
          $fileContent = str_replace('{{filename}}', $fileNameWithoutPath, $templateContents);

          file_put_contents($fullFilePath, $fileContent);

          $this->info("React file created successfully: {$fullFilePath}");

      } else {
          $this->error("File already exists: {$fullFilePath}");
      }

      // Add a line of code to webpack.mix.js
      
      file_put_contents('webpack.mix.js', "mix.js('$folderPath/$fileName.js', 'public/js/').react().version();\n", FILE_APPEND);

      // Output a message to the console
      $this->info("New file $folderPath/$fileName has beend created and declared webpack.mix.js");

      $this->info("");

      $this->info("Add this to HTML file:");

      $this->info("<div id='$fileNameWithoutPath'></div>");
      $this->info("<script src='{{mix('js/$fileNameWithoutPath.js')}}'></script>");

      return 0;

    }
}
