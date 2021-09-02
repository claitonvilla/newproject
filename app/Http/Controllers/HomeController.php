<?php

namespace App\Http\Controllers;

use App\Models\Blogues;
use App\Models\Imagens;
use App\Models\Pacotes;
use App\Models\Depoimentos;
use App\Http\Helpers\Helper;
use App\Mail\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
        $pacotes = Pacotes::take(3)->get();
        $blogues = Blogues::take(3)->get();
        $depoimentos = Depoimentos::take(3)->get();
        
        return view('website.home', compact('pacotes', 'blogues', 'depoimentos'));
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
        $pacotes = Pacotes::take(6)->get();
        return view('website.packages', compact('pacotes'));
    }

    public function pacoteShow(Pacotes $pacote)
    {
        return view('website.packagesDetails', compact('pacote'));
    }

    public function blogs()
    {
        $blogues = Blogues::take(6)->get();
        $maisVisualizados = Blogues::take(5)->orderBy('views', 'DESC')->get();
        return view('website.blogs', compact('blogues', 'maisVisualizados'));
    }

    public function blogShow(Blogues $blog)
    {
        Helper::addView($blog->id);
        return view('website.blogsDetails', compact('blog'));
    }

    public function depoimentoShow()
    {
        $depoimentos = Depoimentos::all();
        return view('website.testemonials', compact('depoimentos'));
    }

    public function sendEmail(Request $request)
    {
        $validated = $request->validate([

            'nome' => 'required',
            'email' => 'required|email',
            'assunto' => 'required',
            'conteudo' => 'required',            

        ]);    

        Mail::to('cleiton_villa_m@hotmail.com')->send(new Contato($validated));
        return redirect()->back();

    }

    

}
