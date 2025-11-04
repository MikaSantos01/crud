<html>
<head></head>
<body>

    <h1 >Cadastrar Cursos</h1>

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div >
            <label for="name" >Nome:</label>
            <input type="text" id="name" name="name" required>            
        </div>

        <div >
            <label for="description" >Descrição</label>
            <input type="text" id="description" name="description" required>            
        </div>
        
        <button type="submit">
            Salvar
        </button>        
    </form>
</body>
</html>