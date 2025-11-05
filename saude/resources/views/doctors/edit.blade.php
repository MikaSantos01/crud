<html>
<head></head>
<body>
    <h1 >Editar Dotor</h1>

    <form action="{{ route('doctors.update', $doctors) }}" method="POST">
        @csrf
        @method('PUT')

        <div >
            <label for="name" >Nome</label>
            <input type="text" id="name" name="name" value='{{$doctors->name}}' required>            
        </div>

        <div >
            <label for="specialty" >Data de lançamento </label>
            <input type="text" id="specialty" name="specialty" value="{{$doctors->specialty}}" required>            
        </div>

         <div >
            <label for="email" >Email</label>
            <input type="text" id="email" name="email" value='{{$doctors->email}}' required>            
        </div>

        <button type="submit">
            Salvar
        </button>        
    </form>
</body>
</html>
