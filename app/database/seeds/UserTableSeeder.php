<?php

/**
* 
*/
class UserTableSeeder extends Seeder
{
	public function run() {
		DB::table('users')->insert(array(
			array(
				'name'=>'Peroy Chow',
				'username'=>'peroy',
				'email'=>'peroychow@gmail.com',
				'password'=>Hash::make('admin')
			)
		));
	}
}