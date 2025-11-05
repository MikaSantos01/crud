<html>
<head></head>
<body>    
    <h1 >Lista de Pacientes</h1>        
       
<table>
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Data de Nascimento</th>
    <th>Email</th>
    <th>Endereço</th>
    <th>Ações</th>
  </tr>
    @foreach($pacients as $pacient)
    <tr>
        <td> {{ $pacient->id }}</td>
        <td> {{ $pacient->name }}</td>
        <td> {{ $pacient->birth_date }}</td>
        <td> {{ $pacient->email }}</td>
        <td> {{ $pacient->address }}</td>

        <td>
            <!-- Botão de Visualizar -->
        <a href="{{ route('pacients.show', $pacient) }}" >
             Visualizar
        </a>

        <!-- Botão de Editar -->
        <a href="{{ route('pacients.edit', $pacient) }}" >
             Editar
        </a>


            <form action="{{ route('pacients.destroy', $pacient) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Deseja excluir este paciente?')">
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

