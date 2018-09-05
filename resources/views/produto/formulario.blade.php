@extends('layout.principal')

@section('conteudo')
    <form action="/produtos/adiciona" method="post">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" id="exampleInputEmail1" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" name="valor" class="form-control" id="exampleInputEmail1" placeholder="Valor">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" name="quantidade" class="form-control" id="exampleInputEmail1" placeholder="Quantidade">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea type="text" name="descricao" class="form-control" id="exampleInputEmail1" placeholder="Descrição"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
@stop