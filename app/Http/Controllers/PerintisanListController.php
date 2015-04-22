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
		if($request->has('search')){
			$data = Perintisan::where('namaperintisan','like','%'.$request->input('search').'%')->paginate(2);
			$data->setPath('dashboard');
			return view('dashboard', ['data'=>$data, 'search'=>$request->input('search')]);
		} else {
			$data = Perintisan::paginate(2);
			$data->setPath('dashboard');
			return view('dashboard', ['data'=>$data]);
		}		
	}

}