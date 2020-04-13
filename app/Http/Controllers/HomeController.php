<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $registros = Hotel::all()->random(10);
        return view('home', compact('registros'));
    }

    public function show(Hotel $hotel)
    {
        $quartos = $hotel->quartos();
        return view('paginas.hotel.show', compact('hotel'));
    }
}
