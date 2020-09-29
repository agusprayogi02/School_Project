<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $data_siswa = Siswa::all();
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
        $up = Siswa::create($request->all());
        if ($up) {
            return redirect()->route("index")->with('sukses', 'Data berhasil diinputkan!!');
        }
    }
    public function edit($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        return view('siswa/edit', ['siswa' => $siswa]);
    }
    public function update(Request $request, $id)
    {
        $data = [
            "nama_siswa" => $request->nama_siswa,
            "jenis_kelamin" => $request->jenis_kelamin,
            "no_induk" => $request->no_induk,
            "no_teleponsiswa" => $request->no_teleponsiswa,
            "nama_wali" => $request->nama_wali,
            "no_teleponwali" => $request->no_teleponwali,
        ];
        $up =  Siswa::where('id', $id)->update($data);
        if ($up) {
            return redirect()->route("index")->with('sukses', 'Data berhasil diupdate!!');
        }
    }
}
