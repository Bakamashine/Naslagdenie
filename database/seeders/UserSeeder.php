<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "fio" => "ivan",
            "login" => "ivan",
            "phone" => "89805307440",
            'email' => 'ivan@ivan.ru',
            'password' => bcrypt("moredock1")]);

        User::create([
            "fio" => "admin",
            "login" => "admin",
            "phone" => "89805307440",
            'email' => 'admin@admin.ru',
            "role_id" => 1,
            'password' => bcrypt("moredock1")]);
    }
}
