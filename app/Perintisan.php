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
	 * Validation rules
	 *
	 * @var array
	 */
	public static $rules = [
		'namaperintisan'	=> 'required',
		'alamat'			=> 'required',
		'daerah'			=> 'required',
		'telepon'			=> 'required',
		'mulaiberdiri'		=> 'date',
		'tanggallahir'		=> 'date',
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

}
