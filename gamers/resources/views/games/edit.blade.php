<html>
<head></head>
<body>
    <h1 >Editar Games</h1>

    <form action="{{ route('games.update', $game) }}" method="POST">
        @csrf
        @method('PUT')

        <div >
            <label for="name" >Nome</label>
            <input type="text" id="name" name="name" value='{{$game->title}}' required>            
        </div>
        <div >
            <label for="release_date" >Data de lançamento </label>
            <input type="date" id="release_date" name="release_date" value="{{$game->director}}" required>            
        </div>

        <button type="submit">
            Salvar
        </button>        
    </form>
</body>
</html>
