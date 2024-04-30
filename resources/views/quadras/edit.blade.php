
<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/quadras/edit.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Quadra</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar Quadra</h1>
            <form action="{{ route('quadras.update', $quadra->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="tipo_quadra">Tipo da Quadra:</label>
                    <input type="text" name="tipo_quadra" required>
                </div>
                <div class="form-group">
                    <label for="valor_quadra">Valor da Quadra:</label>
                    <input type="integer" name="valor_quadra" required>
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('quadras.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>

