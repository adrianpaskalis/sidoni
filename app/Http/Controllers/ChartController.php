<?php
   
namespace App\Http\Controllers;
 
use App\Transaksi;
use App\Aktivitas;
use App\Donatur; 
use Illuminate\Http\Request;
use Charts;
Use DB;
 
class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
     $grafik  = DB::table('transaksi_donasi')
     ->select(DB::raw("DATE_FORMAT(tanggal_transaksi, '%M') as period, SUM(nominal_donasi) as SiteA"))
     ->orderBy('tanggal_transaksi', 'ASC')->groupby('period')->get();


    $donatur =Donatur::count();
    $aktivitas = Aktivitas::count(); 
     $transaksi = Transaksi::sum('nominal_donasi');
     return view('transaksichart', array('donatur' => $donatur, 'aktivitas' => $aktivitas, 'transaksi'=> $transaksi , 'chart' => $grafik));
    }
 
}
