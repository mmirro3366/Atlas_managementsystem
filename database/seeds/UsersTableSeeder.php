<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

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
            'over_name' => '佐藤',
            'under_name' => '太郎',
            'over_name_kana' => 'サトウ',
            'under_name_kana' => 'タロウ',
            'mail_address' => 'sato@test.com',
            'sex' => '1',
            'birth_day' => '20240101',
            'role' => '4',
            'password' => bcrypt('123123123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
