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
        $informasi = Informasi::all();
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
    public function detail()
    {
        return view("landing.information_detail");
    }

    public function ekskul()
    {
        return view("landing.ekskul");
    }

    public function blog()
    {
        return view("landing.blog");
    }

    public function contact()
    {
        return view("landing.contact");
    }
}
