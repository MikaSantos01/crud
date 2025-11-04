<html>
<head></head>
<body>    
    <h1>Lista dos Generos</h1>     
<a href="{{ route('geners.create') }}">Adicionar</a>

    @if($genres->isEmpty())
        <p>Nenhum genero cadastrado.</p>
    @else
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Generos</th>
                <th>Ações</th>
            </tr>
            @foreach($genres as $genres)
            <tr>
                <td>{{ $genres->id }}</td>
                <td>{{ $genres->generous }}</td>

                <td>
                    <a href="{{ route('genres.show', $genres) }}">Visualizar</a>
                    <a href="{{ route('genres.edit', $genres) }}">Editar</a>

                    <form action="{{ route('genres.destroy', $genres) }}" method="POST" style="display: inline;">
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
