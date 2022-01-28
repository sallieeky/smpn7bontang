<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Pegawai;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
        $informasi = Informasi::orderBy('created_at', 'desc')->take(6)->get();
        return view("landing.home", compact('informasi'));
    }

    public function profile()
    {
        $so = StrukturOrganisasi::latest()->first();
        return view("landing.profile", compact('so'));
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
}
