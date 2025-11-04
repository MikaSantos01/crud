<html>
    <head></head>
    <body>    
        <h1 >Detalhes do Aluno</h1>        
            <div >
                <p><strong>ID:</strong> {{ $student->id }}</p>
                <p><strong>Nome:</strong> {{ $student->name }}</p>
                <p><strong>Email:</strong> {{ $student->email }}</p>
                <p><strong>Curso:</strong> {{ $student->course->name}}</p>
            </div>

            <div>
        <a href="{{ route('students.index') }}">Voltar para a lista</a>
        <a href="{{ route('students.edit', $student) }}">Editar</a>
    </div>
        </div>    
    </div>
    </body>
    </html>