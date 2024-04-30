<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/quadras/index.css') }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Lista Quadras') }}
        </h2>
    </x-slot>
    <div class="container">
        <form action="{{ route('quadras.index') }}" method="GET" class="search-form">
            <div class="search-container">
                <input type="text" name="search" placeholder="Pesquisar quadras..." value="{{ request()->query('search') }}" class="search-input">
                <button type="submit" class="search-button">Pesquisar</button>
            </div>
        </form>
        <a href="{{ route('quadras.create') }}" class="btn btn-primary">Nova Quadra</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo de quadra</th>
                    <th>Valor da quadra</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($quadras as $quadra)
                    <tr>
                        <td class="colunas">{{ $quadra->id }}</td>
                        <td id="tipo_quadra">{{ $quadra->tipo_quadra }}</td>
                        <td>{{ $quadra->valor_quadra }}</td>
                        <td>
                            <a href="{{ route('quadras.show', $quadra->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('quadras.edit', $quadra->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('quadras.destroy', $quadra->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        {{ $quadras->links() }}
        <br>
    </div>
</x-app-layout>

