<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        \App\Models\User::factory()->create([
            "name"=>"mamuju",
            "email"=>"mamujuulpk@gmail.com",
            "email_verified_at"=>now(),
            "password"=> Hash::make('yudistar'),
        ]);
        \App\Models\Pegawai::factory(15)->create();
    }
}
