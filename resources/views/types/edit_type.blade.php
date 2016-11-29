@extends('layout.principal')

@section('conteudo')

	<h1> Editar tipo de usuário </h1>

	@if(COUNT($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li> {{ $error }} </li>
				@endforeach
			</ul>
		</div>
	@endif
	
	<form action="/types/s_editar" method="post">

		<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
		<input type="hidden" name="id" value="{{$type->id}}">
		
		<div class="form-group">
			<label> Nome: </label>
			<input type="text" name="name" class="form-control" value="{{$type->name}}">
		</div>

		<button type="submit" class="btn btn-primary" style="float: right; margin-left: 5px;"> Editar </button>
		<button type="button" class="btn btn-danger" style="float: right; margin-bottom: 5px;" onclick="history.go(-1); return false;">Voltar</button>
	</form>
	
@stop