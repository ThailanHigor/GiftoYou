<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    User::create(array(
        'name'     => 'thailan',
        'username' => 'thailanhigor',
        'email'    => 'thailan-higor@hotmail.com',
        'password' => Hash::make('123mudar'),
    ));
}

}
