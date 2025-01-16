<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class Rolestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Role::create([
            'name' => 'Admin',
            'positions' => 'Administrator with full access',
        ]);

        Role::create([
            'name' => 'Editor',
            'positions' => 'Can edit and publish content',
        ]);

        Role::create([
            'name' => 'Viewer',
            'positions' => 'Can view content only',
        ]);

        Role::create([
            'name' => 'Manager',
            'positions' => 'Manager with full access',
        ]);

        Role::create([
            'name' => 'Customer',
            'positions' => 'view content only',
        ]);

        Role::create([
            'name' => 'Subscriber',
            'positions' => 'view content only',
        ]);
            
    }
}
