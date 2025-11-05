<html>
<head></head>
<body>    
    <h1 >Lista de Dotores</h1>        
       
<table>
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Especialidades</th>
    <th>Email</th>
    <th>Ações</th>
  </tr>
    @foreach($doctors as $doctor)
    <tr>
        <td> {{ $doctor->id }}</td>
        <td> {{ $doctor->name }}</td>
        <td> {{ $doctor->specialty }}</td>
        <td> {{ $doctor->email }}</td>

        <td>
            <!-- Botão de Visualizar -->
        <a href="{{ route('doctors.show', $doctor) }}" >
             Visualizar
        </a>

        <!-- Botão de Editar -->
        <a href="{{ route('doctors.edit', $doctor) }}" >
             Editar
        </a>


            <form action="{{ route('doctors.destroy', $doctor) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Deseja excluir este doutor?')">
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

