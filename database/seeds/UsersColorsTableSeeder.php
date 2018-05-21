<?php

use Illuminate\Database\Seeder;

class UsersColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\UserColor::class, 20)->create();
    }
}
