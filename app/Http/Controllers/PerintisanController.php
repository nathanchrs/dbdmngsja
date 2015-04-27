<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Perintisan;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class PerintisanController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		//$validcolumns = ['namaperintisan'=>'Nama perintisan', 'alamat'=>'Alamat', 'departemen'=>'Departemen', 'daerah'=>'Daerah', 'namaperintis'=>'Nama perintis', 'telepon'=>'Telepon', 'gerejamentor'=>'Gereja mentor', 'jenisperintisan'=>'Jenis perintisan', 'bpd'=>'BPD', 'keterangan'=>'Keterangan'];
		$validColumns = array_only(Perintisan::$columnDescription, ['namaperintisan', 'alamat', 'departemen', 'daerah', 'namaperintis', 'telepon', 'gerejamentor', 'jenisperintisan', 'bpd', 'keterangan']);

		if($request->has('search')){
			$searchColumn = $request->has('searchcolumn') ? $request->input('searchcolumn') : 'namaperintisan';
			if(!array_key_exists($searchColumn, $validColumns)) $searchcolumn = 'namaperintisan';

			$data = Perintisan::where($searchColumn,'like','%'.$request->input('search').'%')->paginate(50);
		} else {
			$data = Perintisan::paginate(50);

		}	

		$request->flash();	
		$data->setPath('perintisan');
		$data->appends($request->except('page'));
		return view('perintisan/perintisan', ['data'=>$data, 'validColumns'=>$validColumns]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('perintisan/perintisan-details', ['method'=>'POST', 'columnDescription'=>Perintisan::$columnDescription]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		\Date::setLocale('id');
		$input = \Input::all();

		try {
			$input['mulaiberdiri'] = \Date::parse($input['mulaiberdiri']);
		} catch(\Exception $ex){
			return \Redirect::back()->withErrors(['mulaiberdiri'=>'Tanggal mulai berdiri tidak valid.'])->withInput();
		}

		try {
			$input['tanggallahir'] = \Date::parse($input['tanggallahir']);
		} catch(\Exception $ex){
			return \Redirect::back()->withErrors(['tanggallahir'=>'Tanggal lahir perintis tidak valid.'])->withInput();
		}

		$validator = \Validator::make($input, Perintisan::$rules);
		$validator->setAttributeNames(Perintisan::$columnDescription);

		if($validator->fails()){
			return \Redirect::back()->withErrors($validator)->withInput();

		} else {

			$perintisan = new Perintisan;

			$perintisan->namaperintisan 	= $input['namaperintisan'];
			$perintisan->alamat 			= $input['alamat'];
			$perintisan->departemen 		= $input['departemen'];
			$perintisan->daerah 			= $input['daerah'];
			$perintisan->mulaiberdiri 		= $input['mulaiberdiri'];
			$perintisan->namaperintis 		= $input['namaperintis'];
			$perintisan->tanggallahir 		= $input['tanggallahir'];
			$perintisan->tempatlahir 		= $input['tempatlahir'];
			$perintisan->telepon 			= $input['telepon'];
			$perintisan->gerejamentor 		= $input['gerejamentor'];
			$perintisan->jenisperintisan 	= $input['jenisperintisan'];
			$perintisan->jemaatsm 			= $input['jemaatsm'];
			$perintisan->jemaatdewasa 		= $input['jemaatdewasa'];
			$perintisan->jemaatrkm 			= $input['jemaatrkm'];
			$perintisan->jemaatkka 			= $input['jemaatkka'];
			$perintisan->bpd 				= $input['bpd'];
			$perintisan->keterangan 		= $input['keterangan'];

			$perintisan->save();

			\Session::flash('message', 'Data perintisan berhasil disimpan.');
			return redirect('perintisan');
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$perintisan = Perintisan::find($id);
		if($perintisan == null) abort(404, "Data perintisan tidak ditemukan.");
		
		return view('perintisan/perintisan-details', ['perintisan'=>$perintisan, 'method'=>'PUT', 'columnDescription'=>Perintisan::$columnDescription]);
	}

	/**
	 * Show the the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->edit($id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		\Date::setLocale('id');
		$input = \Input::all();

		try {
			$input['mulaiberdiri'] = \Date::parse($input['mulaiberdiri']);
		} catch(\Exception $ex){
			return \Redirect::back()->withErrors(['mulaiberdiri'=>'Tanggal mulai berdiri tidak valid.'])->withInput();
		}

		try {
			$input['tanggallahir'] = \Date::parse($input['tanggallahir']);
		} catch(\Exception $ex){
			return \Redirect::back()->withErrors(['tanggallahir'=>'Tanggal lahir perintis tidak valid.'])->withInput();
		}

		$validator = \Validator::make($input, Perintisan::$rules);
		$validator->setAttributeNames(Perintisan::$columnDescription);

		if($validator->fails()){
			return \Redirect::back()->withErrors($validator)->withInput();

		} else {

			$perintisan = Perintisan::find($id);
			if($perintisan == null) abort(404, "Data perintisan tidak ditemukan.");

			$perintisan->namaperintisan 	= $input['namaperintisan'];
			$perintisan->alamat 			= $input['alamat'];
			$perintisan->departemen 		= $input['departemen'];
			$perintisan->daerah 			= $input['daerah'];
			$perintisan->mulaiberdiri 		= $input['mulaiberdiri'];
			$perintisan->namaperintis 		= $input['namaperintis'];
			$perintisan->tanggallahir 		= $input['tanggallahir'];
			$perintisan->tempatlahir 		= $input['tempatlahir'];
			$perintisan->telepon 			= $input['telepon'];
			$perintisan->gerejamentor 		= $input['gerejamentor'];
			$perintisan->jenisperintisan 	= $input['jenisperintisan'];
			$perintisan->jemaatsm 			= $input['jemaatsm'];
			$perintisan->jemaatdewasa 		= $input['jemaatdewasa'];
			$perintisan->jemaatrkm 			= $input['jemaatrkm'];
			$perintisan->jemaatkka 			= $input['jemaatkka'];
			$perintisan->bpd 				= $input['bpd'];
			$perintisan->keterangan 		= $input['keterangan'];

			$perintisan->save();

			\Session::flash('message', 'Data perintisan berhasil disimpan.');
			return redirect('perintisan');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$perintisan = Perintisan::find($id);
		if($perintisan == null) abort(404, "Data perintisan tidak ditemukan.");
		$perintisan->delete();

		\Session::flash('message', 'Data perintisan telah dihapus.');
		return redirect('perintisan');
	}

}
