<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use App\Kost;
use Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $user = Auth::user();
        $candidates = Candidate::where("user_id", "=", $user->id)->orderby('id', 'desc')->get();
        $hitung_canddate = count($candidates);
        $recommendation = '';
        if ($hitung_canddate > 0) {    //apakah sudah ada kandidat (val)
            $res_kost = Kost::all();   
            $total_data = count(Kost::all());
            $shorten = $candidates[0]->kost;  //mempersingkan pemanggilan
            $rumus = "";  // defaultnya ksoong dulu awal2
            $rumus2 = ['data' => []]; // indeks data default konsong
            for ($i = 0; $i < $total_data; $i++) {  //melooping sebanyak jmlh kos
                if ($shorten->id != $res_kost[$i]->id) {  // membadingkan id kos yg dipilih user dengan id kos loop (jika tdk sama maka rumus jalan) 
                    $rumus = pow($shorten->kecamatan - $res_kost[$i]->kecamatan, 2) + pow($shorten->jenis - $res_kost[$i]->jenis, 2) + pow($shorten->mandi - $res_kost[$i]->mandi, 2) + pow($shorten->listrik - $res_kost[$i]->listrik, 2) + pow($shorten->wifi - $res_kost[$i]->wifi, 2) + pow($shorten->harga - $res_kost[$i]->harga, 2);
                    $rumus_raw = 1 / (1 + $rumus);
                    $raw['kost_id'] = $res_kost[$i]->id; //hasil perhitungan diambil id kos nya
                    $raw['perhitungan'] = $rumus_raw;  //nilai hasilya masuk ke index perhitungan
                    array_push($rumus2['data'], $raw);  //hasil perhitungan di push ke dlm index data di variabel rumus 2
                }
            }

            //pengurutan terbesar ke terkecil

            for ($i = 0; $i < count($rumus2['data']); $i++) {    //method buble sort  (yg lebih besar naik)
                for ($j = 0; $j < count($rumus2['data']); $j++) {
                    if ($rumus2['data'][$i]['perhitungan'] > $rumus2['data'][$j]['perhitungan']) {
                        $temp = $rumus2['data'][$i]['perhitungan'];
                        $temp2 = $rumus2['data'][$i]['kost_id'];
                        $rumus2['data'][$i]['kost_id'] = $rumus2['data'][$j]['kost_id'];
                        $rumus2['data'][$i]['perhitungan'] = $rumus2['data'][$j]['perhitungan'];
                        $rumus2['data'][$j]['kost_id'] = $temp2;
                        $rumus2['data'][$j]['perhitungan'] = $temp;
                    }
                }
            }

            $limit_empat = array_slice($rumus2['data'], 0, 4);
            $kost_id = [];

            for ($i = 0; $i < count($limit_empat); $i++) {  // memasukkan hasil 4 data rekomendasi ke dlm satu var 
                array_push($kost_id, $limit_empat[$i]['kost_id']);
            }


            $recommendation = DB::table('kosts')->whereIn('id', $kost_id)->get();  //mencari data kos rekomendasi di db dengan hasil 4 kos id
        };

        // print_r(json_encode($kost_id));

        // print_r(json_encode($rumus2));

        return view('profile', compact('user', 'candidates', 'recommendation'));


        // return view('profile', [
        //     'user' => $request->user()
        // ]);
    }
}
