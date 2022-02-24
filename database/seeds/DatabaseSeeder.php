<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(App\Content::class, 10)->create();
        factory(App\Movie::class,   100)->create();
        factory(App\Picture::class, 100)->create();
    }
}
