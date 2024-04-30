<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/reservas/reservas.css') }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Reservas
        </h2>
    </x-slot>

    <div class="container-reserva">
        <a href="{{ route('reservas.create') }}" class="btn btn-primary">Adicionar Reserva</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Responsavel</th>
                    <th>ID_Quadra</th>
                    <th>Data da reserva</th>
                    <th>Valor da reserva</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservas as $reserva)
                    <tr>
                        <td>{{ $reserva->id }}</td>
                        <td>{{ $reserva->responsavel }}</td>
                        <td>{{ $reserva->id_quadra->tipo_quadra }}</td>
                        <td>{{ (new DateTime($reserva->data_da_reserva))->format('d/m/Y') }}</td>
                        <td>{{ $reserva->valor_da_reserva }}</td>
                        <td>
                            <a href="{{ route('reservas.show', $reserva->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-warning">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $reservas->links() }}
    </div>
</x-app-layout>
