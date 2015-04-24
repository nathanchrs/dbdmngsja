<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Perintisan;

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
		$this->call('PerintisanTableSeeder');
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
	}

}

class PerintisanTableSeeder extends Seeder {

	/**
	 * Seeds the perintisan table.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('perintisan')->delete();
		Perintisan::create(['namaperintisan'=>'samplewawaperintisan','alamat'=>'Jl. Namajalan Indah 21, Jakarta']);
		Perintisan::create(['namaperintisan'=>'sampleyayazperintisan2','alamat'=>'Jl. Namaraya Indah 22, Bandung']);
		Perintisan::create(['namaperintisan'=>'samplezazaperintisan3','alamat'=>'Jl. Jalanraya Indah 23, Jakarta']);
	}

}