<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;
use App\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 1000; $i++) {

            $task = new Task;
            $task->title = "Task $i";

            $faker = Faker::create();
            // $task->description = $faker->realText(200, 2);
            $task->description = $faker->text(100);

            $task->save();

        }
    }
}
