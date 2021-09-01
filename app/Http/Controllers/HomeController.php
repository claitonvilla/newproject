<?php

namespace App\Http\Controllers;

use App\Models\Blogues;
use App\Models\Imagens;
use App\Models\Pacotes;
use App\Models\Depoimentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        return view('website.home');
    }

    public function sobreNos()
    {
        return view('website.aboutUs');
    }

    public function termos()
    {
        return view('website.terms');
    }

    public function contateNos()
    {
        return view('website.contactUs');
    }

    public function admin()
    {
        return view('admin.index');
    }

    public function showImage(Imagens $imagem)
    {
        $name = $imagem->name;
        $file = Storage::path("public/{$name}");
        return response()->file($file, ["Content-Type"=> $imagem->mime]);
    }

    public function pacotes()
    {
        return view('website.packages');
    }

    public function pacoteShow(Pacotes $pacote)
    {
        return view('website.packagesDetails', compact('pacote'));
    }

    public function blogs()
    {
        return view('website.blogs');
    }

    public function blogShow(Blogues $blog)
    {
        return view('website.blogsDetails', compact('blog'));
    }

    public function depoimentoShow(Depoimentos $depoimento)
    {
        return view('website.testemonials', compact('depoimento'));
    }

    

}
