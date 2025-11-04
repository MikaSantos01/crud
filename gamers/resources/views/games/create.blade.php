<html>
<head></head>
<body>

    <h1 >Cadastrar Games</h1>

    <form action="{{ route('games.store') }}" method="POST">
        @csrf
        <div >
            <label for="name" >Nome:</label>
            <input type="text" id="name" name="name" required>            
        </div>

        <div >
            <label for="release_date" >Data de Lançamento</label>
            <input type="date" id="release_date" name="release_date" required>            
        </div>
        
        <button type="submit">
            Salvar
        </button>        
    </form>
</body>
</html>