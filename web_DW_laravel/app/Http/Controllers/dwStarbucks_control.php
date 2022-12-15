<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class dwStarbucks_control extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $datas = DB::table('dim_cabang')->get();
 
    //     return view('testsite', ['datas' => $datas]);
    // }

    public function index()
    {
        // DIM cabang - jumlah cabang per provinsi
        $dbCabang = DB::table('dim_cabang')
                    ->select(DB::raw('id_provinsi, nama_provinsi, COUNT(id_toko) AS jumlahToko'))
                    ->groupBy('nama_provinsi', 'id_provinsi')
                    ->orderBy('id_provinsi')
                    ->get();
        
        $labelCabang = $dbCabang -> pluck('nama_provinsi');
        $dataCabang = $dbCabang -> pluck('jumlahToko');

        // DIM karyawan - jumlah karyawan per cabang
        $dbKaryawan = DB::table('dim_karyawan')
                    ->select(DB::raw('id_toko, nama_toko, COUNT(id_karyawan) AS jumlahKaryawan'))
                    ->groupBy('nama_toko', 'id_toko')
                    ->orderBy('id_toko')
                    ->get();
        
        $labelKaryawan = $dbKaryawan -> pluck('nama_toko');
        $dataKaryawan = $dbKaryawan -> pluck('jumlahKaryawan');
        
        // DIM produk - produk per tipe produk
        $dbProdukPerTipe = DB::table('dim_produk')
                    ->select(DB::raw('id_tipe_produk, tipe_produk, COUNT(kode_produk) AS jumlahProduk'))
                    ->groupBy('tipe_produk', 'id_tipe_produk')
                    ->orderBy('id_tipe_produk')
                    ->get();
        
        $labelProdukPerTipe = $dbProdukPerTipe -> pluck('tipe_produk');
        $dataProdukPerTipe = $dbProdukPerTipe -> pluck('jumlahProduk');
        
        // DIM produk - jumlah tipe produk
        $dbTipeProduk = DB::table('dim_produk')
                    ->select(DB::raw('id_tipe_produk, tipe_produk, COUNT(tipe_produk) AS jumlahTipeProduk'))
                    ->groupBy('tipe_produk', 'id_tipe_produk')
                    ->orderBy('id_tipe_produk')
                    ->get();
        
        $labelTipeProduk = $dbTipeProduk -> pluck('id_tipe_produk');
        $dataTipeProduk = $dbTipeProduk -> pluck('jumlahTipeProduk');

        // DIM sk waktu 
        $dbSKPenjualan = DB::table('fact_penjualan')
                    ->select(DB::raw('sk_waktu, COUNT(jumlah_pembelian) AS jumlahPembelian'))
                    ->groupBy('sk_waktu')
                    ->orderBy('sk_waktu')
                    ->get();
        
        $labelWaktu = $dbSKPenjualan -> pluck('sk_waktu');
        $labelPembelian = $dbSKPenjualan -> pluck('jumlahPembelian');
        
        return view('testsite', compact('dbCabang', 'labelCabang', 'dataCabang',
                                        'dbKaryawan', 'labelKaryawan', 'dataKaryawan',
                                        'dbProdukPerTipe', 'labelProdukPerTipe', 'dataProdukPerTipe',
                                        'dbSKPenjualan', 'labelWaktu', 'labelPembelian'));
        
    }
    public function cabang()
    {
        $dbCabang = DB::table('dim_cabang')
                    ->select(DB::raw('id_provinsi, nama_provinsi, COUNT(id_toko) AS jumlahToko'))
                    ->groupBy('nama_provinsi', 'id_provinsi')
                    ->orderBy('id_provinsi')
                    ->get();
        
        $labelCabang = $dbCabang -> pluck('nama_provinsi');
        $dataCabang = $dbCabang -> pluck('jumlahToko');
        
        return view('cabang', compact('dbCabang', 'labelCabang', 'dataCabang'));
    }
    public function produk()
    {
        $dbProdukPerTipe = DB::table('dim_produk')
                    ->select(DB::raw('id_tipe_produk, tipe_produk, COUNT(kode_produk) AS jumlahProduk'))
                    ->groupBy('tipe_produk', 'id_tipe_produk')
                    ->orderBy('id_tipe_produk')
                    ->get();
        
        $labelProdukPerTipe = $dbProdukPerTipe -> pluck('tipe_produk');
        $dataProdukPerTipe = $dbProdukPerTipe -> pluck('jumlahProduk');
        
        return view('produk', compact('dbProdukPerTipe', 'labelProdukPerTipe', 'dataProdukPerTipe'));
    }
    public function penjualan()
    {
        // fact_penjualan - jumlah tipe pembayaran
        $dbTipePembayaran = DB::table('fact_penjualan')
                        ->select(DB::raw('tipe_pembayaran, COUNT(tipe_pembayaran) AS jumlah'))
                        ->groupBy('tipe_pembayaran')
                        ->get();
        
        $labelTipePembayaran = $dbTipePembayaran -> pluck('tipe_pembayaran');
        $dataTipePembayaran = $dbTipePembayaran -> pluck('jumlah');

        return view('fact_penjualan', compact('dbTipePembayaran', 'labelTipePembayaran', 'dataTipePembayaran'));
    }


    public function COBAK()
    {
        // DIM cabang - jumlah cabang per provinsi
        $dbCabang = DB::table('dim_cabang')
                    ->select(DB::raw('id_provinsi, nama_provinsi, COUNT(id_toko) AS jumlahToko'))
                    ->groupBy('nama_provinsi', 'id_provinsi')
                    ->orderBy('id_provinsi')
                    ->get();
        
        $labelCabang = $dbCabang -> pluck('nama_provinsi');
        $dataCabang = $dbCabang -> pluck('jumlahToko');

        // DIM karyawan - jumlah karyawan per cabang
        $dbKaryawan = DB::table('dim_karyawan')
                    ->select(DB::raw('id_toko, nama_toko, COUNT(id_karyawan) AS jumlahKaryawan'))
                    ->groupBy('nama_toko', 'id_toko')
                    ->orderBy('id_toko')
                    ->get();
        
        $labelKaryawan = $dbKaryawan -> pluck('nama_toko');
        $dataKaryawan = $dbKaryawan -> pluck('jumlahKaryawan');
        
        // DIM produk - produk per tipe produk
        $dbProdukPerTipe = DB::table('dim_produk')
                    ->select(DB::raw('id_tipe_produk, tipe_produk, COUNT(kode_produk) AS jumlahProduk'))
                    ->groupBy('tipe_produk', 'id_tipe_produk')
                    ->orderBy('id_tipe_produk')
                    ->get();
        
        $labelProdukPerTipe = $dbProdukPerTipe -> pluck('tipe_produk');
        $dataProdukPerTipe = $dbProdukPerTipe -> pluck('jumlahProduk');
        
        // DIM produk - jumlah tipe produk
        $dbTipeProduk = DB::table('dim_produk')
                    ->select(DB::raw('id_tipe_produk, tipe_produk, COUNT(tipe_produk) AS jumlahTipeProduk'))
                    ->groupBy('tipe_produk', 'id_tipe_produk')
                    ->orderBy('id_tipe_produk')
                    ->get();
        
        $labelTipeProduk = $dbTipeProduk -> pluck('id_tipe_produk');
        $dataTipeProduk = $dbTipeProduk -> pluck('jumlahTipeProduk');
        
        return view('cobak', compact('dbCabang', 'labelCabang', 'dataCabang',
                                        'dbKaryawan', 'labelKaryawan', 'dataKaryawan',
                                        'dbProdukPerTipe', 'labelProdukPerTipe', 'dataProdukPerTipe',
                                        'dbTipeProduk', 'labelTipeProduk', 'dataTipeProduk',
                                    ));
    }
    public function TIPEBAYAR()
    {
        // fact_penjualan - jumlah tipe pembayaran
        $dbTipePembayaran = DB::table('fact_penjualan')
                        ->select(DB::raw('tipe_pembayaran, COUNT(tipe_pembayaran) AS jumlah'))
                        ->groupBy('tipe_pembayaran')
                        ->get();
        
        $labelTipePembayaran = $dbTipePembayaran -> pluck('tipe_pembayaran');
        $dataTipePembayaran = $dbTipePembayaran -> pluck('jumlah');

        return view('TIPEBAYAR', compact('dbTipePembayaran', 'labelTipePembayaran', 'dataTipePembayaran'));
    }
}
