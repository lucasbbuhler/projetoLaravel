<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/pagamentos/pagamentos.css') }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Editar Pagamento') }}
        </h2>
    </x-slot>
    <div class="container-pagamento">
        <form action="{{ route('pagamentos.update', $pagamento->id) }}" method="POST" class="form-pagamento">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="data_de_pagamento">Data de Pagamento</label>
                <input type="date" class="form-control" name="data_de_pagamento" value="{{ $pagamento->data_de_pagamento }}" required>
            </div>

            <div class="form-group">
                <label for="data_de_pagamento">Metodo de Pagamento</label>
                <input type="text" class="form-control" name="metodo_de_pagamento" value="{{ $pagamento->metodo_de_pagamento }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('pagamentos.index') }}" class="btn btn-secondary mt-4">Voltar</a>
        </form>    
    </div>
</x-app-layout>
