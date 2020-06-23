<?php

namespace App\Http\Controllers;

 use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Peserta;
use App\Aktivitas; 


class PesertaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
        $peserta = Peserta::All();
    
      
        $peserta=DB::table('peserta')->paginate(10);
 
    
    	return view('pesertaindex',['peserta' => $peserta]);
    } 

    public function tambah()

    {
    $peserta = Peserta::All();
        $aktivitas = Aktivitas::All(); 
       
       return view('pesertatambah',['peserta' => $peserta, 'aktivitas'=>$aktivitas ]);
      
    }

    public function store(Request $request)
    {
        DB::table('peserta')->insert([
            'nama_peserta'=>$request->nama_peserta,
            'tgl_lahir_peserta'=>$request->tgl_lahir_peserta,
            'jenis_kelamin_peserta'=>$request->gender_peserta,
            'alamat_peserta'=>$request->alamat_peserta,
            'WA_peserta'=>$request->WA_peserta,
            'id_aktivitas'=>$request->id_aktivitas,
            'nama_aktivitas'=>$request->nama_aktivitas,
            'tanggal_aktivitas'=>$request->tanggal_aktivitas
        ]);

        return redirect('/peserta');
    } 

    public function edit($id)
    {
    // mengambil data pegawai berdasarkan id yang dipilih 
    // $donatur = Donatur::find($id);
	$peserta = DB::table('peserta')->where('id_peserta',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('pesertaedit',['peserta' => $peserta]);
 
    }   


    public function update($id, Request $request)
    { 
        { 
            DB::table('peserta')->where('id_peserta',$request->id)->update([
                'nama_peserta'=>$request->nama_peserta,
                'tgl_lahir_peserta'=>$request->tgl_lahir,
                'jenis_kelamin_peserta'=>$request->gender,
                'alamat_peserta'=>$request->alamat,
                'WA_peserta'=>$request->WA_peserta, 
                'id_aktivitas'=>$request->id_aktivitas,
                'nama_aktivitas'=>$request->nama_aktivitas,
                'tanggal_aktivitas'=>$request->tanggal_aktivitas
    
            ]);
    
            return redirect('/peserta');
        } 
    }
    
    public function delete($id) {
        DB::table('peserta')->where('id_peserta', $id)->delete();

        return redirect('/peserta');

    }  

    public function find(Request $request){
        $find= $request->find; 

        $peserta=DB::table('peserta')
        ->where ('nama_peserta', 'like', '%'. $find.'%')
        ->paginate();

        return view('pesertaindex',['peserta' =>$peserta]);

    }


}
