<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/quadras/show.css') }}">
    </head>
    <body>
        <div class="container">
            <h2>Detalhes da Reserva</h2>
            <p><strong>ID:</strong> {{ $reserva->id }}</p>
            <p><strong>Responsável:</strong> {{ $reserva->responsavel }}</p>
            <p><strong>Valor:</strong> {{ $reserva->valor_da_reserva }}</p>
            <a href="{{ route('quadras.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </body>
</x-app-layout>
