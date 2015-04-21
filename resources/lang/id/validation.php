<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => ":attribute harus diterima.",
	"active_url"           => ":attribute bukan URL yang valid.",
	"after"                => ":attribute harus berupa tanggal setelah :date.",
	"alpha"                => ":attribute hanya boleh mengandung huruf.",
	"alpha_dash"           => ":attribute hanya boleh mengandung huruf, angka dan tanda -.",
	"alpha_num"            => ":attribute hanya boleh mengandung huruf dan angka.",
	"array"                => ":attribute harus merupakan sebuah array.",
	"before"               => ":attribute harus berupa tanggal sebelum :date.",
	"between"              => [
		"numeric" => ":attribute harus berada diantara :min dan :max.",
		"file"    => ":attribute harus berada diantara :min dan :max kilobyte.",
		"string"  => ":attribute harus berada diantara :min dan :max karakter.",
		"array"   => ":attribute harus memiliki antara :min sampai :max barang.",
	],
	"boolean"              => ":attribute harus bernilai benar atau salah.",
	"confirmed"            => "Konfirmasi :attribute tidak cocok.",
	"date"                 => ":attribute bukan tanggal yang valid.",
	"date_format"          => ":attribute tidak memenuhi format :format.",
	"different"            => ":attribute dan :other harus berbeda.",
	"digits"               => ":attribute harus berisi :digits digit.",
	"digits_between"       => ":attribute harus sepanjang antara :min sampai :max digit.",
	"email"                => ":attribute harus berupa alamat email yang valid.",
	"filled"               => ":attribute harus diisi.",
	"exists"               => ":attribute tidak ditemukan.",
	"image"                => ":attribute harus berupa gambar.",
	"in"                   => ":attribute tidak valid.",
	"integer"              => ":attribute harus berupa bilangan bulat.",
	"ip"                   => ":attribute harus berupa alamat IP yang valid.",
	"max"                  => [
		"numeric" => ":attribute tidak boleh lebih besar dari :max.",
		"file"    => ":attribute tidak boleh lebih besar dari :max kilobyte.",
		"string"  => ":attribute tidak boleh lebih panjang dari :max karakter.",
		"array"   => ":attribute tidak boleh lebih panjang dari :max barang.",
	],
	"mimes"                => ":attribute harus berupa file type: :values.",
	"min"                  => [
		"numeric" => ":attribute harus lebih besar dari :min.",
		"file"    => ":attribute harus lebih besar dari :min kilobyte.",
		"string"  => ":attribute harus lebih panjang dari :min karakter.",
		"array"   => ":attribute harus lebih panjang dari :min brang.",
	],
	"not_in"               => ":attribute yang terpilih tidak valid.",
	"numeric"              => ":attribute harus berupa sebuah angka.",
	"regex"                => "Format :attribute tidak valid.",
	"required"             => ":attribute harus diisi.",
	"required_if"          => ":attribute field harus diisi jika :other diisi :value.",
	"required_with"        => ":attribute field harus diisi jika :values terisi.",
	"required_with_all"    => ":attribute field harus diisi jika terdapat :values.",
	"required_without"     => ":attribute field harus diisi jika :values tidak ditemukan.",
	"required_without_all" => ":attribute field harus diisi jika tidak ada dari :values ada.",
	"same"                 => ":attribute dan :other harus sama.",
	"size"                 => [
		"numeric" => ":attribute harus sebesar :size.",
		"file"    => ":attribute harus sebesar :size kilobyte.",
		"string"  => ":attribute harus sepanjang :size karakter.",
		"array"   => ":attribute harus mengandung :size barang.",
	],
	"unique"               => ":attribute sudah terpakai.",
	"url"                  => "Format :attribute invalid",
	"timezone"             => ":attribute harus berupa zona waktu yang valid.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => [
		'attribute-name' => [
			'rule-name' => 'custom-message',
		],
	],

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => [],

];
