<?php

namespace App\Http\Controllers;

use App\Models\Sambutan;
use Illuminate\Http\Request;

class SambutanController extends Controller
{
    public function ubahSambutan(Request $request)
    {
        if ($request->file('gambar')) {
            $gambar = $request->file('gambar')->getClientOriginalName();
            $file = $request->file('gambar');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/landing/images';
            $file->move($destinationPath, $fileName);
        } else {
            $gambar = Sambutan::latest()->first()->gambar;
        }
        Sambutan::create([
            "gambar" => $gambar,
            "sambutan" => nl2br($request->sambutan)
        ]);
        return back()->with('pesan', 'Sambutan berhasil diubah');
    }
}
