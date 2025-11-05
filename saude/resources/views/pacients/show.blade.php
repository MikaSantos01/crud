<html>
    <head></head>
    <body>    
        <h1 >Detalhes do Paciente</h1>        
            <div >
                <p><strong>ID:</strong> {{ $pacient->id }}</p>
                <p><strong>Nome:</strong> {{ $pacient->name }}</p>
                <p><strong>Data de Nascimento:</strong> {{ $pacient->birth_date }}</p>
                <p><strong>Email:</strong> {{ $pacient->email }}</p>
                <p><strong>Endereço:</strong> {{ $pacient->address }}</p>
                <p><strong>Doutor:</strong> {{ $pacient->doctor->name}}</p>
            </div>

            <div>
        <a href="{{ route('pacients.index') }}">Voltar para a lista</a>
        <a href="{{ route('pacients.edit', $pacient) }}">Editar</a>
    </div>
        </div>    
    </div>
    </body>
    </html>