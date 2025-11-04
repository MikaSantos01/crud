<html>
<head></head>
<body>    
    <h1 >Lista de Estudantes</h1>        
       
<table>
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Cursos</th>
    <th>Ações</th>
  </tr>
    @foreach($students as $student)
    <tr>
        <td> {{ $student->id }}</td>
        <td> {{ $student->name }}</td>
        <td> {{ $student->email }}</td>
        <td> {{ $student->cursos }}</td>

        <td>
            <!-- Botão de Visualizar -->
        <a href="{{ route('students.show', $student) }}" >
             Visualizar
        </a>

        <!-- Botão de Editar -->
        <a href="{{ route('students.edit', $student) }}" >
             Editar
        </a>


            <form action="{{ route('students.destroy', $student) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Deseja excluir este aluno?')">
                Excluir
                </button>
            </form>

        </td>

    </tr>
    @endforeach
  
</table>   
</div>
</body>
</html>

