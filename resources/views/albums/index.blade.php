@extends('layouts.app')

@section('content')
    <img class="img" src="{{ asset('img/background.png') }}" alt="background" />

    <div class="header">
        <img src="{{ asset('img/logo.png') }}" alt="logo">

        <h2>Discografia</h2>
    </div>

    <div class="content">
        <div class="search">
            <p>Digite uma palavra chave:</p>
            <input type="text" placeholder="Digite aqui..." />
            <button>Procurar</button>
        </div>

        <div class="novo-album">
            <a href="{{ route('albums.create') }}" class="novo-btn">+ Novo Álbum</a>
        </div>

        @foreach ($albums as $album)
        <div class="album">
            <div class="header-album">
                <p>Álbum: {{$album->titulo}}, {{ $album->ano }}</p>

                <form action="{{ route('albums.destroy', $album->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="remover">X Excluir álbum</button>
                </form>

                <a href="{{ route('faixas.create', ['albumId' => $album->id]) }}" class="adicionar">+ Adicionar nova faixa</a>
            </div>

            @if ($album->faixas->isEmpty())
                <p class="nao-existe">Este álbum ainda não possui faixa cadastrada!</p>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>Nº</th>
                            <th>Faixa</th>
                            <th>Duração</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($album->faixas as $faixa)
                        <tr>
                            <td>{{ $faixa->numero }}</td>
                            <td>{{ $faixa->nome }}</td>
                            <td>{{ $faixa->duracao }}</td>
                            <td>
                                <form action="{{ route('faixas.destroy', ['albumId' => $album->id, 'faixaId' => $faixa->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="excluir">X</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        @endforeach
    </div>
@endsection
