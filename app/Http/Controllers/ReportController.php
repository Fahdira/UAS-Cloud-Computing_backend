<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth')->only(['index']);
        $this -> middleware('api')->only(['get_report']);

    }

    public function get_report(Request $request){
        $report = DB::table('order_details')
         ->join('products', 'products.id', '=', 'order_details.id_produk')
         ->select(DB::raw('
         nama_barang, 
         count(*) as jumlah_dibeli, 
         harga,
         SUM(total) as pendapatan,
         SUM(jumlah) as total_qty'))
         ->whereRaw("date(order_details.created_at) >= '$request->dari'")
         ->whereRaw("date(order_details.created_at) <= '$request->sampai'")
         ->groupBy('id_produk', 'nama_barang', 'harga', 'products.id')
         ->get();

        return response()->json([
            'data' => $report
        ]);
    }

    public function index(){
       
        return view('report.index') ;
    }
}
