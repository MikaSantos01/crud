<html>
<head></head>
<body>

    <h1 >Cadastrar Doutor</h1>

    <form action="{{ route('doctors.store') }}" method="POST">
        @csrf
        <div >
            <label for="name" >Nome:</label>
            <input type="text" id="name" name="name" required>            
        </div>

        <div >
            <label for="specialty" >Especialidades</label>
            <input type="text" id="specialty" name="specialty" required>            
        </div>
        
         <div >
            <label for="email" >Email</label>
            <input type="text" id="email" name="email" required>            
        </div>

        <button type="submit">
            Salvar
        </button>        
    </form>
</body>
</html>