<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Transaksi;
use App\Aktivitas;
use App\Donatur;
use PDF;


class LaporanController extends Controller
{
  public function index() {
        $transaksi = Transaksi::all();
        $aktivitas = Aktivitas::all();
        $total_transaksi = Transaksi::select(Transaksi::raw('sum(nominal_donasi) as total'))->first();
        $pdf = PDF::loadView('laporandonasi',compact('transaksi','aktivitas','total_transaksi'));
        return $pdf->download('Laporan Total Donasi.pdf');
    }
}
