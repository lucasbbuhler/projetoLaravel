<x-app-layout>
<link rel="stylesheet" href="{{ asset('css/reservas/reservas.css') }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
        {{ __('Editar Reserva') }}
        </h2>
    </x-slot>
    <div class="container-reserva">
        <form action="{{ route('reservas.update', $reservas->id) }}" method="POST" class="form-reserva">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="id_quadra">Quadra</label>
                <select class="form-control" name="id_quadra" required>
                    <option value="">Selecione uma quadra</option>
                    @foreach($quadras as $quadra)
                        <option value="{{ $quadra->id }}">{{ $quadra->tipo_quadra }}</option>
                    @endforeach
                </select>

            </div>

            <div class="form-group">
                <label for="data_da_reserva">Data da Reserva</label>
                <input type="datetime-local" class="form-control" name="data_reserva" value="{{ $reservas->data_da_reserva }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('reservas.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</x-app-layout>
