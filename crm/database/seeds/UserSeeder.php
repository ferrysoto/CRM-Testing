<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = [
        [
          'name'     => 'Admin',
          'email'    => 'admin@admin.com',
          'password' => Hash::make('password'),
        ],
        [
          'name'     => 'Ferrán Herrero',
          'email'    => 'ferran.herrerosoto@gmail.com',
          'password' => Hash::make('qwe123QWE'),
        ],
      ];

      foreach ($users as $key => $value) {
        User::create($value);
      }
    }
}
