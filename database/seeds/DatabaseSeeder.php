<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		$this->command->info('Seeding database...');

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

	/**
	 * Seeds the user table.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();
		User::create(['name'=>'Nathan Chris', 'username'=>'nathanchrs', 'email'=>'nathanchrs@outlook.com', 'password'=>Hash::make('aaaAAA123')]);

		$this->command->info('User table seeded!');
	}

}