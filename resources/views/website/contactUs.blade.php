@extends('website.main')
@section('content')



    <section class="container-fluid" id="headerpacote"
        style="background-image: url('{{ asset('img/heading-6-1920x500.jpg') }}')">
        <div class="row">
            <h1>
                LOREM IPSUM DOLOR SIT
            </h1>
            <p>
                Contate-nos
            </p>
        </div>
    </section>
    <section class="container-fluid" id="contact">
        <div class="container allcontact">
            <div class="row title">
                <div class="col-sm-12">
                    <h1>Our Location on Maps</h1>
                </div>
            </div>
            <div class="row quadroUm">
                <div class="col-sm-12 all">
                    <div class="col-sm-8 map">
                        <div class="mapa"><iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7346.79756096422!2d-46.54035200000003!3d-22.9723589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1630439100577!5m2!1spt-BR!2sbr"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div><br>
                    </div>
                    <div class="col-sm-4 textos">
                        <div class="col-sm-12">
                            <div class="row subtitle">
                                <h4>About our office</h4>
                            </div>
                            <div class="row conteudo">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester
                                    consectetur similiqu consectetur.<br><br>

                                    Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia
                                    corporis ipsa voluptate corrupti.</p>
                            </div>
                            <div class="row social">
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
            </div>
            <div class="row titleform">
                <div class="col-sm-12">
                    <h1>Send us a Message</h1>
                </div>
            </div>
            <div class="row formbox">
                <div class="col-sm-8 all-form">
                    <form action="{{ route('home.email') }}" method="POST">

                        @csrf

                        <div class="form-group">
                            <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail Adress">
                        </div>
                        <div class="form-group">
                            <input type="text" name="assunto" class="form-control" id="exampleFormControlInput1" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="conteudo" class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Your Message"></textarea>
                        </div>
                        <div class="button">
                            <button type="submit" class="btn btn-danger">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4 quadroContact">
                    <div class="img" style="background-image: url('{{ asset('img/team_01.jpg') }}')"></div>
                    <div class="textSocial">
                        <p>John Doe</p>
                    </div>                    
                </div>
            </div>



        </div>








    </section>


@endsection
