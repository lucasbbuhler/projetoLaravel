<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/quadras/index.css') }}">
    <script> var quadras = {!! json_encode($quadras->keyBy('id')->toArray()) !!}; </script>
    <script src ="{{asset('js/acoes.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Lista Quadras') }}
        </h2>
    </x-slot>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
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
                        <td id="acao">
                            <a onclick="informacaoQuadras({{ $quadra->id }})" href="#" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('quadras.edit', $quadra->id) }}" class="btn btn-warning">Editar</a>
                            <form id="form-{{$quadra->id}}" action="{{ route('quadras.destroy', $quadra->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="deletar({{ $quadra->id }})">Excluir</button>
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

