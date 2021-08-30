@extends('website.main')
@section('content')



    <section class="container-fluid" id="headerpacote"
        style="background-image: url('{{ asset('img/heading-6-1920x500.jpg') }}')">
        <div class="row">
            <h1>
                $300 - $4000
            </h1>
            <p>
                LOREM IPSUM DOLOR SIT AMET
            </p>
        </div>
    </section>
    <section class="container-fluid" id="details">
        <div class="container conteudos">
            <div class="row imagens">
                <div class="col-sm-6 itens">
                    <div class="img" style="background-image: url('{{ asset('img/product-details-1-740x540.jpg') }}')">
                    </div><br>
                    <div class="row subimagens">
                        <div class="col-sm-4">
                            <div class="imgBox" style="background-image: url('{{ asset('img/product-1-370x270.jpg') }}')">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="imgBox"
                                style="background-image: url('{{ asset('img/product-details-1-740x540.jpg') }}')"></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="imgBox"
                                style="background-image: url('{{ asset('img/product-details-1-740x540.jpg') }}')"></div>
                        </div>
                    </div><br>
                </div>
                <div class="col-sm-6 end">
                    <div class="row title">
                        <div class="col-sm-12 infosPack">
                            <div class="icon"><i class="fa fa-calendar"></i>Spring</div>
                            <div class="icon"><i class="fa fa-cube"></i>Nights</div>
                            <div class="icon"><i class="fa fa-plane"></i>Fligh included</div>
                        </div>
                    </div><br>
                    <div class="row endereco">
                        <div class="col-sm-12 infosEnd">
                            <p><i class="fa fa-map-marker"></i> Regeneration Road, SE16 2NX, London</p><br>
                        </div>
                        <div class="row text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, delectus totam non est
                                excepturi
                                expedita, illum vitae vel dolore exercitationem nobis quasi dicta illo id quas. Error
                                commodi,
                                modi minus.

                                Perferendis, quidem, facilis. Aspernatur alias numquam saepe deleniti dolorem quos
                                repudiandae
                                eaque ad eligendi quam, ratione, error minima culpa suscipit nostrum magni omnis est.
                                Suscipit
                                dolor sint aut maiores eius, id nemo, optio, quos tempora cum est quas. At recusandae
                                obcaecati
                                consequatur ipsa dignissimos, eius commodi qui quae exercitationem fugiat, voluptatem,
                                nesciunt!

                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem vero culpa
                                rerum
                                similique labore, nisi minus voluptatum numquam fugiat.

                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat fugit sint reiciendis quas
                                temporibus quam maxime nulla vitae consectetur perferendis, fugiat assumenda ex dicta
                                molestias
                                soluta est quo totam cum?</p>
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
                        <tr>
                            <th scope="row"></th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
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
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row info">
                <h1>Info</h1>
            </div>
            <div class="row tableinfo">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row" width="15%">Chek in</th>
                            <td>Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed
                                pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan
                                dignissim rutrum.</td>
                        </tr>
                        <tr>
                            <th scope="row">Check out</th>
                            <td>Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed
                                pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan
                                dignissim rutrum.</td>
                        </tr>
                        <tr>
                            <th scope="row">Pets</th>
                            <td>Not allowed</td>
                        </tr>
                        <tr>
                            <th scope="row">Policies</th>
                            <td>Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed
                                pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan
                                dignissim rutrum.
                                Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed
                                pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan
                                dignissim rutrum.</td>
                        </tr>
                        <tr>
                            <th scope="row">Fees</th>
                            <td>
                                Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed
                                pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan
                                dignissim rutrum.
                                Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed
                                pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan
                                dignissim rutrum</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row mapcontact">
                <div class="col-sm-9 maps">
                    <div class="title">Map</div>
                    <div class="gmaps">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14693.352331322254!2d-46.55390723022461!3d-22.974592149999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1630074525969!5m2!1spt-BR!2sbr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-sm-3 contact">
                    <div class="titlecont">
                        <p>Contact details</p>
                    </div>
                    <div class="dadosCont">
                        <p><span>Nome</span><br><strong>Jose</strong></p>
                        <p><span>Telefone</span><br><strong><a href="" style="text-decoration:none">123-456-789</a></strong>
                        </p>
                        <p><span>Celular</span><br><strong><a href="" style="text-decoration:none">456789123</a></strong>
                        </p>
                        <p><span>Email</span><br><strong><a href=""
                                    style="text-decoration:none">John@carsales.com</a></strong></p>
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
