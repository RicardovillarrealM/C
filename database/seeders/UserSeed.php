<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = new User();
    $user->name = 'Ricardo Villarreal Moreno';
    $user->email = 'RicardovillarrealMoreno@gmail.com';
    $user->password = bcrypt('Ricardovm2');
    $user->avatar = null;
    $user->save();

    User::factory(10)->create();
    }
}
