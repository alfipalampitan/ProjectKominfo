<?php

namespace App\Http\Controllers;


use App\Models\berita;
use App\Models\LandingPage;
use Illuminate\Http\Request;
use App\Models\agendalandingpage;

class HomeController extends Controller
{
    public function index()
    {
        $landingPage = LandingPage::first(); // Ambil data Landing Page
        $agenda = agendalandingpage::first(); // Ambil data Agenda (jika ada)
        $berita = berita::orderBy('created_at', 'desc')->get(); // Ambil data Berita

        return view('home', compact('landingPage', 'agenda', 'berita'));
    }
}
