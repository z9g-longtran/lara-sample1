<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $a = now();
        dump($a);
        // Model::unguard();
        $this->call(PostSeeder::class);
        // Model::reguard();
        dump(now()->diffInSeconds($a));
    }
}
