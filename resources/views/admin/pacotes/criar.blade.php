@extends('admin.main')
@section('content')


    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('admin.pacotes.store') }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row mt-5">
                        <div class="form-group col-sm-12 text-right" >
                           <button class="btn btn-success" type="submit">Salvar</button>
                        </div>
                    </div>
                    <ul>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    @endif
                    </ul>
                    <div class="form-row mt-5">
                        <div class="form-group col-sm-6">
                            <label for="exampleFormControlInput1">Nome Pacote</label>
                            <input type="text" name="nome" class="form-control" id="exampleFormControlInput1"
                                placeholder="Name" required>
                        </div>
                        <div class="form-group col-sm-1">
                            <label for="exampleFormControlInput1">Noites</label>
                            <input type="number" name="noites" class="form-control" id="exampleFormControlInput1"
                                placeholder="1" min='1' value="1" required>
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="exampleFormControlInput1">Endereço</label>
                            <input type="text" name="endereço" class="form-control" id="exampleFormControlInput1">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-3">
                            <label for="exampleFormControlInput1">Nome</label>
                            <input type="text" name="contato_nome" class="form-control" id="exampleFormControlInput1"
                                placeholder="" required>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="exampleFormControlInput1">Telefone</label>
                            <input type="text" name="contato_tel" class="form-control" id="exampleFormControlInput1"
                                placeholder="">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="exampleFormControlInput1">Celular</label>
                            <input type="text" name="contato_cel" class="form-control" id="exampleFormControlInput1"
                                placeholder="">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="exampleFormControlInput1">E-mail</label>
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com" required>
                        </div>
                    </div>                 
                     <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="exampleFormControlTextarea1">Chamada</label>
                            <textarea name="chamada" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="exampleFormControlTextarea1">Adicionar Google Maps</label>
                            <textarea class="form-control" name="mapa" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label for="exampleFormControlTextarea1">Descrição</label>
                            <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3" required></textarea>
                        </div>                        
                    </div>                        
                    <div class="form-check mb-5">
                        <input class="form-check-input" name="pass_aerea" type="checkbox" value="1" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Incluir Passagem Aérea
                        </label>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Informações</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" id="rpInfo">
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <input type="text" name="infos[0][nome]" class="form-control nome" required>
                                </div>
                                <div class="form-group col-sm-12">
                                    <textarea name="infos[0][descricao]" class="form-control descricao" rows="3" required></textarea>
                                </div>
                            </div>  
                        </div>
                    </div>  
                    <div class="row">
                        <div class="form-group col-sm-12 text-right">
                            <button type="button" class="btn btn-info" id="btnrpInfo">Adicionar outro</button>    
                        </div>    
                    </div>     
                    
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Preços e datas</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" id="rpPrice">
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <input type="date" name="price[0][from]" class="form-control from" required>
                                </div>
                                <div class="form-group col-sm-4">
                                    <input type="date" name="price[0][to]" class="form-control to" required>
                                </div>
                                <div class="form-group col-sm-4">
                                    <input type="number" name="price[0][price]" class="form-control price" required>
                                </div>                                
                            </div>  
                        </div>
                    </div>  
                    <div class="row">
                        <div class="form-group col-sm-12 text-right">
                            <button type="button" class="btn btn-info" id="btnrpPrice">Adicionar outro</button>    
                        </div>    
                    </div>        

                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Imagens</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" id="rpImage">
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <input type="file" name="images[]" class="form-control image" required>
                                </div>                                                              
                            </div>  
                        </div>
                    </div>  
                    <div class="row">
                        <div class="form-group col-sm-12 text-right">
                            <button type="button" class="btn btn-info" id="btnrpImage">Adicionar outro</button>    
                        </div>    
                    </div> 



                </form>
            </div>
        </div>
    </section>
@endsection


@section('script')
    <script>

        (function($){

            $(document).ready(function(){

                $(document).on('click','#btnrpInfo',function(){
                    var total = $('#rpInfo .row').length;
                    var clone = $('#rpInfo .row:eq(0)').clone();
                    clone.find('.nome').attr('name', 'infos['+total+'][nome]').val('');
                    clone.find('.descricao').attr('name', 'infos['+total+'][descricao]').val("").html(' ');
                    $('#rpInfo').append(clone);
                });

                $(document).on('click','#btnrpPrice', function(){
                    var total = $('#rpPrice .row').length;
                    var clone = $('#rpPrice .row:eq(0)').clone();
                    
                    clone.find('.from').attr('name', 'price['+total+'][from]').val('');
                    clone.find('.to').attr('name', 'price['+total+'][to]').val('');
                    clone.find('.price').attr('name', 'price['+total+'][price]').val('');
                    $('#rpPrice').append(clone);             
                });

                $(document).on('click', '#btnrpImage', function(){
                    var clone = $('#rpImage .row:eq(0)').clone();
                    clone.find('.image').val('');
                    $('#rpImage').append(clone);



                });






            });







        })(jQuery);











    </script>

@endsection