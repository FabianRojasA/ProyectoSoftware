<?php

use App\Unit;
use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Unit::class, 50)->create()->each(
            function(Unit $unit){
                $unit->groups()->attach([
                    rand(1,15)
                ]);
            }
        );
    }
}
