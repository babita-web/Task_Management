<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Consumption;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::truncate();

        $task1 = Task::create([
            'name'=> 'Task1',
            'description'=> 'task task',
            'created_at' => '2020-1-01',
            'deadline' => '2020-11-01',
            'actor_id' =>2,
            'group_id' => 2,
            'adopted_by_id'=>1,
            'status' => 1
        ]);

        $task2 = Task::create([
            'name'=> 'Task2',
            'description'=> 'task task',
            'deadline' => '2020-12-01',
            'created_at' => '2020-2-01',
            'actor_id' =>1,
            'group_id' => 2,
            'adopted_by_id'=>4,
            'status' => 1
        ]);

        $task2 = Task::create([
            'name'=> 'abctask',
            'description'=> 'task task',
            'deadline' => '2020-12-01',
            'created_at' => '2020-2-01',
            'actor_id' =>1,
            'group_id' => 4,
            'adopted_by_id'=>4,
            'status' => 4
        ]);


        $task4 = Task::create([
            'name'=> 'Task4',
            'description'=> 'task task',
            'created_at' => '2020-4-01',
            'deadline' => '2020-10-01',
            'actor_id' =>5,
            'group_id' => 3,
            'adopted_by_id'=>3,
            'status' => 2
        ]);

        $task5 = Task::create([
            'name'=> 'Task5',
            'description'=> 'task task',
            'created_at' => '2020-5-01',
            'deadline' => '2020-11-21',
            'actor_id' =>2,
            'group_id' => 2,
            'adopted_by_id'=>1,
            'status' => 1
        ]);

        $task5 = Task::create([
            'name'=> 'shop',
            'description'=> 'task task',
            'created_at' => '2020-5-01',
            'deadline' => '2020-11-21',
            'actor_id' =>2,
            'group_id' => 2,
            'adopted_by_id'=>1,
            'status' => 1
        ]);

        $task5 = Task::create([
            'name'=> 'shopping',
            'description'=> 'task task',
            'created_at' => '2020-5-01',
            'deadline' => '2020-11-21',
            'actor_id' =>2,
            'group_id' => 2,
            'adopted_by_id'=>1,
            'status' => 1
        ]);

        $task5 = Task::create([
            'name'=> 'adding',
            'description'=> 'task task',
            'created_at' => '2020-5-01',
            'deadline' => '2020-11-21',
            'actor_id' =>2,
            'group_id' => 4,
            'adopted_by_id'=>3,
            'status' => 1
        ]);

    }
}
