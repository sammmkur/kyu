<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Yajra\Datatables\Datatables;

class HomeController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Program()
    {
        // return view('/layouts/appOri');
        return view('masterprogram');
    }
    public function notulensi()
    {

        return view('index');
    }
    public function MasterProgram()
    {
        $data = DB::table('masterdata_program')
                ->get();
        // dd($data);
        // return($data);
                return DataTables::of($data)
                ->make(true);

    }
}
