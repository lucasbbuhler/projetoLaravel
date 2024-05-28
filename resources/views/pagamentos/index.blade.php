<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/quadras/index.css') }}">
        <script> var pagamentos = {!! json_encode($pagamentos->keyBy('id')->toArray()) !!}; </script>
        <script src ="{{asset('js/acoes.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>        
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
                                <a onclick="informacaoPagamentos({{ $pagamento->id }})" href="#" class="btn btn-info">Detalhes</a>
                                <a href="{{ route('pagamentos.edit', $pagamento) }}" class="btn btn-warning">Editar</a>
                                <form id="form-{{$pagamento->id}}" action="{{ route('pagamentos.destroy', $pagamento->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="deletar({{ $pagamento->id }})">Excluir</button>
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
