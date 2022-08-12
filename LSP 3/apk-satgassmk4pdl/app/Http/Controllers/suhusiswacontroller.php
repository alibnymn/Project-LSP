<?php

namespace App\Http\Controllers;

use App\Suhusiswa;
use App\Siswa;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;


class suhusiswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function suhusiswa()
    {
        $suhu = Suhusiswa::with('siswa')->get();
        // return $suhu;
        return view('user/suhusiswa', compact('suhu'));
    }
    public function index()
    {
        $suhu = Suhusiswa::with('siswa')->get();
        // return $suhu;
        return view('suhusiswa/index', compact('suhu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        return view('suhusiswa/create', compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //turunnan diwariskan suhusiswa 
            $suhusiswa = new Suhusiswa;
            $suhusiswa->id_suhu = $request->id_suhu;
            $suhusiswa->id_siswa = $request->id_siswa;
            $suhusiswa->suhu = $request->suhu;
            $suhusiswa->save();

            return redirect('suhusiswa')->with('status', 'Suhu Siswa berhasil ditambah');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\suhusiswa  $suhusiswa
     * @return \Illuminate\Http\Response
     */
    public function show(suhusiswa $suhusiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\suhusiswa  $suhusiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(suhusiswa $suhusiswa)
    {
        $siswa = Siswa::all();
        // $suhu = Suhusiswa::all();
        return view('suhusiswa.edit', compact('siswa','suhusiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\suhusiswa  $suhusiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, suhusiswa $suhusiswa)
    {
        // return $request;
        $suhusiswa->id_suhu = $request->id_suhu;
        $suhusiswa->id_siswa = $request->id_siswa;
        $suhusiswa->suhu = $request->suhu;
        $suhusiswa->save();

        return redirect('suhusiswa')->with('status', 'Suhu Siswa berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\suhusiswa  $suhusiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(suhusiswa $suhusiswa)
    {
        $suhusiswa->delete();

        return redirect('suhusiswa')->with('status', 'Suhu Siswa berhasil dihapus');
    }
}