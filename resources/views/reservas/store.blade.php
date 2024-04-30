<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Adicionar Reserva
        </h2>
    </x-slot>
    <header>
        <link rel="stylesheet" href="{{ asset('css/reservas/reservas.css') }}">
    </header>
    <div class="container-reserva">
        <form action="{{ route('reservas.store') }}" method="POST" class="form-reserva">
            @csrf
            <div class="form-group">
                <label for="id_quadra">Quadra</label>
                <select class="form-control" name="id_quadra" required>
                    <option value="">Selecione um quadra</option>
                    @foreach($quadras as $quadra)
                        <option value="{{ $quadra->id }}">{{ $quadra->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="valor_da_reserva">Valor da Reserva</label>
                <select name="valor_da_reserva" required>
            </div>
            <div class="form-group">
                <label for="data_da_reserva">Data da Reserva</label>
                <input type="date" class="form-control" name="data_da_reserva">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</x-app-layout>
