<html>
<head></head>
<body>

    <h1 >Cadastrar Estudantes</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div >
            <label for="name" >Nome:</label>
            <input type="text" id="name" name="name" required>            
        </div>

         <div >
            <label for="email" >Email:</label>
            <input type="text" id="email" name="email" required>            
        </div>

        <div >
            <label for="course_id" >Curso</label>
           <select id="course_id" name="course_id" required>
        @foreach($courses as $course)
            <option value="{{ $course->id }}">{{ $course->name }}</option>
        @endforeach
    </select>           
        </div>
        
        <button type="submit">
            Salvar
        </button>        
    </form>
</body>
</html>