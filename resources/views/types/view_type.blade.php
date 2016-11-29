@extends('layout.principal')

@section('conteudo')

	<h1> Detalhes do tipo <?= $type->name  ?> </h1>

	<ul>
		<li> 
			<b>Nome: </b> {{$type->name}}
		</li>
		<li> 
			<b>Data de cadastro: </b> {{$type->created_at}}
		</li>

	</ul>
	
	<button type="button" class="btn btn-danger" style="float: right; margin-bottom: 5px;" onclick="history.go(-1); return false;">Voltar</button>
@stop