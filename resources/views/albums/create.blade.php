@extends('layouts.app')

@section('content')
<img class="img" src="{{ asset('img/background.png') }}" alt="background"/>
    <div class="container-criar">
        <h1>Novo Álbum</h1>
        <form action="{{ route('albums.store') }}" method="POST">
            @csrf
            <div class="dados">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" placeholder="Digite o titulo do álbum..." required>
            </div>
            <div class="dados">
                <label for="ano">Ano:</label>
                <input type="number" name="ano" id="ano" placeholder="Digite o ano de lançamento..." required>
            </div>
            <button type="submit">Cadastrar</button>
            <a href="{{ route('albums.store') }}" class="cancelar">Cancelar</a>
        </form>
    </div>
@endsection
