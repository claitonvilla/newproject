@extends('website.main')
@section('content')



    <section class="container-fluid" id="headerpacote"
        style="background-image: url('{{ asset('img/heading-6-1920x500.jpg') }}')">
        <div class="row">
            <h1>
                LOREM IPSUM DOLOR SIT AMET
            </h1>
            <p>
                BLOG
            </p>
        </div>
    </section>
    <section class="container-fluid" id="blogsAll">
        <div class="container list">
            <div class="row all">
                <div class="col-sm-8 imgBlogs">
                    <div class="row">


                        @foreach ($blogues as $blog)



                            <div class="col-sm-6 cardOne">
                                <div class="card" style="">
                                    <a href="{{ route('home.blogs.show', [$blog->id]) }}"><img src="img/blog-1-370x270.jpg" class="card-img-top"
                                            style="text-decoration:none" alt="..."></a>
                                    <div class="card-body">
                                        <a href="{{ route('home.blogs.show', [$blog->id]) }}" style="text-decoration:none">
                                            <h4 class="card-title">{{ $blog->nome }}
                                            </h4>
                                        </a>
                                        <p class="card-text">{{ $blog->autor }} |
                                            {{ $blog->created_at->format('d-m-Y') }} | {{ $blog->views }}</p>
                                    </div>
                                </div>
                            </div>



                        @endforeach

                    </div>                   
                    <div class="row listagem">
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
                <div class="col-sm-4 search">
                    <div class="row title">
                        <div class="col-12 allInfo">
                            <h1 class="mb-3">Blog Search</h1>
                            <form class="form-inline mb-3">
                                <div class="col-sm-8 pl-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                </div>
                                <div class="col-sm-4">
                                    <button class="btn btn-outline-success my-0 my-sm-0" type="submit">Go</button>
                                </div>
                            </form>
                            <h2>Os mais lidos</h2>


                            @foreach ($maisVisualizados as $visualizado)
                                
                            
                            <p><a href="{{ route('home.blogs.show', [$visualizado->id]) }}" style="text-decoration: none">{{ $visualizado->nome }}</a></p>
                                
                                
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>










@endsection
