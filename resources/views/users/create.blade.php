<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Adicionar User
        </h2>
    </x-slot>
    <header>
        <link rel="stylesheet" href="{{ asset('css/users/users.css') }}">
    </header>
    <div class="form-group">
        <form action="{{ route('users.store') }}" method="POST" class="form-user">
            @csrf
            <div>
                <label for="name">Nome</label>
                <input type="string" class="form-control" name="name">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="string" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</x-app-layout>