<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return back()->with("pesan", "Informasi berhasil ditambahkan");
    }

    public function editInformasi(Request $request)
    {
        if ($request->hasFile('gambar')) {
            // remove old file
            $oldFileName = Informasi::find($request->id)
                ->gambar;
            $oldFile = public_path() . '/upload/informasi/' . $oldFileName;
            unlink($oldFile);

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
        return back()->with("pesan", "Informasi berhasil diubah");
    }

    public function hapusInformasi(Informasi $informasi)
    {
        // remove file gambar
        $file = public_path() . '/upload/informasi/' . $informasi->gambar;
        if (file_exists($file)) {
            unlink($file);
        }
        $informasi->delete();

        return back()->with("pesan", "Informasi berhasil dihapus");
    }
}
