@extends('admin.main')
@section('content')

    <section class="container">
        <div class="row">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome Blog</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Vizualizações</th>
                        <th scope="col">Conteúdo</th>
                        <th scope="col">Data criação</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogues as $blog)
                        <tr>
                            <th scope="row">{{ $blog->id }}</th>
                            <td>{{ $blog->nome }}</td>
                            <td>{{ $blog->autor }}</td>
                            <td>{{ $blog->views }}</td>
                            <td>{{ $blog->conteudo }}</td>
                            <td>{{ $blog->created_at->format('d/m/Y') }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('admin.blogues.edit', [$blog->id]) }}" class="btn btn-info btn-sm active" role="button"
                                        aria-pressed="true">Editar</a>
                                    <a href="{{ route('admin.blogues.destroy', [$blog->id]) }}" class="btn btn-danger btn-sm active" role="button"
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
