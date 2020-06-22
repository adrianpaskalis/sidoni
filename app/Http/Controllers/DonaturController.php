<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Donatur;
use PDF;
use App\Exports\DonaturExport;
use Excel;

class DonaturController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
        $donatur = \App\Donatur::All(); 
        
        $donatur=DB::table('donatur')->paginate(10);
 
    
    	return view('donaturindex', compact('donatur'));
    }

    public function tambah() 
    {
        return view('donaturtambah');
    }

    public function store(Request $request)
    {
        DB::table('donatur')->insert([
            'nama_donatur'=>$request->nama,
            'tgl_lahir_donatur'=>$request->tgl_lahir,
            'jenis_kelamin_donatur'=>$request->gender,
            'alamat_donatur'=>$request->alamat,
            'WA_donatur'=>$request->WA,
            'Email_donatur'=>$request->email,
            'no_rekening_donatur'=>$request->rekening

        ]);

        return redirect('/donatur');
    }

    public function edit($id)
    {
    // mengambil data pegawai berdasarkan id yang dipilih 
    // $donatur = Donatur::find($id);
	$donatur = DB::table('donatur')->where('id_donatur',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('donaturedit',['donatur' => $donatur]);
 
    }   

 
    public function update($id, Request $request)
    { 
        {
            // $this->validate($request,[
            //    'nama' => 'required',
            //    'alamat' => 'required'
            // ]);
         
            // $donatur = Donatur::find($id);
            // $donatur->nama = $request->nama;
            // $donatur->tgl_lahir = $request->tgl_lahir;
            // $donatur->gender= $request->gender;
            // $donatur->WA=$request->WA;

            // $donatur->email=$request->email;
            // $donatur->rekening=$request->rekening;
            // $donatur->save();
            // return redirect('/donatur');
            
            // $pegawai->nama = $request->nama;
            // $pegawai->alamat = $request->alamat;
            // $pegawai->save();
            // return redirect('/pegawai');
        

        DB::table('donatur')->where('id_donatur',$request->id)->update([
            'nama_donatur'=>$request->nama,
            'tgl_lahir_donatur'=>$request->tgl_lahir,
            'jenis_kelamin_donatur'=>$request->gender,
            'alamat_donatur'=>$request->alamat,
            'WA_donatur'=>$request->WA,
            'Email_donatur'=>$request->email,
            'no_rekening_donatur'=>$request->rekening

        ]);

        return redirect('/donatur');
    } 
}

    public function delete($id) {
        DB::table('donatur')->where('id_donatur', $id)->delete();

        return redirect('/donatur');

    } 

    public function find(Request $request){
        $find= $request->find; 

        $donatur=DB::table('donatur')
        ->where ('nama_donatur', 'like', '%'. $find.'%')
        ->paginate();

        return view('donaturindex',['donatur' =>$donatur]);

    } 

    public function downloadPDF()
    {
        $donatur = Donatur::All(); 
    	$pdf = PDF::loadView('DonaturpdfView',compact('donatur'));
		return $pdf->download('donatur.pdf');
    }

    //public function downloadExcel()
	//{
		//return Excel::download(new DonaturExport, 'donatur.xlsx');
	//}
} 
