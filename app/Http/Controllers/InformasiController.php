<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Polyfill\Intl\Idn\Info;

class InformasiController extends Controller
{
    public function tambahInformasi(Request $request)
    {
        Informasi::create([
            'user_id' => Auth::user()->id,
            'judul' => $request->judul,
            'gambar' => $request->file("gambar")->getClientOriginalName(),
            'isi' => nl2br($request->isi)
        ]);
        $file = $request->file('gambar');
        $fileName = $file->getClientOriginalName();
        $destinationPath = public_path() . '/upload/informasi';
        $file->move($destinationPath, $fileName);
        return back();
    }

    public function editInformasi(Request $request)
    {
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/upload/informasi';
            $file->move($destinationPath, $fileName);
        } else {
            $fileName = Informasi::find($request->id)
                ->gambar;
        }
        Informasi::find($request->id)
            ->update([
                'judul' => $request->judul,
                'gambar' => $fileName,
                'isi' => nl2br($request->isi)
            ]);
        return back();
    }

    public function hapusInformasi(Informasi $informasi)
    {
        // remove file gambar
        $file = public_path() . '/upload/informasi/' . $informasi->gambar;
        if (file_exists($file)) {
            unlink($file);
        }
        $informasi->delete();

        return back();
    }
}
