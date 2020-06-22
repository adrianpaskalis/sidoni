<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Aktivitas;
use App\Transaksi; 
use PDF;
class AktivitasController extends Controller
{ 
            public function index()
            {
                // mengambil data dari table pegawai
                $aktivitas = Aktivitas::All();
                $transaksi = Transaksi::All(); 
                
                $aktivitas=DB::table('aktivitas')->paginate(10);
        
            
                return view('aktivitasindex',['aktivitas' => $aktivitas]);
            }  

            public function tambah() 
            {
             $aktivitas = Aktivitas::All();
             $transaksi = Transaksi::All();
              
                return view('aktivitastambah',['aktivitas' => $aktivitas,'transaksi' => $transaksi]);
    }
            

            public function store(Request $request)
            {
                 DB::table('aktivitas')->insert([
                        'id_trans'=>$request->id_trans,
                        'nama_aktivitas'=>$request->nama_aktivitas,
                        'rencana_tanggal'=>$request->tgl_rencana,
                        'realisasi_tanggal'=>$request->tgl_realisasi,
                        'jenis_aktivitas'=>$request->jenis_aktivitas,
                        'rencan_donasi'=>$request->rencana_donasi,
                        'realisasi_donasi'=>$request->realisasi_donasi,
                       ]);

                return redirect('/aktivitas');
            } 

            public function edit($id)
                {
                // mengambil data pegawai berdasarkan id yang dipilih 
                // $donatur = Donatur::find($id);
                $aktivitas = DB::table('aktivitas')->where('id_aktivitas',$id)->get();
                // passing data pegawai yang didapat ke view edit.blade.php
                return view('aktivitasedit',['aktivitas' => $aktivitas]);
            
                }   
             public function update($id, Request $request)
            { 
                  {  DB::table('aktivitas')->where('id_aktivitas',$request->id)->update([
                    'id_trans'=>$request->id_trans,
                    'nama_aktivitas'=>$request->nama_aktivitas, 
                    'rencana_tanggal'=>$request->tgl_rencana,
                    'realisasi_tanggal'=>$request->tgl_realisasi,
                    'jenis_aktivitas'=>$request->jenis_aktivitas,
                    'rencan_donasi'=>$request->rencana_donasi,
                    'realisasi_donasi'=>$request->realisasi_donasi,
                

                    ]);

                return redirect('/aktivitas');
                 } 
            } 

            public function delete($id) 
                {
                    DB::table('aktivitas')->where('id_aktivitas', $id)->delete();

                    return redirect('/aktivitas');

                } 
            public function find(Request $request)
                {
                    $find= $request->find; 

                    $aktivitas=DB::table('aktivitas')
                    ->where ('nama_aktivitas', 'like', '%'. $find.'%')
                    ->paginate();

                    return view('aktivitasindex',['aktivitas' =>$aktivitas]);

                }


                public function downloadPDF()
                {
                    $aktivitas = Aktivitas::All(); 
                    $pdf = PDF::loadView('AktivitaspdfView',compact('aktivitas'));
                    return $pdf->download('Aktivitas.pdf');
                }
} 
    
    

