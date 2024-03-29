<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(1)->create();
        
        $this->call(EventsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MylistsTableSeeder::class);
    }
}
