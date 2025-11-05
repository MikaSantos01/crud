<html>
<head></head>
<body>

    <h1 >Cadastrar Pacientes</h1>

    <form action="{{ route('pacients.store') }}" method="POST">
        @csrf
        <div >
            <label for="name" >Nome:</label>
            <input type="text" id="name" name="name" required>            
        </div>

        <div >
            <label for="birth_date" >Data de Nascimento:</label>
            <input type="date" id="birth_date" name="birth_date" required>            
        </div>

         <div >
            <label for="email" >Email:</label>
            <input type="text" id="email" name="email" required>            
        </div>
        
         <div >
            <label for="address" >Endereço:</label>
            <input type="text" id="address" name="address" required>            
        </div>

        <div >
            <label for="doctor_id" >Doutor</label>
           <select id="doctor_id" name="doctor_id" required>
        @foreach($doctors as $doctor)
            <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
        @endforeach
    </select>           
        </div>
        
        <button type="submit">
            Salvar
        </button>        
    </form>
</body>
</html>