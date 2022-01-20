@extends('templates.template')

@section('conteudo')

    <h1>Criar Novo Post</h1>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control @error('titulo') is-invalid
                
            @enderror" name="titulo" id="titulo" value="{{ old('titulo') }}">
        </div>

        <div class="form-group">
            <textarea name="conteudo" class="form-control @error('conteudo') is-invalid @enderror" id="conteudo" cols="30" rows="10">{{ old('conteudo') }}</textarea>
        </div>

        <div class="form-group">
            <select name="categoria_id" id="categoria_id" class="form-control @error('categoria_id') is-invalid @enderror">
                <option value="">Selecione</option>
                @foreach ($categorias as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->nome }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar Post</button>
    </form>



@endsection
