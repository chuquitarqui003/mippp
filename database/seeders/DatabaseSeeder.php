<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(SupplierSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(HistorySeeder::class);
        $this->call(MaterySeeder::class);

        $this->call(CompanySeeder::class);
        $this->call(PeopleSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(PresentationSeeder::class);
        $this->call(ConvocatorySeeder::class);
        $this->call(ParticipantSeeder::class);

        $this->call(AceptationSeeder::class);
        $this->call(ContractSeeder::class);
        $this->call(IndustrySeeder::class);

        $this->call(PlanSeeder::class);
        $this->call(CalendarSeeder::class);

    }
}
