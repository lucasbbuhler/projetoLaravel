<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-white leading-tight">
        {{ __('Adicionar Pagamentos') }}
    </h2>
</x-slot>
<div class="container">
    <form action="{{ route('pagamentos.store') }}" method="POST">
        @csrf
        <div class="form-group">
                <label for="id_reserva">Reserva</label>
                <select class="form-control" name="id_reserva" required>
                    <option value="">Selecione uma reserva</option>
                    @foreach($reservas as $reserva)
                        <option value="{{ $reserva->id }}">{{ $reserva->responsavel }}</option>
                    @endforeach
                </select>
            </div>
        <div class="form-group">
            <label for="metodo_de_pagamento">Método de pagamento:</label>
            <input type="text" class="form-control" name="metodo_de_pagamento" required>
        </div>
        <div class="form-group">
            <label for="data_pagamento">Data de pagamento:</label>
            <input type="date" class="form-control" name="data_pagamento" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
</x-app-layout>