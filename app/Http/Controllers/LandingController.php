<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Karya;
use App\Models\Pegawai;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LandingController extends Controller
{
    public function beranda()
    {
        $informasi = Informasi::orderBy('created_at', 'desc')->take(6)->get();
        return view("landing.home", compact('informasi'));
    }

    public function profile()
    {
        $so = StrukturOrganisasi::latest()->first();
        $total = Pegawai::all()->count();
        $guru = Pegawai::where('posisi', 'guru')->get()->count();
        $tendik = Pegawai::where('posisi', 'tendik')->get()->count();
        return view("landing.profile", compact('so', 'guru', 'tendik', 'total'));
    }

    public function pegawai()
    {
        $guru = Pegawai::where('posisi', 'guru')->get();
        $tendik = Pegawai::where('posisi', 'tendik')->get();
        return view("landing.pegawai", compact('guru', 'tendik'));
    }

    public function perpustakaan()
    {
        return view("landing.perpustakaan");
    }

    public function ekskul()
    {
        return view("landing.ekskul");
    }

    public function karya()
    {
        $karya_image = Karya::where('format', 'image')->get();
        $karya_video = Karya::where('format', 'video')->get();
        $karya_audio = Karya::where('format', 'audio')->get();
        return view("landing.karya", compact('karya_image', 'karya_video', 'karya_audio'));
    }

    public function informasi()
    {
        $informasi = Informasi::orderBy('created_at', 'desc')->get();
        return view("landing.informasi", compact('informasi'));
    }

    public function informasiDetail(Informasi $informasi)
    {
        $informasiRandom = Informasi::inRandomOrder()->take(3)->get();
        return view("landing.informasi_detail", compact('informasi', 'informasiRandom'));
    }

    public function contact()
    {
        return view("landing.contact");
    }
    public function kirimPesan(Request $request)
    {
        Mail::send('mail.kirim_pesan', ["pesan" => $request->pesan], function ($message) use ($request) {
            $message->from($request->email, $request->nama_depan . " " . $request->nama_belakang);
            $message->to('kontak@smpn7bontang.sch.id', 'SMPN 7 Bontang');
            $message->subject($request->subjek);
        });
        return back()->with("pesan", "<script>alert('Pesan berhasil dikirim');</script>");
    }
}
