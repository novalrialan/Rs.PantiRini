<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\JadwalKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PegawaiController extends Controller
{


    public function authenticate(Request $request)
    {
        try {
            $person = Pegawai::where('nip', $request->nip)->first();


            session('id_pegawais', $person->id_pegawais);

            session('id_departemens', $person->id_departemens);


            session('nip', $person->nip);
            session('nama', $person->nama);
            session('email', $person->email);



            return redirect()->intended('dashboard');
        } catch (\Throwable $th) {
            return back()->with('error', 'Tidak Mengenali Akses, Silakan Coba Lagi !!');
        }
    }


    public function dashboard()
    {
        return view('pages.home.dashboard');
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
        $jamkerja = JadwalKerja::with('Pegawai')->where('id_pegawais', '=', session()->get('id_pegawais'))
            ->get();



        $data = [
            'pegawais' => $pegawais,
            'absensis' => $absensis,
            'jamkerja' => $jamkerja,
        ];

        // dd($data);


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
