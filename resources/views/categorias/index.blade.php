@extends('templates.template')

@section('conteudo')

<h1 class="text-center">Listagem das Categorias</h1>

<table class="table table-striped table-hover table-condesed table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>    
        </tr>    
    </thead>  

    <tbody> 
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->nome }}</td>
                <td>{{ $categoria->descricao }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection