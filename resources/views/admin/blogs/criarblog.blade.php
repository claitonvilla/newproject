@extends('admin.main')
@section('content')


    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('admin.blogues.store') }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    
                    <ul>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    @endif
                    </ul>
                    <div class="form-row mt-5">
                        <div class="form-group col-sm-12">
                            <label for="exampleFormControlInput1">Nome Blog</label>
                            <input type="text" name="nome" class="form-control" id="exampleFormControlInput1"
                                placeholder="" required>
                        </div>
                    </div>   
                    <div class="form-row">
                        <div class="form-group col-sm-12">                        
                            <label for="exampleFormControlInput1">Autor</label>
                            <input type="text" name="autor" class="form-control" id="exampleFormControlInput1">
                        </div>   
                    </div>                                  
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label for="exampleFormControlTextarea1">Conteúdo</label>
                            <textarea class="form-control" name="conteudo" id="exampleFormControlTextarea1" rows="3" required></textarea>
                        </div>                        
                    </div>   
                    <div class="form-row mt-5">
                        <div class="form-group col-sm-12 text-right" >
                           <button class="btn btn-success" type="submit">Salvar</button>
                        </div>
                    </div>   
                </form>
            </div>
        </div>
    </section>
@endsection