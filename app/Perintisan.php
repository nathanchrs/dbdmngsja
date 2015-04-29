<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Perintisan extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'perintisan';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'namaperintisan',
		'alamat',
		'departemen',
		'daerah',
		'mulaiberdiri',
		'namaperintis',
		'tanggallahir',
		'tempatlahir',
		'telepon',
		'gerejamentor',
		'jenisperintisan',
		'jemaatsm',
		'jemaatdewasa',
		'jemaatrkm',
		'jemaatkka',
		'bpd',
		'keterangan'
	];

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public static $rules = [
		'namaperintisan'	=> 'required',
		'alamat'			=> 'required',
		'daerah'			=> 'required',
		'telepon'			=> 'required',
		'mulaiberdiri'		=> 'intldate', //intldate is a custom validation rule extended in AppServiceProvider's boot method
		'tanggallahir'		=> 'intldate',
		'jemaatdewasa'		=> 'integer',
		'jemaatsm'			=> 'integer',
		'jemaatrkm'			=> 'integer',
		'jemaatkka'			=> 'integer'
	];

	/**
	 * Friendly column names
	 *
	 * @var array
	 */
	public static $columnDescription = [
		'id' 				=> 'ID',
		'namaperintisan'	=> 'Nama perintisan',
		'alamat' 			=> 'Alamat',
		'departemen' 		=> 'Departemen',
		'daerah' 			=> 'Daerah',
		'mulaiberdiri' 		=> 'Mulai berdiri',
		'namaperintis' 		=> 'Perintis',
		'tanggallahir' 		=> 'Tanggal lahir perintis',
		'tempatlahir'		=> 'Tempat lahir perintis',
		'telepon' 			=> 'Telepon',
		'gerejamentor' 		=> 'Gereja mentor',
		'jenisperintisan' 	=> 'Jenis perintisan',
		'jemaatsm' 			=> 'Jumlah jemaat Sekolah Minggu',
		'jemaatdewasa' 		=> 'Jumlah jemaat dewasa',
		'jemaatrkm' 		=> 'Jumlah jemaat RKM',
		'jemaatkka' 		=> 'Jumlah jemaat KKA',
		'bpd' 				=> 'BPD',
		'keterangan' 		=> 'Keterangan lainnya'
	];

	/**
	 * Date accessor for mulaiberdiri.
	 *
	 * @param date $value
	 * @return string
	 */
	public function getMulaiberdiriAttribute($value){
		if($value==null) return '';
		\Date::setLocale(\Config::get('app.locale'));
		$tempDate = \Date::parse($value);
		return $tempDate->format('j F Y');
	}

	/**
	 * Date accessor for tanggallahir.
	 *
	 * @param date $value
	 * @return string
	 */
	public function getTanggallahirAttribute($value){
		if($value==null) return '';
		\Date::setLocale(\Config::get('app.locale'));
		$tempDate = \Date::parse($value);
		return $tempDate->format('j F Y');
	}

	/**
	 * Date mutator for tanggallahir.
	 *
	 * @param date $value
	 */
	public function setTanggallahirAttribute($value){
		if($value=='' || $value==null){
			$this->attributes['tanggallahir'] = null;
		} else {
			\Date::setLocale(\Config::get('app.locale'));
			$this->attributes['tanggallahir'] = \Date::parse($value);
		}
	}

	/**
	 * Date mutator for mulaiberdiri.
	 *
	 * @param date $value
	 */
	public function setMulaiberdiriAttribute($value){
		if($value=='' || $value==null){
			$this->attributes['mulaiberdiri'] = null;
		} else {
			\Date::setLocale(\Config::get('app.locale'));
			$this->attributes['mulaiberdiri'] = \Date::parse($value);
		}
	}


}
