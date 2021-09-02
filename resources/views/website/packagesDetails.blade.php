@extends('website.main')
@section('content')



    <section class="container-fluid" id="headerpacote"
        style="background-image: url('{{ asset('img/heading-6-1920x500.jpg') }}')">
        <div class="row">
            <h1>
                ${{ $pacote->precos->min('price') }},00 - ${{ $pacote->precos->max('price') }},00
            </h1>
            <p>
                {{ $pacote->nome }}
            </p>
        </div>
    </section>
    <section class="container-fluid" id="details">
        <div class="container conteudos">
            <div class="row imagens">
                <div class="col-sm-6 itens">
                    <div class="img" style="background-image: url('{{ route('home.imagem', [$pacote->imagens[0]->imagem->id]) }}')">
                    </div><br>
                    <div class="row subimagens">

                        @foreach ($pacote->imagens as $imagem)

                            <div class="col-sm-4">
                                <div class="imgBox" style="background-image: url('{{ route('home.imagem', [$imagem->imagem->id]) }}')">
                                </div>
                            </div>  
                                                      
                        @endforeach                        
                    </div><br>
                </div>
                <div class="col-sm-6 end">
                    <div class="row title">
                        <div class="col-sm-12 infosPack">
                            <div class="icon"><i class="fa fa-calendar"></i> {{ Helper::getEstacao($pacote->precos[0]->from) }} </div>
                            <div class="icon"><i class="fa fa-cube"></i> {{ $pacote->noites }} Nights</div>
                            @if ($pacote->pass_aerea == 1)
                            <div class="icon"><i class="fa fa-plane"></i> Fligh included</div>
                            @endif
                        </div>
                    </div><br>
                    <div class="row endereco">
                        <div class="col-sm-12 infosEnd">
                            <p><i class="fa fa-map-marker"></i> {{ $pacote->endereço }}</p><br>
                        </div>
                        <div class="row text">
                            <p> {{ $pacote->descricao }}</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="container-fluid" id="infoGeral">
        <div class="container sobre">
            <div class="row price">
                <h1>Availability & Prices</h1>
            </div>
            <div class="row tableprice">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Package</th>
                            <th scope="col">From</th>
                            <th scope="col">To</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pacote->precos as $preco)

                            <tr>
                                <th scope="row">{{ $preco->id }}</th>
                                <td>{{ $preco->from->format('d/m/Y') }}</td>
                                <td>{{ $preco->to->format('d/m/Y') }}</td>
                                <td> ${{ $preco->price }},00 </td>
                            </tr>
                            
                        @endforeach
                        {{-- <tr>
                            <th scope="row"></th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr> --}}
                    </tbody>
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"> ${{ $pacote->precos->sum('price') }},00</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row info">
                <div class="col">
                    <h1>Info</h1>
                </div>
            </div>
            <div class="row tableinfo">
                <table class="table">
                    <tbody>

                        @foreach ($pacote->infos as $info)
                            
                        <tr>
                            <th scope="row" width="15%">{{ $info->nome }}</th>
                            <td>{{ $info->descricao }}</td>
                        </tr>
                        
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
            <div class="row mapcontact">
                <div class="col-sm-9 maps">
                    <div class="title">Map</div>
                    <div class="gmaps">
                        {!! $pacote->mapa !!}
                    </div>
                </div>
                <div class="col-sm-3 contact">
                    <div class="titlecont">
                        <p>Contact details</p>
                    </div>
                    <div class="dadosCont">
                        <p><span>Nome</span><br><strong>{{ $pacote->contato_nome }}</strong></p>
                        <p><span>Telefone</span><br><strong><a href="" style="text-decoration:none">{{ $pacote->contato_tel }}</a></strong>
                        </p>
                        <p><span>Celular</span><br><strong><a href="" style="text-decoration:none">{{ $pacote->contato_cel }}</a></strong>
                        </p>
                        <p><span>Email</span><br><strong><a href=""
                                    style="text-decoration:none">{{ $pacote->email }}</a></strong></p>
                        </a>
                    </div>
                    <div class="button">
                        <a class="btn btn-danger" href="#" role="button">Request Details</a>
                    </div>
                </div>
            </div>
            <div class="row formcontact">
                <div class="col-sm-9 form">
                    <div class="title">Enquiry</div>
                    <div class="formcont">
                        <form action="">
                            <div class="row one">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row two">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="From">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="To">
                                    </div>
                                </div>
                            </div>
                            <div class="row three">
                                <div class="col">
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            placeholder="Notes"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="button">
                        <a class="btn btn-danger" href="#" role="button">Send Request</a>
                    </div>
                </div>
                <div class="col-sm-3 terms">
                    <div class="termstext">
                        <p>Booking terms</p>
                    </div>
                    <div class="dadosCont">
                        <p>
                            Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed
                            pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan
                            dignissim rutrum. Mauris tincidunt sollicitudin mi eu congue. Suspendisse tincidunt cursus
                            porttitor. Fusce pharetra lorem vel dolor imperdiet malesuada. Ut porttitor gravida quam, eu
                            alique.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>





















@endsection
