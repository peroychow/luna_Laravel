<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('SampleSeeder');
		$this->call('UserTableSeeder');
	}

}

class SampleSeeder extends Seeder {
	public function run() {
		DB::table('sample')->insert(array(
			array('name'=>'John','details'=>'black skin'),
			array('name'=>'Roy','details'=>'black hair'),
		));
	}
}
