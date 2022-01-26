<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Karya;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view("dashboard.home");
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
