<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'username', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	 * Friendly column names for this model.
	 *
	 * @var array
	 */
	public static $columnDescription = [
		'id'		=> 'ID',
		'name'		=> 'Nama',
		'username'	=> 'Username',
		'password'	=> 'Password',
		'email'		=> 'Email'
	];

	/**
	 * Validation rules for login.
	 *
	 * @var array
	 */
	public static $loginRules = [
		'username'	=> 'required',
		'password'	=> 'required',
		'remember'	=> 'boolean'
	];

}
