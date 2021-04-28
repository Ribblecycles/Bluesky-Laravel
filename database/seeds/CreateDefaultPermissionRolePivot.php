<?php

use Illuminate\Database\Seeder;

class CreateDefaultPermissionRolePivot extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions_roles')->insert([
            'permissions_id'    => 1,
            'roles_id'          => 1
        ]);
        DB::table('permissions_roles')->insert([
            'permissions_id'    => 2,
            'roles_id'          => 1
        ]);
    }
}
