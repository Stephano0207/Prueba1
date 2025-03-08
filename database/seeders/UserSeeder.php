<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = new User();
        $user->name="Chin chin";
        $user->email="chin@gmail.com";
        $user->password=bcrypt("chin");
        $user->save();

        $user = new User();
        $user->name="Paco";
        $user->email="paco@gmail.com";
        $user->password=bcrypt("paco");
        $user->save();
    }
}
