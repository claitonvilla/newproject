@extends('website.main')
@section('content')



    <section class="container-fluid" id="headerBlog"
        style="background-image: url('{{ asset('img/heading-6-1920x500.jpg') }}')">
        <div class="row">
            <div class="icones">
                <div class="icon"><i class="fa fa-user"></i> {{ $blog->autor }}</div>
                <div class="icon"><i class="fa fa-calendar"></i> {{ $blog->created_at->format('d-m-Y') }}</div>
                <div class="icon"><i class="fa fa-eye"></i> {{ $blog->views }}</div>
            </div>
            <p>{{ $blog->nome }}</p>

        </div>
    </section>
    <section class="container-fluid" id="cont">
        <div class="container all">
            <div class="row title">
                <div class="col-sm-12 texttitle">
                    <h1>{{ $blog->nome }}</h1>
                </div>
            </div>
            <div class="row conteudo">
                <div class="col-sm-12 quadro">
                    <div class="col-sm-8 quadroesquerdo">
                        {!! $blog->conteudo !!}
                    </div>
                    <div class="col-sm-4 quadrodireito">
                        <h2>Lorem ipsum dolor sit amet.</h2><br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur
                            similiqu consectetur.<br><br>
                            Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis
                            ipsa voluptate corrupti.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, minus?</p>
                    </div>
                </div>
            </div><br>
            <div class="row imagem">
                <div class="col-sm-12 imgfull">
                    <div class="img"
                        style="background-image: url('{{ asset('img/blog-image-fullscren-1-1920x700.jpg') }}')"></div>
                </div>
            </div>
            <div class="row text">
                <div class="col-sm-12 titleform">
                    <h1>Leave a Comment</h1>
                </div>
            </div>
            <div class="row formbox">
                <div class="col-sm-8 all-form">
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Notes"></textarea>
                        </div>
                        <div class="button">
                            <a class="btn btn-danger" href="#" role="button">Submit</a>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4 quadroSocial">
                    <div class="textSocial">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur
                            similiqu consectetur. Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi
                            mollitia corporis ipsa voluptate corrupti.</p>
                    </div>
                    <div class="row social-icon">
                        <div class="col-sm-12 icons">
                            <div class="socialIcon">
                                <a href=""><i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="socialIcon">
                                <a href=""><i class="fa fa-twitter"></i></a>
                            </div>
                            <div class="socialIcon">
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                            <div class="socialIcon">
                                <a href=""><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div>

    </section>




@endsection
