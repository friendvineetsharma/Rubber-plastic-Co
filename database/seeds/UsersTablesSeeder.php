<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
          'email'    => 'admin123@gmail.com',
          'password'   =>  Hash::make('admin123password'),
      ]);
    }
}
