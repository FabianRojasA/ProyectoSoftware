<?php

use App\Researcher;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 150)->create();

        App\User::create([
            'name' => 'Fabian Rojas',
            'email' => 'f@frojas.com',
            'password' => bcrypt('123')
        ]);
    }
}
