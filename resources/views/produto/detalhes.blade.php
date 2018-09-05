@extends('layout.principal')

@section('conteudo')
<h1>Detalhes do produto <?php echo $p->nome ?></h1>
<ul class="list-unstyled">
    <li>{{$p->nome}}</li>
    <li>{{$p->descricao}}</li>
    <li>{{$p->valor}}</li>
    <li>{{$p->quantidade}}</li>
</ul>
@stop