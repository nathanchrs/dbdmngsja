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
		'jemaatdewasa',
		'jemaatsm',
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
		'daerah' 			=> 'Daerah',
		'alamat' 			=> 'Alamat',
		'telepon' 			=> 'Telepon',
		'jenisperintisan' 	=> 'Jenis perintisan',
		'gerejamentor' 		=> 'Gereja mentor',
		'departemen' 		=> 'Departemen',
		'mulaiberdiri' 		=> 'Mulai berdiri',
		'namaperintis' 		=> 'Perintis',
		'tanggallahir' 		=> 'Tanggal lahir perintis',
		'tempatlahir'		=> 'Tempat lahir perintis',
		'jemaatdewasa' 		=> 'Jemaat dewasa',
		'jemaatsm' 			=> 'Jemaat Sekolah Minggu',
		'jemaatrkm' 		=> 'Jemaat RKM',
		'jemaatkka' 		=> 'Jemaat KKA',
		'bpd' 				=> 'BPD',
		'keterangan' 		=> 'Keterangan'
	];

	/**
	 * ComboBox enum data
	 *
	 * @var array
	 */
	public static $comboBoxData = [
		'jenisperintisan'	=> ['Gereja kota', 'Gereja non-kota'],
		'departemen'		=> ['DMIB', 'DMITA', 'DMIT'],
		'daerah'			=> [
			'Sumut 1',
			'Sumut 2',
			'Kepri dan Sumbar',
			'Sumbagsel',
			'Banten',
			'Jawa Barat',
			'Jateng Barat dan Yogyakarta',
			'Jateng Timur',
			'Jatim 1',
			'Jatim 2',
			'Kalbar',
			'Kalteng 1',
			'Kalteng 2 dan Kalsel',
			'Kaltim',
			'Sulselbatra',
			'Sulut 1',
			'Sulut 2',
			'DKI Jakarta',
			'Bali dan NTB',
			'NTT',
			'Maluku',
			'Maluku Utara',
			'Papua',
			'Papua Barat'
		]
	];

	/**
	 * Columns that can be used to search.
	 *
	 * @var array
	 */
	public static $searchableColumns = [
		'namaperintisan',
		'alamat',
		'departemen',
		'daerah',
		'namaperintis',
		'telepon',
		'gerejamentor',
		'jenisperintisan',
		'bpd',
		'keterangan'
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
