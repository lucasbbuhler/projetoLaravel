<x-app-layout>
    <div class="container">
        <h2>Detalhes do Pagamento</h2>
        <p><strong>ID:</strong> {{ $pagamento->id }}</p>
        p><strong>ID:</strong> {{ $pagamento->id_reserva }}</p>
        <p><strong>Metodo:</strong> {{ $pagamento->metodo_de_pagamento }}</p>
        <p><strong>Data:</strong> {{ $pagamento->data_de_pagamento }}</p>
        <a href="{{ route('pagamentos.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>
