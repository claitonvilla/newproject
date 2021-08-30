<?php

namespace App\Http\Controllers;

use Image;
use App\Models\Imagens;
use App\Models\Depoimentos;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DepoimentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depoimentos = Depoimentos::all();
        return view('admin.depoimentos.listDep', compact('depoimentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.depoimentos.criarDep');
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
            'name' => 'required',
            'testemonial' => 'required',
            'imagens_id' => 'required|max:10000|mimes:jpg,jpeg,png'

             
         ]);

         $validated['imagens_id'] = $this->uploadAnImage($validated['imagens_id']);      

         Depoimentos::create($validated);
         return redirect()->route('admin.depoimentos.index');



        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('aqui vou retornar a view admin.depoimentos.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Depoimentos $depoimento)
    {
        return view('admin.depoimentos.editDep', compact('depoimento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Depoimentos $depoimento)
    {
        $validated = $request->validate([
            'name' => 'required',
            'testemonial' => 'required',
            'imagens_id' => 'nullable|max:10000|mimes:jpg,jpeg,png'

             
         ]);
         
         if(is_null($request->file('imagens_id'))):
            $depoimento->update($request->except('imagens_id'));     
         else:
            $validated['imagens_id'] = $this->uploadAnImage($validated['imagens_id']);
            $depoimento->update($validated);
         endif;
         return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Depoimentos $depoimento)
    {
        $depoimento->delete();
        return redirect()->back();
    }

    public function uploadAnImage($image)
	{

        $newName        = Str::uuid()->toString();
        $originalName   = $image->getClientOriginalName();
        $originalMime   = $image->getClientMimeType();
        $originalSize   = $image->getSize();
        $extension      = $image->getClientOriginalExtension();        

        $img = Image::make($image->getRealPath());
        $directory = storage_path("app/public/");

        Storage::makeDirectory("public");
        $image->move($directory, $newName);

        $imagem = Imagens::create([
            'name' => $newName, 
            'size' => $originalSize,
            'real-name' => $originalName,
            'extension' => $extension,
            'mime' => $originalMime
        ]);

        return $imagem->id;

	}





}
