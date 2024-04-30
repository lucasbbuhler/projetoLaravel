<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/quadras/index.css') }}">
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Pagamentos') }}
        </h2>
    </x-slot>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('pagamentos.create') }}" class="btn btn-primary">Adicionar Pagamento</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ID_Reserva</th>
                            <th>Metodo de Pagamento</th>
                            <th>Data de Pagamento</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pagamentos as $pagamento)
                        <tr>
                            <td>{{ $pagamento->id }}</td>
                            <td>{{ $pagamento->id_reserva }}</td>
                            <td>{{ $pagamento->metodo_de_pagamento }}</td>
                            <td>{{ $pagamento->data_de_pagamento }}</td>
                            <td>
                                <a href="{{ route('pagamentos.edit', $pagamento) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('pagamentos.destroy', $pagamento) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
