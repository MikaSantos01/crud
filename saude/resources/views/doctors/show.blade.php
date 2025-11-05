<html>
    <head></head>
    <body>    
        <h1 >Detalhes do Doutor</h1>        
            <div >
                <p><strong>ID:</strong> {{ $doctor->id }}</p>
                <p><strong>Nome:</strong> {{ $doctor->name }}</p>
                <p><strong>Data Lançamento:</strong> {{ $doctor->specialty }}</p>
                <p><strong>Email:</strong> {{ $doctor->email }}</p>
            </div>
            <a href="{{ route('doctors.index') }}">Voltar para a lista</a>
        <a href="{{ route('doctors.edit', $doctors) }}">Editar</a>
        </div>    
    </div>
    </body>
    </html>