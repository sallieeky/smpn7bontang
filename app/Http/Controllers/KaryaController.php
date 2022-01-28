<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KaryaController extends Controller
{

    public function showKarya(Karya $karya)
    {
        return view('dashboard.karya_show', compact('karya'));
    }

    public function tambahKarya(Request $request)
    {
        $ext = $request->file("karya")->getClientOriginalExtension();
        if ($ext == "mp3" || $ext == "m4a" || $ext == "wav") {
            $format = "audio";
            $destinationPath = public_path() . '/upload/karya/audio';
        } else if ($ext == "mp4" || $ext == "mov" || $ext == "avi" || $ext == "mkv") {
            $format = "video";
            $destinationPath = public_path() . '/upload/karya/video';
        } else {
            $format = "image";
            $destinationPath = public_path() . '/upload/karya/image';
        }
        Karya::create([
            'user_id' => Auth::user()->id,
            'karya' => $request->file('karya')->getClientOriginalName(),
            'format' => $format,
            'pencipta' => $request->pencipta,
            'kelas' => $request->kelas,
            'judul' => $request->judul,
            'deskripsi' => nl2br($request->deskripsi)
        ]);
        $file = $request->file('karya');
        $fileName = $file->getClientOriginalName();
        $file->move($destinationPath, $fileName);
        return back()->with("pesan", "Karya berhasil ditambahkan");
    }

    public function editKarya(Request $request)
    {
        if ($request->hasFile('karya')) {

            $ext = $request->file("karya")->getClientOriginalExtension();
            if ($ext == "mp3" || $ext == "m4a" || $ext == "wav") {
                $format = "audio";
                $destinationPath = public_path() . '/upload/karya/audio';
            } else if ($ext == "mp4" || $ext == "mov" || $ext == "avi" || $ext == "mkv") {
                $format = "video";
                $destinationPath = public_path() . '/upload/karya/video';
            } else {
                $format = "image";
                $destinationPath = public_path() . '/upload/karya/image';
            }

            $file = $request->file('karya');
            $fileName = $file->getClientOriginalName();
            $file->move($destinationPath, $fileName);
        } else {
            $fileName = Karya::find($request->id)
                ->karya;
            $format = Karya::find($request->id)
                ->format;
        }
        Karya::find($request->id)
            ->update([
                'karya' => $fileName,
                'format' => $format,
                'pencipta' => $request->pencipta,
                'kelas' => $request->kelas,
                'judul' => $request->judul,
                'deskripsi' => nl2br($request->deskripsi)
            ]);
        return back()->with("pesan", "Karya berhasil diubah");
    }

    public function hapusKarya(Karya $karya)
    {
        $karya->delete();
        return back()->with("pesan", "Karya berhasil dihapus");
    }
}
