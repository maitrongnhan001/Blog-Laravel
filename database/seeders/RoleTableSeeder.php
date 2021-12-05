<?php

namespace Database\Seeders;

use \App\Models\Models\Role as ModelsRole;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        ModelsRole::create([
            'name' => 'admin'
        ]);

        ModelsRole::create([
            'name' => 'user'
        ]);
    }
}