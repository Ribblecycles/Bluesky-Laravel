<?php

use Illuminate\Database\Seeder;

class CreateDefaultRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role'              => 'admin',
            'user_id'           => 1
        ]);
        DB::table('roles')->insert([
            'role'              => 'sales',
            'user_id'           => 1
        ]);
    }
}
