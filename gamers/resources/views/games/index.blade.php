<html>
<head></head>
<body>    
    <h1>Lista dos Jogos</h1>     
<a href="{{ route('games.create') }}">Adicionar</a>

    @if($games->isEmpty())
        <p>Nenhum jogo cadastrado.</p>
    @else
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data Lançamento</th>
                <th>Ações</th>
            </tr>
            @foreach($games as $games)
            <tr>
                <td>{{ $games->id }}</td>
                <td>{{ $games->name }}</td>
                <td>{{ $games->release_date }}</td>
                <td>
                    <a href="{{ route('games.show', $games) }}">Visualizar</a>
                    <a href="{{ route('games.edit', $games) }}">Editar</a>

                    <form action="{{ route('games.destroy', $games) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Deseja excluir este jogo?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    @endif

</body>
</html>
