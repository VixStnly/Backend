<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ScheduleWednesday;

class ScheduleWednesdaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        ScheduleWednesday::create([
            'classstudents_id' => '1',
            'subjects_id' => '1',
            'data_teachers_id' => '1',
            'start_time' => '07.30',
            'end_time' => '09.30'
        ]);
    }
}
