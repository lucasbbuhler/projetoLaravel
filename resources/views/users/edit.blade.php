<x-app-layout>
<link rel="stylesheet" href="{{ asset('css/users/users.css') }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
        {{ __('Editar User') }}
        </h2>
    </x-slot>
    <div class="container-user">
        <form action="{{ route('users.update', $user->id) }}" method="POST" class="form-user">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nome</label>
                <input type="string" class="form-control" name="name" value="{{ $user->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="string" class="form-control" name="email" value="{{ $user->email }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</x-app-layout>
