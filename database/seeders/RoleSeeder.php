<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'role' => 'Admin'
            ],
            [
                'role' => 'Alumni'
            ],
            [
                'role' => 'User'
            ],
            [
                'role' => 'Pending...'
            ],
        ];

        foreach ($roles as $role){
            Role::create($role);
        }
    }
}
