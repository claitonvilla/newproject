<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>
    <header class="container-fluid">
        <section class="container" id="menu">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#"><h2>TRAVEL AGENCY<span>WEBSITE</span></h2></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('home.pacotes') }}">Pacotes</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('home.blogs') }}">Blog</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Mais
                          </a>
                          <div class="dropdown-menu submenu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('home.more.about') }}">Sobre Nós</a>
                            <a class="dropdown-item" href="{{ route('home.depoimentos.show') }}">Depoimentos</a>                            
                            <a class="dropdown-item" href="{{ route('home.termos') }}">Termos</a>
                          </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home.contato') }}" tabindex="-1" aria-disabled="true">Contate-nos</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
      </header>

    @yield('content')

    <section class="container-fluid" id="rodape">
      <div class="container footer">
        <div class="row">
          <div class="col-sm-12 rights">
            <p>COPYRIGHT © 2020 COMPANY NAME - TEMPLATE BY: <span>PHPJABBERS.COM<span></p>
          </div>
        </div>
      </div>
    </section>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
