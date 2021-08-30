@extends('admin.main')
@section('content')

<section class="container">
    <div class="row">
        <table class="table mt-5">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nome Pacote</th>
                <th scope="col">Nº Noites</th>
                <th scope="col">E-mail</th>
                <th scope="col">Celular</th>                
                <th scope="col">Data criação</th>
                <th scope="col">Opções</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($pacotes as $pacote)
                    <tr>
                    <th scope="row">{{ $pacote->id }}</th>
                    <td>{{ $pacote->nome }}</td>
                    <td>{{ $pacote->noites }}</td>
                    <td>{{ $pacote->email }}</td>
                    <td>{{ $pacote->contato_cel }}</td>
                    <td>{{ $pacote->created_at->format('d/m/Y') }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('admin.pacotes.edit', [$pacote->id]) }}" class="btn btn-info btn-sm active" role="button" aria-pressed="true">Editar</a>
                            <a href="{{ route('admin.pacotes.destroy', [$pacote->id]) }}" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Deletar</a>               
                        </div>               
                    </td>
                    </tr>            
                @endforeach
            </tbody>
          </table>
    </div>
</section>


























@endsection