@extends('layout.principal')

@section('conteudo')
    <h1>Listagem de produtos</h1>
    @if(empty($produtos))
    <div class="alert alert-danger">
        Você não tem nenhum produto cadastrado.
    </div>
    @else

    <table class="table">
        @foreach ($produtos as $p)
        <tr class="{{ $p->quantidade <= 1 ? 'danger' : '' }}">
            <td>{{$p->nome}}</td>
            <td>{{$p->descricao}}</td>
            <td>{{$p->valor}}</td>
            <td>{{$p->quantidade}}</td>
            <td>
                <a href="/produtos/mostra/{{$p->id}}" class="btn btn-primary">Detalhes</a>
            </td>
        </tr>
        @endforeach
    @endif
</table>
@stop

@if(old('nome'))
    <div class="alert alert-success" role="alert">
        Produto {{old('nome')}} adicionado com sucesso!
    </div>
@endif