<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => 'Фидарова Зарина',
            'email' => 'zarinafid@mail.ru',
            'login' => 'zarinafid',
            'password' => 'pass1'
        ]);
    }
}
