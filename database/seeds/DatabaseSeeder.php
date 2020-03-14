<?php

use App\Researcher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ResearchersTableSeeder::class);
    }
}
