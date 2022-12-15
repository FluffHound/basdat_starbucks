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

    //  ============================== HALAMAN TEST ==============================
    public function test()
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
                    ->join('dim_cabang', 'dim_karyawan.id_toko', '=', 'dim_cabang.id_toko')
                    ->select(DB::raw('dim_karyawan.id_toko, dim_karyawan.nama_toko, COUNT(id_karyawan) AS jumlahKaryawan'))
                    ->where('dim_cabang.id_provinsi', '=', '21')
                    ->groupBy('nama_toko', 'dim_karyawan.id_toko')
                    ->orderBy('dim_karyawan.id_toko')
                    ->get();
        
        $labelKaryawan = $dbKaryawan -> pluck('nama_toko');
        $dataKaryawan = $dbKaryawan -> pluck('jumlahKaryawan');
        
        // DIM produk - produk per tipe produk
        $dbProdukPerTipe = DB::table('dim_produk')
                    ->select(DB::raw('id_tipe_produk, nama_tipe_produk, COUNT(id_produk) AS jumlahProduk'))
                    ->groupBy('nama_tipe_produk', 'id_tipe_produk')
                    ->orderBy('id_tipe_produk')
                    ->get();
        
        $labelProdukPerTipe = $dbProdukPerTipe -> pluck('nama_tipe_produk');
        $dataProdukPerTipe = $dbProdukPerTipe -> pluck('jumlahProduk');

        // DIM sk waktu - jumlah pembelian
        $dbJumlahPenjualan2021 = DB::table('fact_penjualan')
                    ->select(DB::raw('sk_waktu, COUNT(jumlah_pembelian) AS jumlahPembelian'))
                    ->where('sk_waktu', 'like', '2021%')
                    ->groupBy('sk_waktu')
                    ->orderBy('sk_waktu')
                    ->get();
        
        $labelWaktu2021 = $dbJumlahPenjualan2021 -> pluck('sk_waktu');
        $dataPembelian2021 = $dbJumlahPenjualan2021 -> pluck('jumlahPembelian');

        $dbJumlahPenjualan2020 = DB::table('fact_penjualan')
                    ->select(DB::raw('sk_waktu, COUNT(jumlah_pembelian) AS jumlahPembelian'))
                    ->where('sk_waktu', 'like', '2020%')
                    ->groupBy('sk_waktu')
                    ->orderBy('sk_waktu')
                    ->get();
        
        $labelWaktu2020 = $dbJumlahPenjualan2020 -> pluck('sk_waktu');
        $dataPembelian2020 = $dbJumlahPenjualan2020 -> pluck('jumlahPembelian');

        $dbJumlahPenjualan2019 = DB::table('fact_penjualan')
                    ->select(DB::raw('sk_waktu, COUNT(jumlah_pembelian) AS jumlahPembelian'))
                    ->where('sk_waktu', 'like', '2019%')
                    ->groupBy('sk_waktu')
                    ->orderBy('sk_waktu')
                    ->get();
        
        $labelWaktu2019 = $dbJumlahPenjualan2019 -> pluck('sk_waktu');
        $dataPembelian2019 = $dbJumlahPenjualan2019 -> pluck('jumlahPembelian');

        // fact_penjualan - produk per tipe produk
        $dbPemasukan = DB::table('dim_produk')
                    ->join('fact_penjualan', 'dim_produk.sk_produk', '=', 'fact_penjualan.sk_produk')
                    ->select(DB::raw('dim_produk.id_tipe_produk, dim_produk.nama_tipe_produk, SUM(fact_penjualan.total_harga) AS totalPemasukan'))
                    ->groupBy('dim_produk.nama_tipe_produk', 'dim_produk.id_tipe_produk')
                    ->orderBy('dim_produk.id_tipe_produk')
                    ->get();
        
        $labelPemasukan = $dbPemasukan -> pluck('nama_tipe_produk');
        $dataPemasukan = $dbPemasukan -> pluck('totalPemasukan');
        
        return view('testsite', compact('dbCabang', 'labelCabang', 'dataCabang',
                                        'dbKaryawan', 'labelKaryawan', 'dataKaryawan',
                                        'dbProdukPerTipe', 'labelProdukPerTipe', 'dataProdukPerTipe',
                                        'dbJumlahPenjualan2021', 'labelWaktu2021', 'dataPembelian2021',
                                        'dbJumlahPenjualan2020', 'labelWaktu2020', 'dataPembelian2020',
                                        'dbJumlahPenjualan2019', 'labelWaktu2019', 'dataPembelian2019',
                                        'dbPemasukan', 'labelPemasukan', 'dataPemasukan'));
        
    }

    //  ============================== HALAMAN CABANG ==============================
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

    //  ============================== HALAMAN PRODUK ==============================
    public function produk()
    {
        $dbProdukPerTipe = DB::table('dim_produk')
                    ->select(DB::raw('id_tipe_produk, nama_tipe_produk, COUNT(id_tipe_produk) AS jumlahProduk'))
                    ->groupBy('nama_tipe_produk', 'id_tipe_produk')
                    ->orderBy('id_tipe_produk')
                    ->get();
        
        $labelProdukPerTipe = $dbProdukPerTipe -> pluck('nama_tipe_produk');
        $dataProdukPerTipe = $dbProdukPerTipe -> pluck('jumlahProduk');
        
        return view('produk', compact('dbProdukPerTipe', 'labelProdukPerTipe', 'dataProdukPerTipe'));
    }

    //  ============================== HALAMAN PENJUALAN ==============================
    public function penjualan()
    {
        // fact_penjualan - jumlah tipe pembayaran
        $dbTipePembayaran = DB::table('fact_penjualan')
                        ->select(DB::raw('tipe_pembayaran, COUNT(tipe_pembayaran) AS jumlah'))
                        ->groupBy('tipe_pembayaran')
                        ->get();
        
        $labelTipePembayaran = $dbTipePembayaran -> pluck('tipe_pembayaran');
        $dataTipePembayaran = $dbTipePembayaran -> pluck('jumlah');
        
        // Jumlah Pembelian berdasarkan waktu 
        $dbJumlahPenjualan2021 = DB::table('fact_penjualan')
        ->select(DB::raw('sk_waktu, COUNT(jumlah_pembelian) AS jumlahPembelian'))
        ->where('sk_waktu', 'like', '2021%')
        ->groupBy('sk_waktu')
        ->orderBy('sk_waktu')
        ->get();

        $labelWaktu2021 = $dbJumlahPenjualan2021 -> pluck('sk_waktu');
        $dataPembelian2021 = $dbJumlahPenjualan2021 -> pluck('jumlahPembelian');

        $dbJumlahPenjualan2020 = DB::table('fact_penjualan')
                ->select(DB::raw('sk_waktu, COUNT(jumlah_pembelian) AS jumlahPembelian'))
                ->where('sk_waktu', 'like', '2020%')
                ->groupBy('sk_waktu')
                ->orderBy('sk_waktu')
                ->get();

        $labelWaktu2020 = $dbJumlahPenjualan2020 -> pluck('sk_waktu');
        $dataPembelian2020 = $dbJumlahPenjualan2020 -> pluck('jumlahPembelian');

        $dbJumlahPenjualan2019 = DB::table('fact_penjualan')
                ->select(DB::raw('sk_waktu, COUNT(jumlah_pembelian) AS jumlahPembelian'))
                ->where('sk_waktu', 'like', '2019%')
                ->groupBy('sk_waktu')
                ->orderBy('sk_waktu')
                ->get();

        $labelWaktu2019 = $dbJumlahPenjualan2019 -> pluck('sk_waktu');
        $dataPembelian2019 = $dbJumlahPenjualan2019 -> pluck('jumlahPembelian');

        return view('fact_penjualan', compact('dbTipePembayaran', 'labelTipePembayaran', 'dataTipePembayaran',
         'dbJumlahPenjualan2021', 'labelWaktu2021', 'dataPembelian2021', 'dbJumlahPenjualan2020',  'labelWaktu2020', 'dataPembelian2020',
         'dbJumlahPenjualan2019', 'labelWaktu2019', 'dataPembelian2019'));
    }

    //  ============================== HALAMAN KARYAWAN ==============================
    public function karyawan()
    {
        $dbKaryawan = DB::table('dim_karyawan')
        ->join('dim_cabang', 'dim_karyawan.id_toko', '=', 'dim_cabang.id_toko')
        ->select(DB::raw('dim_karyawan.id_toko, dim_karyawan.nama_toko, COUNT(id_karyawan) AS jumlahKaryawan'))
        ->where('dim_cabang.id_provinsi', '=', '21')
        ->groupBy('nama_toko', 'dim_karyawan.id_toko')
        ->orderBy('dim_karyawan.id_toko')
        ->get();

        $labelKaryawan = $dbKaryawan -> pluck('nama_toko');
        $dataKaryawan = $dbKaryawan -> pluck('jumlahKaryawan');
        
         // Jumlah Karyawan pada masing-masing posisi
         
         $dbjumlahKaryawan = DB::table('dim_karyawan')
         ->select(DB::raw('id_posisi_karyawan, nama_posisi, COUNT(id_karyawan) AS jumlahPegawai'))
         ->whereIn('id_posisi_karyawan', [4,5,6,17,24,29,23])
         ->groupBy('nama_posisi','id_posisi_karyawan')
         ->orderBy('id_posisi_karyawan')
         ->get();

        $namaPosisi = $dbjumlahKaryawan -> pluck('nama_posisi');
        $labelJumlahKaryawan = $dbjumlahKaryawan -> pluck('jumlahPegawai');

        return view('karyawan', compact('dbKaryawan', 'labelKaryawan', 'dataKaryawan','dbjumlahKaryawan', 'namaPosisi', 'labelJumlahKaryawan',
    'dbKaryawan', 'labelKaryawan','dataKaryawan'));
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
                    ->select(DB::raw('id_tipe_produk, tipe_produk, COUNT(id_produk) AS jumlahProduk'))
                    ->groupBy('tipe_produk', 'id_tipe_produk')
                    ->orderBy('id_tipe_produk')
                    ->get();
        
        $labelProdukPerTipe = $dbProdukPerTipe -> pluck('id_produk');
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
