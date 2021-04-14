<?php

use App\AdminUser;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@123'),
        ]);
    }
}
