<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
                'name' => 'khanxay',
                'lname'  => 'youchantai',
                'email' => 'seaigang@hotmail.com',
                'password' => bcrypt('1234'),
                'address' => 'nongnieng',
                'permission' => '1'

            ],
            [
                'name' => 'pey',
                'lname'  => 'sek',
                'email' => 'pey@hotmail.com',
                'password' => bcrypt('1234'),
                'address' => 'dong',
                'permission' => '2'
            ]
        ];
        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
