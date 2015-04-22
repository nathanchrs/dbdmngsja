<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perintisan;

class PerintisanListController extends Controller {

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
	 * Show the application dashboard to the user.
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
		$data->setPath('dashboard');
		$data->appends($request->except('page'));
		return view('dashboard', ['data'=>$data, 'validcolumns'=>$validcolumns]);
	}

}