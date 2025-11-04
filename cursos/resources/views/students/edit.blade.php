<html>
<head></head>
<body>
    <h1 >Editar Aluno</h1>

    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')

        <div >
            <label for="name" >Nome</label>
            <input type="text" id="name" name="name" value='{{$student->name}}' required>            
        </div>
        <div >
            <label for="email" >Email </label>
            <input type="text" id="email" name="email" value="{{$student->email}}" required>            
        </div>

        <div >
              <label for="course_id">Curso</label>
            <select id="course_id" name="course_id" required>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}" 
                        {{ $student->course_id == $course->id ? 'selected' : '' }}>
                        {{ $course->name }}
                    </option>
                @endforeach
            </select>                             
        </div>

        <button type="submit">
            Salvar
        </button>        
    </form>
</body>
</html>
