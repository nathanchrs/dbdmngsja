<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Perintisan;

use Illuminate\Http\Request;

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
		$validcolumns = ['namaperintisan'=>'Nama perintisan', 'alamat'=>'Alamat', 'departemen'=>'Departemen', 'daerah'=>'Daerah', 'namaperintis'=>'Nama perintis', 'telepon'=>'Telepon', 'gerejamentor'=>'Gereja mentor', 'jenisperintisan'=>'Jenis perintisan', 'bpd'=>'BPD', 'keterangan'=>'Keterangan'];

		if($request->has('search')){
			$searchcolumn = $request->has('searchcolumn') ? $request->input('searchcolumn') : 'namaperintisan';
			if(!array_key_exists($searchcolumn, $validcolumns)) $searchcolumn = 'namaperintisan';

			$data = Perintisan::where($searchcolumn,'like','%'.$request->input('search').'%')->paginate(50);
		} else {
			$data = Perintisan::paginate(50);

		}	

		$request->flash();	
		$data->setPath('perintisan');
		$data->appends($request->except('page'));
		return view('perintisan/perintisan', ['data'=>$data, 'validcolumns'=>$validcolumns]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('perintisan/perintisan-details', ['method'=>'POST']);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return "store";
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
		
		return view('perintisan/perintisan-details', ['perintisan'=>$perintisan, 'method'=>'PUT']);
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
		return "update ".$id;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "delete ".$id;
	}

}
