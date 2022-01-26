<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Karya;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        $so = StrukturOrganisasi::orderBy('created_at', 'desc')->first();
        return view("dashboard.home", compact('so'));
    }

    public function ubahStrukturOrganisasi(Request $request)
    {
        StrukturOrganisasi::create([
            "user_id" => auth()->user()->id,
            "gambar" => $request->file('gambar')->getClientOriginalName()
        ]);
        $file = $request->file('gambar');
        $fileName = $file->getClientOriginalName();
        $destinationPath = public_path() . '/landing/images';
        $file->move($destinationPath, $fileName);

        return redirect()->back()->with('pesan', 'Struktur organisasi berhasil diubah');
    }

    public function kelolaInformasi()
    {
        $informasi = Informasi::all();
        return view('dashboard.informasi', compact('informasi'));
    }

    public function kelolaKarya()
    {
        $karya = Karya::all();
        return view('dashboard.karya', compact('karya'));
    }
}
