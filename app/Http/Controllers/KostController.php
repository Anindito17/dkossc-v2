<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;
use App\Kost;
use App\master_kecamatan;
use App\master_jenis;
use App\master_mandi;
use App\master_listrik;
use App\master_wifi;
use App\master_harga;
use Illuminate\Support\Facades\DB;

class KostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $data = array();
        // $data['data_kost'] = \App\Kost::all();
        $data = DB::table('kosts')->join('master_kecamatan', 'master_kecamatan.id', '=', 'kosts.kecamatan')->join('master_jenis','master_jenis.id', '=', 'kosts.jenis')->join('master_mandi','master_mandi.id', '=', 'kosts.mandi')->join('master_listrik','master_listrik.id', '=', 'kosts.listrik')->join('master_wifi','master_wifi.id', '=', 'kosts.wifi')->join('master_harga','master_harga.id', '=', 'kosts.harga')->select('master_kecamatan.nama as namakec','master_kecamatan.id as idkec','kosts.*','master_jenis.nama as namajen','master_jenis.id as idjen','master_mandi.nama as namaman','master_mandi.id as idman','master_listrik.nama as namalis','master_listrik.id as idlis','master_wifi.nama as namawif','master_wifi.id as idwif','master_harga.nama as namahar','master_harga.id as idhar')->paginate(10);
        $jenis = DB::table('master_jenis')->get();
        $mandi = DB::table('master_mandi')->get();
        $listrik = DB::table('master_listrik')->get();
        $wifi = DB::table('master_wifi')->get();
        $kecamatan = DB::table('master_kecamatan')->get();
        $harga = DB::table('master_harga')->get();

        return view('dashboard')->with('kosts',$data)->with('kecamatan',$kecamatan)->with('jenis',$jenis)->with('mandi',$mandi)->with('listrik',$listrik)->with('wifi',$wifi)->with('harga',$harga);
        
        // print_r($data);
    }

    public static function filter_kecamatan(Request $request)
    {
        
        $kecamatan = $request->kecamatan;
        $data  = DB::table('kosts')->join('master_kecamatan', 'master_kecamatan.id', '=', 'kosts.kecamatan')->join('master_jenis','master_jenis.id', '=', 'kosts.jenis')->join('master_mandi','master_mandi.id', '=', 'kosts.mandi')->join('master_listrik','master_listrik.id', '=', 'kosts.listrik')->join('master_wifi','master_wifi.id', '=', 'kosts.wifi')->join('master_harga','master_harga.id', '=', 'kosts.harga')->select('master_kecamatan.nama as namakec','master_kecamatan.id as idkec','kosts.*','master_jenis.nama as namajen','master_jenis.id as idjen','master_mandi.nama as namaman','master_mandi.id as idman','master_listrik.nama as namalis','master_listrik.id as idlis','master_wifi.nama as namawif','master_wifi.id as idwif','master_harga.nama as namahar','master_harga.id as idhar')->where('kosts.kecamatan',$kecamatan)->get();
        $kecamatan = DB::table('master_kecamatan')->get();
        $jenis = DB::table('master_jenis')->get();$jenis = DB::table('master_jenis')->get();
        $mandi = DB::table('master_mandi')->get();$mandi = DB::table('master_mandi')->get();
        $wifi = DB::table('master_wifi')->get();$wifi = DB::table('master_wifi')->get();
        $listrik = DB::table('master_listrik')->get();$listrik = DB::table('master_listrik')->get();
        $harga = DB::table('master_harga')->get();$harga = DB::table('master_harga')->get();
        
        return view('dashboard')->with('kosts',$data)->with('kecamatan',$kecamatan)->with('jenis',$jenis)->with('mandi',$mandi)->with('listrik',$listrik)->with('wifi',$wifi)->with('harga',$harga);
    }
    
    public static function filter_jenis(Request $request)
    {
        
        $jenis = $request->jenis;
        $data  = DB::table('kosts')->join('master_kecamatan', 'master_kecamatan.id', '=', 'kosts.kecamatan')->join('master_jenis','master_jenis.id', '=', 'kosts.jenis')->join('master_mandi','master_mandi.id', '=', 'kosts.mandi')->join('master_listrik','master_listrik.id', '=', 'kosts.listrik')->join('master_wifi','master_wifi.id', '=', 'kosts.wifi')->join('master_harga','master_harga.id', '=', 'kosts.harga')->select('master_jenis.nama as namajen','master_jenis.id as idjen','kosts.*','master_kecamatan.nama as namakec','master_kecamatan.id as idkec','master_mandi.nama as namaman','master_mandi.id as idman','master_listrik.nama as namalis','master_listrik.id as idlis','master_wifi.nama as namawif','master_wifi.id as idwif','master_harga.nama as namahar','master_harga.id as idhar')->where('kosts.jenis',$jenis)->get();
        $jenis = DB::table('master_jenis')->get();
        $kecamatan = DB::table('master_kecamatan')->get();$kecamatan = DB::table('master_kecamatan')->get();
        $mandi = DB::table('master_mandi')->get();$mandi = DB::table('master_mandi')->get();
        $wifi = DB::table('master_wifi')->get();$wifi = DB::table('master_wifi')->get();
        $listrik = DB::table('master_listrik')->get();$listrik = DB::table('master_listrik')->get();
        $harga = DB::table('master_harga')->get();$harga = DB::table('master_harga')->get();
        
        return view('dashboard')->with('kosts',$data)->with('kecamatan',$kecamatan)->with('jenis',$jenis)->with('mandi',$mandi)->with('listrik',$listrik)->with('wifi',$wifi)->with('harga',$harga);
    }

    public static function filter_harga(Request $request)
    {
        
        $harga = $request->harga;
        $data  = DB::table('kosts')->join('master_kecamatan', 'master_kecamatan.id', '=', 'kosts.kecamatan')->join('master_jenis','master_jenis.id', '=', 'kosts.jenis')->join('master_mandi','master_mandi.id', '=', 'kosts.mandi')->join('master_listrik','master_listrik.id', '=', 'kosts.listrik')->join('master_wifi','master_wifi.id', '=', 'kosts.wifi')->join('master_harga','master_harga.id', '=', 'kosts.harga')->select('master_harga.nama as namahar','master_harga.id as idhar','kosts.*','master_jenis.nama as namajen','master_jenis.id as idjen','master_kecamatan.nama as namakec','master_kecamatan.id as idkec','master_mandi.nama as namaman','master_mandi.id as idman','master_listrik.nama as namalis','master_listrik.id as idlis','master_wifi.nama as namawif','master_wifi.id as idwif')->where('kosts.harga',$harga)->get();
        $harga = DB::table('master_harga')->get();
        $jenis = DB::table('master_jenis')->get();$jenis = DB::table('master_jenis')->get();
        $kecamatan = DB::table('master_kecamatan')->get();$kecamatan = DB::table('master_kecamatan')->get();
        $mandi = DB::table('master_mandi')->get();$mandi = DB::table('master_mandi')->get();
        $wifi = DB::table('master_wifi')->get();$wifi = DB::table('master_wifi')->get();
        $listrik = DB::table('master_listrik')->get();$listrik = DB::table('master_listrik')->get();
        
        
        return view('dashboard')->with('kosts',$data)->with('kecamatan',$kecamatan)->with('jenis',$jenis)->with('mandi',$mandi)->with('listrik',$listrik)->with('wifi',$wifi)->with('harga',$harga);
    }
    

    
    
}
