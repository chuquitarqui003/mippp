<?php

namespace Database\Seeders;

use App\Models\Calendar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Calendar::create([
        //     'calendar_title'=>'Desarrollar Back End',
        //     'calendar_fecha_inicio'=>'11/11/23',
        //     'calendar_fecha_fin'=>'11/03/24',
        //     // 'plan_Id' => 1,
        // ]);
        $events = [
            [
                'title' => 'Desarrollar Back End',
            'start' => '2023-11-01 00:00:00',
            'end' => '2021-01-01 00:00:00',
            ],
            [
                'title' => 'Aplazar Back End',
            'start' => '2021-01-02 00:00:00',
            'end' => '2021-01-02 00:00:00',
            ],
            [
                'title' => 'Desarrollar Front End',
            'start' => '2021-01-03 00:00:00',
            'end' => '2021-01-03 00:00:00',
            ],
            [
                'title' => 'title 4',
            'start' => '2021-01-04 00:00:00',
            'end' => '2021-01-04 00:00:00',
            ],
            [
                'title' => 'title 5',
            'start' => '2021-01-05 00:00:00',
            'end' => '2021-01-05 00:00:00',
            ],
            [
                'title' => 'title 6',
            'start' => '2021-01-06 00:00:00',
            'end' => '2021-01-06 00:00:00',
            ],
        ];
        foreach ($events as $event) {
            Calendar::create($event);
        }


    }
}
