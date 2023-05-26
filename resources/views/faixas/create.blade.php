@extends('layouts.app')

@section('content')
    <img class="img" src="{{ asset('img/background.png') }}" alt="background"/>
    <div class="container-criar">
        <h1>Nova Faixa</h1>
        <form action="{{ route('faixas.store', $album->id) }}" method="POST">
            @csrf
            <div class="dados">
                <label for="numero">Número:</label>
                <input type="text" name="numero" id="numero" placeholder="Digite o número da faixa..." required>
            </div>
            <div class="dados">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Digite o nome da faixa..." required>
            </div>
            <div class="dados">
                <label for="duracao">Duração:</label>
                <input type="text" name="duracao" id="duracao" placeholder="00:00" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="{{ route('albums.store') }}" class="cancelar">Cancelar</a>
        </form>
    </div>
@endsection
