<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use  App\Transaksi;
use App\Donatur; 
use App\KategoriDonasi; 
use App\Bank; 
use PDF; 

class TransaksiController extends Controller
{ 
    public function index()
    {
   	// mengambil data dari table pegawai
       $transaksi_donasi = Transaksi::All(); 
       $bank = Bank::All(); 
       $kategori = KategoriDonasi::All(); 
       $donatur = Donatur::All(); 
        
       $transaksi=DB::table('transaksi_donasi')->paginate(10);

   
       return view('transaksiindex',['transaksi_donasi' => $transaksi]);
   } 

   public function tambah() 
   {
       $transaksi_donasi = Transaksi::All(); 
       $bank = Bank::All(); 
       $kategori = KategoriDonasi::All(); 
       $donatur = Donatur::All(); 
       
       return view('transaksitambah',['transaksi' => $transaksi_donasi, 'bank'=>$bank, 'kategori'=> $kategori, 'donatur'=>$donatur ]);
    
   } 

   public function store(Request $request)
   {
       DB::table('transaksi_donasi')->insert([ 
            'nama_donatur_trans'=>$request->nama_donatur_trans, 
            'nama_kategori_trans'=>$request->nama_kategori_donasi, 
            'nama_bank_trans'=>$request->bank_tujuan, 
           'tanggal_transaksi'=>$request->tanggal_transaksi, 
           'nominal_donasi'=>$request->nominal_donasi, 
           'keterangan_donasi'=>$request->keterangan_donasi
           
         
           
           ]);

       return redirect('/transaksi');
   }   

   public function edit($id)
   {
   // mengambil data pegawai berdasarkan id yang dipilih 
   // $donatur = Donatur::find($id);
   $transaksi = DB::table('transaksi_donasi')->where('id_transaksi',$id)->get();
   // passing data pegawai yang didapat ke view edit.blade.php
    return view('transaksiedit',['transaksi' => $transaksi]);

   }   

   public function update($id, Request $request)
   { 
       { 
        DB::table('transaksi_donasi')->where('id_transaksi',$request->id)->update([
            'nama_donatur_trans'=>$request->nama_donatur_trans, 
            'nama_kategori_trans'=>$request->nama_kategori_donasi, 
            'nama_bank_trans'=>$request->bank_tujuan, 
           'tanggal_transaksi'=>$request->tanggal_transaksi, 
           'nominal_donasi'=>$request->nominal_donasi, 
           'keterangan_donasi'=>$request->keterangan_donasi
           ]);
           
        return redirect('/transaksi');
       } 
    }


       public function delete($id) {
        DB::table('transaksi_donasi')->where('id_transaksi', $id)->delete();

        return redirect('/transaksi');

    }  

    public function find(Request $request){
        $find= $request->find; 

        $transaksi=DB::table('transaksi')
        ->where ('nominal_donasi', 'like', '%'. $find.'%')
        ->paginate();

        return view('donaturindex',['donatur' =>$donatur]);

    } 

    public function downloadPDF()
                {
                    $transaksi_donasi = Transaksi::All(); 
                    $pdf = PDF::loadView('TransaksipdfView',compact('transaksi_donasi'));
                    return $pdf->download('Transaksi.pdf');
                }



//    public function page()
// {
//     //whatever you are doing here
    
//     $kategori =  sidoni_peterpan\Models\KateogriDonasi::get();
//     foreach ($kategori as $k) {
//         $k->id_kategori_donasi = $k->nama_kategori ."-". ' seaters';
//     }

//     return view('view_name', compact('kategori'));
// }

}
