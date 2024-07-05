<?php

namespace Database\Seeders;
use App\Models\Admin;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        Admin::create([
            'name' => 'Wheeler Admin',
            'email' => 'admin@wheeler.co.uk',
            'password' => Hash::make('WheelerAdmin123!@#'),
        ]);
    }
}
