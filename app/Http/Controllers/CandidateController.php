<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use Auth;
use RealRashid\SweetAlert\ToSweetAlert;
use Alert;
use Illuminate\Support\Facades\Session;

class CandidateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $candidate = Candidate::where("user_id", "=", $user->id)->orderby('id', 'desc')->paginate(10);
        return view('candidate', compact('user', 'candidates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */




    public function store(Request $request)
    {
        $this->validate($request, array(
            'user_id' => 'required',
            'kost_id' => 'required',
        ));

        $status = Candidate::where('user_id', Auth::user()->id)
            ->where('kost_id', $request->kost_id)
            ->first();
        $candidated = Candidate::where('user_id', Auth::user()->id)->get();
        $cek_candidaded = count($candidated);
        if ($cek_candidaded > 0){
            Session::flash('flash', 'Kandidat hanya boleh 1 data, hapus pada halaman profil','info'); 
            return redirect()->back()->with('id_candidate', $candidated[0]->id);
        }

        else {
            $candidate = new Candidate();

            $candidate->user_id = $request->user_id;
            $candidate->kost_id = $request->kost_id;


            $candidate->save();
            Session::flash('flash', 'Kandidat kos tersimpan!','success'); 

            
            return redirect()->back()->with(
                'flash_message',
                'Item, ' . $candidate->kost->nama. ' Added to your wishlist.'
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidate = Candidate::findOrFail($id);
        $candidate->delete();

        $user = Auth::user();
        $candidates = Candidate::where("user_id", "=", $user->id)->orderby('id', 'desc')->paginate(10);
        Session::flash('hapus', 'hanya boleh 1 data!','info'); 
        return redirect('profile');
    }

    public function hapus_realtime(Request $request)
    {;
        $candidate = Candidate::findOrFail($request->id_candidate);
        $candidate->delete();
        // return redirect('profile');
        return 200;
    }
}
