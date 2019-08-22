<?php

use Illuminate\Database\Seeder;
use App\Admin;

use Illuminate\Support\Facades\bcrypt;

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
            'name' => 'Abderrahman Anou',
            'email' => 'anouma2@anou-dsi.eu',
            'password' => bcrypt('00adminanou++'),
            'role' => 2
        ]);

       
    
    }
}
