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
            'role' => '2',
            'password' => bcrypt('123123123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'over_name' => '田中',
            'under_name' => '花子',
            'over_name_kana' => 'タナカ',
            'under_name_kana' => 'ハナコ',
            'mail_address' => 'tana@test.com',
            'sex' => '2',
            'birth_day' => '20240202',
            'role' => '4',
            'password' => bcrypt('123123123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'over_name' => '大野',
            'under_name' => '二郎',
            'over_name_kana' => 'オオノ',
            'under_name_kana' => 'ジロウ',
            'mail_address' => 'ono@test.com',
            'sex' => '1',
            'birth_day' => '20240303',
            'role' => '4',
            'password' => bcrypt('123123123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
