<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;


class Siswacontroller extends Controller
{
    public function siswa()
    {
        $siswa = DB::table('siswas')->get();
        return view('user.siswa', compact('siswa'));
    }

    
    public function data()
    {
        $siswa = DB::table('siswas')->get();
        return view('siswa.data', compact('siswa'));
    }

    public function tambah()
    {
        return view('siswa.tambah');
    }
    //overloading
    public function tambahprocess(Request $request)
    {
        DB::table('siswas')->insert([
            'id_siswa' => $request->id_siswa,
            'nama' => $request->nama,
            'kelas' => $request->kelas
        ]);
        return redirect('siswa')->with('status', 'Siswa berhasil ditambah');
    }

    public function edit($id)
    {
        $siswa = DB::table('siswas')->where('id_siswa', $id)->first();
        return view('siswa.edit', compact('siswa'));
    }

    public function editprocess(Request $request, $id)
    {
          
        $edulevels = DB::table('siswas')->where('id_siswa', $id)->update([
            'id_siswa' => $request->id_siswa,
            'nama' => $request->nama,
            'kelas' => $request->kelas
        ]);
        return redirect('siswa')->with('status', 'Siswa berhasil diupdate');
    }

    public function delete($id)
    {
        DB::table('siswas')->where('id_siswa', $id)->delete();
        return redirect('siswa')->with('status', 'Jenjang berhasil dihapus');
    }
}