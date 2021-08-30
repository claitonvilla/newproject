<?php

namespace App\Http\Controllers;

use App\Models\Blogues;
use Illuminate\Http\Request;

class BloguesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogues = Blogues::all();
        return view('admin.blogs.listagemblog', compact('blogues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.criarblog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required',
            'autor' => 'required',
            'conteudo' => 'required' 
        ]);

        $validated['views']=0;

        
        Blogues::create($validated);
        return redirect()->route('admin.blogues.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('aqui vou retornar a view admin.blogues.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogues $blogue)
    {
        return view('admin.blogs.editarblog', compact('blogue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogues $blogue)
    {
        $validated = $request->validate([

            'nome' => 'required',
            'autor' => 'required',
            'views' => 'nullable',
            'conteudo' => 'required' 
        ]);

        $blogue->update($validated);        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogues $blogue)
    {
        $blogue->delete();
        return redirect()->back();
    }
}
