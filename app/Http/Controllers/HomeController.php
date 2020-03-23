<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home'); //Ruta principal del sistema
    }

    public function welcome(){//Nuevo
      return View::make('auth.login'); //Necesario para autenticar.
    }
}
