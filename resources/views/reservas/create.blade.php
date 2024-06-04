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
            <label for="id">Quadra</label>
            <select class="form-control" name="quadra_id" required>
                <option value="">Selecione uma quadra</option>
                @foreach($quadras as $quadra)
                    <option value="{{ $quadra->id }}">{{ $quadra->tipo_quadra }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="responsavel">Responsavel</label>
            <input type="string" class="form-control" name="responsavel">
        </div>
        <div class="form-group">
            <label for="data_reserva">Data e Hora da Reserva</label>
            <input type="datetime-local" class="form-control" name="data_reserva" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('reservas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
    </div>
</x-app-layout>
