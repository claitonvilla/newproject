<?php

namespace App\Http\Controllers;

use Image;
use App\Models\Infos;
use App\Models\Precos;
use App\Models\Imagens;
use App\Models\Pacotes;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PacotesImagens;
use Illuminate\Support\Facades\Storage;

class PacotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacotes = Pacotes::all();
        return view('admin.pacotes.listagem', compact('pacotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pacotes.criar');
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
            'noites' => 'required',
            'endereço' => 'nullable',
            'contato_nome' => 'nullable',
            'contato_tel' => 'nullable',
            'contato_cel' => 'nullable',
            'email' => 'required',
            'chamada' => 'required',
            'mapa' => 'nullable',
            'descricao' => 'required',
            'pass_aerea' => 'sometimes|accepted',
            'infos.*.nome' => 'sometimes|required',
            'infos.*.descricao' => 'sometimes|required',
            'price.*.from' => 'sometimes|required|date',
            'price.*.to' => 'sometimes|required|date',
            'price.*.price' => 'sometimes|required|numeric',
            'images.*' => 'sometimes|required|max:10000|mimes:jpg,jpeg,png'
        ]);

        $pacote = Pacotes::create($request->except('infos', 'price', 'images'));
                
        if($pacote):

            foreach($validated['infos'] as $info):
                $info['pacotes_id'] = $pacote->id;
                Infos::create($info);                
            endforeach;

            foreach($validated['price'] as $price):
                $price['pacotes_id'] = $pacote->id;
                Precos::create($price);
            endforeach;

            foreach($validated['images'] as $image):
                $this->uploadAnImage($image, $pacote->id);
                
            endforeach;

                        
        endif; 

        return redirect()->route('admin.pacotes.index');
        
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('aqui vou retornar a view admin.pacotes.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pacotes $pacote)
    {        
        return view('admin.pacotes.editar', compact('pacote'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pacotes $pacote)
    {
        $validated = $request->validate([
            'nome' => 'required',
            'noites' => 'required',
            'endereço' => 'nullable',
            'contato_nome' => 'nullable',
            'contato_tel' => 'nullable',
            'contato_cel' => 'nullable',
            'email' => 'required',
            'chamada' => 'required',
            'mapa' => 'nullable',
            'descricao' => 'required',
            'pass_aerea' => 'sometimes|accepted',
            'infos.*.id' => 'sometimes|required',
            'infos.*.nome' => 'sometimes|required',
            'infos.*.descricao' => 'sometimes|required',
            'price.*.id' => 'sometimes|required',
            'price.*.from' => 'sometimes|required|date',
            'price.*.to' => 'sometimes|required|date',
            'price.*.price' => 'sometimes|required|numeric',
            'images.*' => 'sometimes|required|max:10000|mimes:jpg,jpeg,png'
        ]);

        $pacote->update($request->except('infos', 'price', 'images'));

        foreach($validated['infos'] as $info):

            if(isset($info['id'])):
                $ninfo = Infos::find($info['id']);
                $ninfo->update($info);
            else:
                $info['pacotes_id'] = $pacote->id;
                Infos::create($info);
            endif;
                           
        endforeach;









        return redirect()->back();        

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pacotes $pacote)
    {
        dd('aqui vou retornar a view admin.pacotes.destroy');
    }

    public function uploadAnImage($image, $pacoteId)
	{

        $newName        = Str::uuid()->toString();
        $originalName   = $image->getClientOriginalName();
        $originalMime   = $image->getClientMimeType();
        $originalSize   = $image->getSize();
        $extension      = $image->getClientOriginalExtension();        

        $img = Image::make($image->getRealPath());
        $directory = storage_path("app/public/");

        Storage::makeDirectory("public");

        $imagem = Imagens::create([
            'name' => $newName, 
            'size' => $originalSize,
            'real-name' => $originalName,
            'extension' => $extension,
            'mime' => $originalMime
        ]);

        PacotesImagens::create([
            'pacotes_id' => $pacoteId,
            'imagens_id' => $imagem->id
        ]);
	}

    public function deleteInfo(Infos $info)
    {
        $info->delete();
        return redirect()->back();
    }

    public function deletePricedate(Precos $preco)
    {
        $preco->delete();
        return redirect()->back();
    }

    public function deleteImage(Imagens $imagem)
    {
        $imagem->delete();
        return redirect()->back();
    }



}
