<?php

namespace Database\Seeders;
use App\Models\News;
use Illuminate\Database\Seeder;

// cl

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(Student_table::class);
        // $this->call(Student_table::class);
        News::factory(100)->create();
    }
}
