<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/reservas/reservas.css') }}">
    <script> var reservas = {!! json_encode($reservas->keyBy('id')->toArray()) !!}; </script>
    <script src ="{{asset('js/acoes.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
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
                        <td>{{ $reserva->id_quadra }}</td>
                        <td>{{ (new DateTime($reserva->data_da_reserva))->format('d/m/Y, h:m') }}</td>
                        <td>{{ $reserva->valor_da_reserva }}</td>
                        <td id="acao">
                            <a onclick="informacaoReservas({{ $reserva->id }})" href="#" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $reservas->links() }}
    </div>
</x-app-layout>
