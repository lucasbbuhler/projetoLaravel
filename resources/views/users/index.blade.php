<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/quadras/index.css') }}">
    <script> var users = {!! json_encode($users->keyBy('id')->toArray()) !!}; </script>
    <script src ="{{asset('js/acoes.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Lista Users') }}
        </h2>
    </x-slot>
    <div class="container">
        <a href="{{ route('users.create') }}" class="btn btn-primary">Novo User</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="colunas">{{$user->id}}</td>
                        <td id="tipo_quadra">{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td id="acao">
                            <a onclick="informacaoUsers({{ $user->id }})" href="#" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                            <form id="form-{{$user->id}}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="deletar({{ $user->id }})">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>