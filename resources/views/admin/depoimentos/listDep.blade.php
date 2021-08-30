@extends('admin.main')
@section('content')

    <section class="container">
        <div class="row">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Depoimento</th>
                        <th scope="col">Imagem</th>                        
                        <th scope="col">Data criação</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($depoimentos as $depoimento)
                        <tr>
                            <th scope="row">{{ $depoimento->id }}</th>
                            <td>{{ $depoimento->name }}</td>
                            <td>{{ $depoimento->testemonial }}</td>
                            <td>{{ $depoimento->imagens_id }}</td>                            
                            <td>{{ $depoimento->created_at->format('d/m/Y') }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('admin.depoimentos.edit', [$depoimento->id]) }}" class="btn btn-info btn-sm active" role="button"
                                        aria-pressed="true">Editar</a>
                                    <a href="{{ route('admin.depoimentos.destroy', [$depoimento->id]) }}" class="btn btn-danger btn-sm active" role="button"
                                        aria-pressed="true">Deletar</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection