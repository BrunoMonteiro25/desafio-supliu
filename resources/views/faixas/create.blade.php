@extends('layouts.app')

@section('content')
    <img class="img" src="{{ asset('img/background.png') }}" />
    <div class="container-criar">
        <h1>Nova Faixa</h1>
        <form action="{{ route('faixas.store', $album->id) }}" method="POST" onsubmit="return validateFormNovaFaixa()">
            @csrf
            <div class="dados">
                <label for="numero">Número:</label>
                <input type="text" name="numero" id="numero" placeholder="Digite o número da faixa..." required>

                <p id="numero-error" class="error-message"></p>
            </div>
            <div class="dados">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Digite o nome da faixa..." required>

                <p id="nome-error" class="error-message"></p>
            </div>
            <div class="dados">
                <label for="duracao">Duração:</label>
                <input type="text" name="duracao" id="duracao" placeholder="0:00" required>

                <p id="duracao-error" class="error-message"></p>
            </div>

            <button type="submit">Cadastrar</button>
            <a href="{{ route('albums.store') }}" class="cancelar">Cancelar</a>
        </form>
    </div>

    <script>
        var duracaoInput = document.getElementById('duracao');

        duracaoInput.addEventListener('input', function(e) {
        var input = e.target;
        var value = input.value;

        value = value.replace(/\D/g, '');

        if (value.length === 3) {
            value = value.replace(/(\d)(\d{2})/, '$1:$2');
        } else if (value.length > 3) {
            value = value.slice(0, 3) + ':' + value.slice(3);
        }

        input.value = value;
        });
    </script>
@endsection
