@extends('admin.main')
@section('content')


    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('admin.depoimentos.update', [$depoimento->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <ul>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        @endif
                    </ul>
                    <div class="form-row mt-5">
                        <div class="form-group col-sm-12">
                            <label for="exampleFormControlInput1">Nome</label>
                            <input type="text" name="name" value="{{ $depoimento->name }}" class="form-control" id="exampleFormControlInput1" placeholder=""
                                required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label for="exampleFormControlTextarea1">Depoimento</label>
                            <textarea class="form-control" name="testemonial" id="exampleFormControlTextarea1" rows="3"
                                required>{{ $depoimento->testemonial }}</textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <img width='100' src="{{ route('home.imagem', [$depoimento->imagens_id])}}" alt="">
                        <div class="form-group col-sm-5">
                            <input type="file" name=imagens_id class="form-control image">
                        </div>
                        <div class="form-group col-sm-7 text-right">
                            <button class="btn btn-success" type="submit">Salvar</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </section>
@endsection