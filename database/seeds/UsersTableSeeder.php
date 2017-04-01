<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'login' => 'admin',
            'name' => 'admin',
            'email' => 'admin@domain.com',
            'password' => bcrypt('admin'),
            'department' => 'PDPT',
            'jobtitle' => 'sysadmin',
            'approle' => 'admin',
            'status' => 'enable',
            'created_at' => date_create(),
        ]);
    }
}
