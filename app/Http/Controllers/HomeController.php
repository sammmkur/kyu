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
                ->addColumn('action', function($row){

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->Nomor_Program.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProgram">Edit</a>';

                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->Nomor_Program.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProgram">Delete</a>';

                     return $btn;
             })
             ->rawColumns(['action'])
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
        ,'Kegiatan'=>$Kegiatan,'Tanggal_Pelaksanaan'=>now(),'Tempat'=>$Tempat,'Pelaksana'=>$Pelaksana,'Penanggungjawab'=>$Penanggungjawab,'Total_Anggaran'=>$TotalAnggaran
        ]);

        return response()->json(['success'=>'Score saved successfully.']);
        // return $NamaProgram;
    }
    public function EditMasterProgram(Request $request)
    {
        $data = DB::table('masterdata_program')
        ->where('Nomor_Program',$request->NomorProgram)
        ->get();
        return response()->json($data);
    }
    public function ProsesEditMasterProgram(Request $request){
        // dd($request->all());
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
        ->where('Nomor_Program',$Nomorprogram)
        ->update([
            'Nama_Program'=>$NamaProgram,
            'Tujuan'=>$Tujuan,
            'Sasaran'=>$Sasaran,
            'Kegiatan'=>$Kegiatan,
            'Tanggal_Pelaksanaan'=>now(),
            'Tempat'=>$Tempat,
            'Pelaksana'=>$Pelaksana,
            'Penanggungjawab'=>$Penanggungjawab,
            'Total_Anggaran'=>$TotalAnggaran
        ]);


        return response()->json(['success'=>'Program saved successfully.']);

    }
    public function DeleteProgram(Request $request){
        // dd($request->all());
        $Nomorprogram = $request->NomorProgram;

        $data=DB::table('masterdata_program')
        ->where('Nomor_Program',$Nomorprogram)
        ->delete();

        // return $data;
        // return response()->json($data);
        return response()->json(['success'=>'Program Delete successfully.']);

    }

}
