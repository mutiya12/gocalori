<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $User = user::create([
        'username'=> 'mutiya',
        'email'=> 'ayuamini12@gmail.com',
        'deskripsi'=> 'abvhdvsahd ansngxhga',
        'password'=> 'mutiya123',
        'longitude'=> '',
        'latitude'=> '',
        ]);
    }
}
