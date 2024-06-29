<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Absensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{


    public function authenticate(Request $request)
    {



        $person = DB::table('pegawais')->select('*')->where('email', '=', $request->email)->get();

        if (isset($person)) {

            $decode = json_decode($person);

            session(['id_pegawais' => $decode[0]->id_pegawais]);
            session(['id_departemens' => $decode[0]->id_departemens]);
            session(['nip' => $decode[0]->nip]);
            session(['nama' => $decode[0]->nama]);
            session(['email' => $decode[0]->email]);


            return redirect()->intended('/dashboard');
        }

        return back();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pegawais = Pegawai::with('departemens')->get();

        $absensis = DB::table('absensis')
            ->select('status')
            ->get();


        $data = [
            'pegawais' => $pegawais,
            'absensis' => $absensis
        ];



        return view('pages.pegawai.index', $data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        //
    }
}
