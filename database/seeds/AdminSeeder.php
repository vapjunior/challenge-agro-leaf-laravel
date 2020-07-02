<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'bemagro',
            'email' => 'bemagro@email.com',
            'password' => Hash::make('fullstack'),
        ]); 

        $user->assignRole('Admin');
    }
}
