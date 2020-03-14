<?php

use App\Researcher;
use App\User;
use Illuminate\Database\Seeder;

class ResearchersTableSeeder extends Seeder
{
        
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Researcher::class,100)->create()->each(
            function(Researcher $researcher){
                $researcher->groups()->attach([
                    rand(1,7),
                    rand(8,15)
                ]);
            }
        );
    }
}
