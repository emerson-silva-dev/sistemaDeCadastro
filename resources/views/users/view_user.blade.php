@extends('layout.principal')

@section('conteudo')
	<h1> Detalhes do usuário  {{$user->name}} </h1>

	<ul>
		<li> 
			<b>Nome: </b> {{$user->name}}
		</li>
		<li> 
			<b>E-mail: </b> {{$user->email}}
		</li>
		<li> 
			<b>Data de cadastro: </b> {{$user->created_at}}
		</li>
		<li> 
			<b>Tipo: </b> {{$user->type->name}}
		</li>

	</ul>

	<button type="button" class="btn btn-danger" style="float: right; margin-bottom: 5px;" onclick="history.go(-1); return false;">Voltar</button>
@stop