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
    public function InputMasterProgram(Request $request)
    {
        $Nomorprogram = $request->Nomorprogram;
        $NamaProgram=$request->NamaProgram;
        $Tujuan=$request->Tujuan;
        $Sasaran=$request->Sasaran;
        $Kegiatan = $request->Kegiatan;
        $Tempat=$request->Tempat;
        $Pelaksana=$request->Pelaksana;
        $Penanggungjawab=$request->Penanggungjawab;
        $TotalAnggaran=$request->TotalAnggaran;
        DB::table('masterdata_program')
        ->insert(['Nomor_Program'=>$Nomorprogram,'Nama_Program'=>$NamaProgram,'Tujuan'=>$Tujuan,'Sasaran'=>$Sasaran
        ,'Kegiatan'=>$Kegiatan,'Tanggal_Pelaksanaan'=>now(),'Tempat'=>$Tempat,'Pelaksana'=>$Pelaksana,'Penanggungjawab'=>$Penanggungjawab,'Total_Anggaran'=>$TotalAnggaran]);

        return response()->json(['success'=>'Score saved successfully.']);
        // return $NamaProgram;
    }
}
