<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\Yaml\Yaml;
use App\Models\User;
use App\Models\TaskStatus;
use App\Models\Label;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(15)->create();

        $taskStatuses =  Yaml::parseFile(database_path('seeds/taskStatuses.yaml'));
        foreach ($taskStatuses as $taskStatus) {
            TaskStatus::firstOrCreate([
                'name' => $taskStatus['name']
            ]);
        }

        $labels =  Yaml::parseFile(database_path('seeds/labels.yaml'));
        foreach ($labels as $label) {
            Label::firstOrCreate([
                'name' => $label['name'],
                'description' => $label['description']
            ]);
        }

        $tasks = Yaml::parseFile(database_path('seeds/tasks.yaml'));
        foreach ($tasks as $task) {
            Task::firstOrCreate([
                'name' => $task['name'],
                'description' => $task['description'],
                'status_id' => TaskStatus::inRandomOrder()->first()->id,
                'created_by_id' => User::inRandomOrder()->first()->id,
                'assigned_to_id' => User::inRandomOrder()->first()->id,
            ]);
        }

        $tasks = Task::all();

        foreach ($tasks as $task) {
            $labels = Label::all()->random(random_int(0, 3))->unique();
            $task->labels()->attach($labels);
        }
    }
}
