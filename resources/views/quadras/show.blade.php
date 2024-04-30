<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/quadras/show.css') }}">
    </head>
    <body>
      <div class="container">
          <h2>Detalhes da Quadra</h2>
          <p><strong>ID:</strong> {{ $quadra->id }}</p>
          <p><strong>Tipo:</strong> {{ $quadra->tipo_quadra }}</p>
          <p><strong>Valor:</strong> {{ $quadra->valor_quadra }}</p>
          <a href="{{ route('quadras.index') }}" class="btn btn-secondary">Voltar</a>
      </div>
    </body>
</x-app-layout>