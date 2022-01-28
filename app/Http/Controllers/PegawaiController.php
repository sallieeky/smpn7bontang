<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function tambahPegawai(Request $request)
    {
        Pegawai::create([
            "nama" => $request->nama,
            "nip" => $request->nip,
            "posisi" => $request->posisi,
            "jabatan" => $request->jabatan
        ]);
        return redirect()->back()->with('pesan', 'Pegawai berhasil ditambahkan');
    }

    public function editPegawai(Request $request)
    {
        Pegawai::where('id', $request->id)->update([
            "nama" => $request->nama,
            "nip" => $request->nip,
            "posisi" => $request->posisi,
            "jabatan" => $request->jabatan
        ]);
        return redirect()->back()->with('pesan', 'Pegawai berhasil diedit');
    }

    public function hapusPegawai(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect()->back()->with('pesan', 'Pegawai berhasil dihapus');
    }
}
