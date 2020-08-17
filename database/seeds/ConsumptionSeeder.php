<?php

use Illuminate\Database\Seeder;
use App\Consumption;

class ConsumptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Consumption::truncate();

        Consumption::insert([
        'start' => '2020-04-02',
        'stop' => '2020-05-01',
        'actors_id' =>'1',
        'Task_id' =>'1'
        ]);

        Consumption::insert([
            'start' => '2020-05-02',
            'stop' => '2020-06-01',
            'actors_id' =>'2',
            'Task_id' =>'1'
        ]);


    }
}
