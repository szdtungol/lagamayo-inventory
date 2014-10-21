<?php

class UsersTableSeeder extends Seeder
{
	/**
	* Run the users table seed seeds.
	*
	* @return void
	*/
	public function run()
	{
		DB::table('users')->delete();

		User::create(array(
			'username' => 'admin',
			'password' => Hash::make('admin'),
			'email' => 'lagamayolara@gmail.com',
			'name' => 'Admin',
			'last_ip' => Request::getClientIp(),
			'active' => 'true',
		));

		User::create(array(
			'username' => 'arwin',
			'password' => Hash::make('Etits123!'),
			'email' => 'arwin.abatayo@gmail.com',
			'name' => 'Arwin',
			'last_ip' => Request::getClientIp(),
			'active' => 'true',
		));
	}
}
