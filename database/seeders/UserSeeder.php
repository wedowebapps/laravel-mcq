<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Initialize Users
        User::create([
            'name' => 'Test',
            'email' => 'admin@gmail.com',
            'password' => \Hash::make("password"),
        ]);
    }
}
