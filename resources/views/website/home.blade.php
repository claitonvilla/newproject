@extends('website.main')
@section('content')

    <section class="container-fluid" id="banner">
        <div class="row">
            <div class="carousel">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active"
                            style="background-image: url('{{ asset('img/slider-image-1-1920x600.jpg') }}')">
                            <div class="bannerdiv">
                                <h4>FIND YOUR CAR TODAY</h4>
                                <h2>LOREM IPSUM DOLOR SIT AMET</h2>
                            </div>
                        </div>
                        <div class="carousel-item "
                            style="background-image: url('{{ asset('img/slider-image-2-1920x600.jpg') }}')">
                            <div class="bannerdiv">
                                <h4>FIND YOUR CAR TODAY</h4>
                                <h2>LOREM IPSUM DOLOR SIT AMET</h2>
                            </div>
                        </div>
                        <div class="carousel-item "
                            style="background-image: url('{{ asset('img/slider-image-3-1920x600.jpg') }}')">
                            <div class="bannerdiv">
                                <h4>FIND YOUR CAR TODAY</h4>
                                <h2>LOREM IPSUM DOLOR SIT AMET</h2>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid" id="infos">
        <div class="container">
            <div class="featured">
                <div class="title">Featured Vacations</div>
                <div class="moreInfos"><a href="{{ route('home.pacotes') }}" style="text-decoration:none">VIEW MORE></a></div>
            </div>
            <div class="row cartao">

                @foreach ($pacotes as $pacote)


                    <div class="col-sm-4">
                        <div class="card" style="">
                            <a href="{{ route('home.pacotes.show', [$pacote->id]) }}" style="background-image: url('{{ route('home.imagem', [$pacote->imagens[0]->imagem->id]) }}')">
                                <img src="{{ route('home.imagem', [$pacote->imagens[0]->imagem->id]) }}"
                                class="card-img-top" style="text-decoration:none" alt="...">
                            </a>
                            <div class="card-body">
                                <a href="{{ route('home.pacotes.show', [$pacote->id]) }}" style="text-decoration:none">
                                    <h4 class="card-title">{{ $pacote->nome }}</h4>
                                </a>
                                <h6 class="card-title"> ${{ $pacote->precos->min('price') }},00 -
                                    ${{ $pacote->precos->max('price') }},00</h6>
                                <p class="card-text">{{ $pacote->chamada }}</p>
                                <div class="icones">
                                    <div class="icon"><i class="fa fa-calendar"></i>
                                        {{ Helper::getEstacao($pacote->precos[0]->from) }}</div>
                                    <div class="icon"><i class="fa fa-cube"></i>
                                        {{ $pacote->precos[0]->to->format('Ymd') - $pacote->precos[0]->from->format('Ymd') }}
                                        Nights</div>
                                    @if ($pacote->pass_aerea == 1)
                                        <div class="icon"><i class="fa fa-plane"></i>Fligh included</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>


                @endforeach


                {{-- <div class="col-sm-4">
                    <div class="card" style="">
                        <a href=""><img src="img/product-1-370x270.jpg" class="card-img-top" style="text-decoration:none"
                                alt="..."></a>
                        <div class="card-body">
                            <a href="" style="text-decoration:none">
                                <h4 class="card-title">Limelight Lodge</h4>
                            </a>
                            <h6 class="card-title">$300 - $400</h6>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum incidunt,
                                aperiam nostrum et. Voluptas vel labore numqua..</p>
                            <div class="icones">
                                <div class="icon"><i class="fa fa-calendar"></i>Spring</div>
                                <div class="icon"><i class="fa fa-cube"></i>Nights</div>
                                <div class="icon"><i class="fa fa-plane"></i>Fligh included</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="">
                        <a href=""><img src="img/product-1-370x270.jpg" class="card-img-top" style="text-decoration:none"
                                alt="..."></a>
                        <div class="card-body">
                            <a href="" style="text-decoration:none">
                                <h4 class="card-title">Limelight Lodge</h4>
                            </a>
                            <h6 class="card-title">$300 - $400</h6>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum incidunt,
                                aperiam nostrum et. Voluptas vel labore numqua..</p>
                            <div class="icones">
                                <div class="icon"><i class="fa fa-calendar"></i>Spring</div>
                                <div class="icon"><i class="fa fa-cube"></i>Nights</div>
                                <div class="icon"><i class="fa fa-plane"></i>Fligh included</div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row sobre">
                <div class="col-sm-12">
                    <div class="sobreNos">About Us</div>
                </div>
            </div>
            <div class="row infoNos">
                <div class="col-sm-6 infos">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, esse consequatur alias repellat
                        in excepturi inventore ad asperiores tempora ipsa. Accusantium tenetur voluptate labore aperiam
                        molestiae rerum excepturi minus in pariatur praesentium, corporis, aliquid dicta</p>
                    <ul>
                        <li><a href="" style="text-decoration:none">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="" style="text-decoration:none">Consectetur an adipisicing elite</a></li>
                        <li><a href="" style="text-decoration:none">It aquecorporis nulla aspernatur</a></li>
                        <li><a href="" style="text-decoration:none">Corporis, omnis doloremque</a></li>
                    </ul>
                    <a class="btn btn-danger" href="{{ route('home.more.about') }}" role="button">Read More</a>
                </div>
                <div class="col-sm-6 imagem">
                    <img src="img/about-1-570x350.jpg" width="100%" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid" id="blogs"
        style="background-image: url('{{ asset('img/other-image-fullscren-1-1920x900.jpg') }}')">
        <div class="container painel">
            <div class="blogsviews">
                <div class="title">Latest blog posts</div>
                <div class="moreBlogs"><a href="{{ route('home.blogs') }}" style="text-decoration:none">VIEW MORE></a></div>
            </div>
            <div class="row allcards">


                @foreach ($blogues as $blogue)


                    <div class="col-sm-4 cardblog">
                        <div class="card" style="">
                            <a href="{{ route('home.blogs.show', [$blogue->id]) }}"><img src="img/blog-1-370x270.jpg" class="card-img-top" style="text-decoration:none"
                                    alt="..."></a>
                            <div class="card-body">
                                <a href="{{ route('home.blogs.show', [$blogue->id]) }}" style="text-decoration:none">
                                    <h4 class="card-title">{{ $blogue->nome}}
                                    </h4>
                                </a>
                                <p class="card-text">{{ $blogue->autor }} | {{ $blogue->created_at->format('d-m-Y') }} | {{ $blogue->views}}</p>
                            </div>
                        </div>
                    </div>


                @endforeach

                
            </div>
        </div>
    </section>
    <section class="container-fluid" id="depoimentos">
        <div class="container deps">
            <div class="depoviews">
                <div class="title">Happy Clients</div>
                <div class="moreDepo"><a href="{{ route('home.depoimentos.show') }}" style="text-decoration:none">VIEW MORE></a></div>
            </div>
            <div class="row quadros">


                @foreach ($depoimentos as $depoimento)
                    
                
                
                <div class="col-sm-4 infosDep">
                    <div class="imagens">
                        <div class="img">
                            <div class="" style="background-image: url('{{ route('home.imagem', [$depoimento->imagens_id])}}')"></div>
                        </div>
                    </div>
                    <h4>
                        {{ $depoimento->name }}
                    </h4>
                    <p>
                        "{{ $depoimento->testemonial }}"
                    </p>
                </div>
                
                
                
                @endforeach
                
            </div>
            <div class="contact">
                <div class="text">
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla</p>
                </div>
                <div>
                    <a class="btn btn-danger" href="{{ route('home.contato') }}" role="button">Contact Us</a>
                </div>
            </div>
        </div>
    </section>





















@endsection
