<?php

namespace App\Http\Controllers;

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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function sobreNos()
    {
        dd('aqui vou retornar a view sobrenos');
    }

    public function termos()
    {
        dd('aqui vou retornar a view termos');
    }

    public function contateNos()
    {
        dd('aqui vou retornar a view contatenos');
    }
}
