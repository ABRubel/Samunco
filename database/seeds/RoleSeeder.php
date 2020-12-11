<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::truncate();
        Role::insert([
            [
                'id'            => 1,
                'name'          => 'User',
            ],
            [
                'id'            => 2,
                'name'          => 'Admin',
            ],
        ]);
    }
}
