@extends('layout.principal')

@section('conteudo')

	<h1> Editar usuário </h1>
	
	@if(COUNT($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li> {{ $error }} </li>
				@endforeach
			</ul>
		</div>
	@endif
	
	<form action="/users/s_editar" method="post">
		
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
		<input type="hidden" name="id" value="{{$user->id}}">
		
		<div class="form-group">
			<label> Nome </label>
			<input type="text" name="name" class="form-control" value="{{$user->name}}">
		</div>
		
		<div class="form-group">
			<label> E-mail: </label>
			<input type="email" name="email" class="form-control" value="{{$user->email}}">
		</div>	

		<div class="form-group">
			<label> Tipo de usuário </label>
			<select name="type_id" class="form-control"> 
				@foreach($types as $type)
					<option selected=" @if($user->type->id == $type->id) ? Selected : '' @endif" value="{{ $type->id }}"> {{ $type->name }} </option>
				@endforeach
			</select>
		</div>

		<button type="submit" class="btn btn-primary" style="float: right; margin-left: 5px;"> Editar </button>
		<button type="button" class="btn btn-danger" style="float: right; margin-bottom: 5px;" onclick="history.go(-1); return false;">Voltar</button>
	</form>

@stop