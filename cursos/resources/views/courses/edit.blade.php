<html>
<head></head>
<body>
    <h1 >Editar Curso</h1>

    <form action="{{ route('courses.update', $courses) }}" method="POST">
        @csrf
        @method('PUT')

        <div >
            <label for="name" >Nome</label>
            <input type="text" id="name" name="name" value='{{$courses->name}}' required>            
        </div>
        <div >
            <label for="description" >Data de lançamento </label>
            <input type="text" id="description" name="description" value="{{$courses->description}}" required>            
        </div>

        <button type="submit">
            Salvar
        </button>        
    </form>
</body>
</html>
