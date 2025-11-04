<html>
<head></head>
<body>    
    <h1 >Lista de cursos</h1>        
       
<table>
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Descrição</th>
    <th>Ações</th>
  </tr>
    @foreach($courses as $course)
    <tr>
        <td> {{ $course->id }}</td>
        <td> {{ $course->name }}</td>
        <td> {{ $course->description }}</td>

        <td>
            <!-- Botão de Visualizar -->
        <a href="{{ route('courses.show', $course) }}" >
             Visualizar
        </a>

        <!-- Botão de Editar -->
        <a href="{{ route('courses.edit', $course) }}" >
             Editar
        </a>


            <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Deseja excluir este curso?')">
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

