<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/quadras/create.css') }}">
        <title>Nova Quadra</title>
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Criar Quadras') }}
        </h2>
    </x-slot>
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Sucesso!</strong>
        <span class="block sm:inline">{{ session('success') }}</div>
        </div>
    @endif
    <body>
        <div class="container-quadra">
            <form action="{{ route('quadras.store') }}" method="POST" class="form-quadra">
                @csrf
                <div class="form-group">
                    <label for="tipo_quadra">Tipo da Quadra:</label>
                    <input type="text" name="tipo_quadra" required>
                </div>
                <div class="form-group">
                    <label for="valor_quadra">Valor da Quadra:</label>
                    <input type="integer" name="valor_quadra" required>
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('quadras.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>