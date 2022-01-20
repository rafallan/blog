@extends('templates.template')

@section('conteudo')

    <h1 class="text-center">Posts <a href="{{ route('posts.create') }}" class="float-right">Novo</a> </h1>

    @if (Session::has('mensagem'))
        <div class="alert alert-success">
            {{ Session::get('mensagem') }}
        </div>
    @endif

    <table class="table table-bordered table-condensed table-hover">
        <thead>
            <tr>
                <th>Título</th>
                <th>Conteúdo</th>
                <th>Categoria</th>
                <th>Autor</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->titulo }}</td>
                    <td>{{ $post->conteudo }}</td>
                    <td>{{ $post->categoria->nome }}</td>
                    <td>{{ $post->autor->name }}</td>
                </tr>
            @endforeach

        </tbody>
    
    </table>


@endsection
