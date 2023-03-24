<?php

namespace Database\Seeders;

use App\Models\Achievement;
use App\Models\Metric;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $achievement = Achievement::create([
            'summary' => 'Achievement 1',
            'date' => '2021-01-01',
        ]);

        $achievement->links()->create([
            'url' => 'https://slack.com',
            'label' => 'Example',
        ]);

        $achievement->metrics()->attach(Metric::first());
    }
}
