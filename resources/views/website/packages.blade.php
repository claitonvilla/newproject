@extends('website.main')
@section('content')

    <section class="container-fluid" id="headerpacote"
        style="background-image: url('{{ asset('img/heading-6-1920x500.jpg') }}')">
        <div class="row">
            <h1>
                LOREM IPSUM DOLOR SIT AMET
            </h1>
            <p>
                PACKAGES
            </p>
        </div>
    </section>
    <section class="container-fluid" id="allpackages">
        <div class="container packs">
            <div class="row lineOne">

                @foreach ($pacotes as $pacote)
                
                    <div class="col-sm-4 unicpack ">
                        <div class="card" style="">
                            <a href="{{ route('home.pacotes.show', [$pacote->id]) }}" style="background-image: url('{{ route('home.imagem', [$pacote->imagens[0]->imagem->id]) }}');">
                                <img src="{{ route('home.imagem', [$pacote->imagens[0]->imagem->id]) }}" class="card-img-top" style="text-decoration:none" alt="...">
                            </a>
                            <div class="card-body">
                                <a href="" style="text-decoration:none">
                                    <h4 class="card-title">{{ $pacote->nome }}</h4>
                                </a>
                                <h6 class="card-title"> ${{ $pacote->precos->min('price') }},00 - ${{ $pacote->precos->max('price') }},00</h6>
                                <p class="card-text">{{ $pacote->chamada }}</p>
                                <div class="icones">
                                    <div class="icon"><i class="fa fa-calendar"></i> {{ Helper::getEstacao($pacote->precos[0]->from) }}</div>
                                    <div class="icon"><i class="fa fa-cube"></i> {{ $pacote->noites }} Nights</div>
                                    @if ($pacote->pass_aerea == 1)
                                    <div class="icon"><i class="fa fa-plane"></i> Fligh included</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>  

                @endforeach


            </div>
            <div class="row">
                <div class="col-sm-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">                            
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>


















































@endsection
