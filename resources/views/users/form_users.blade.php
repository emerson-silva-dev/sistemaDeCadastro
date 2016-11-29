@extends('layout.principal')

@section('conteudo')

	<h1> Cadastrar usuário </h1>
	
	@if(COUNT($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li> {{ $error }} </li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="/users/s_cadastrar" method="post" id="form_submit">
		
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
		
		<div class="form-group">
			<label> Nome </label>
			<input id="name" type="text" name="name" class="form-control" placeholder="Nome" value="{{ old('name') }}">
		</div>
		
		<div class="form-group">
			<label> E-mail: </label>
			<input id="email" type="email" name="email" class="form-control" placeholder="meuemail@gmail.com" value="{{ old('email') }}">
		</div>	

		<div class="form-group">
			<label> Tipo de usuário </label>
			<select id="type_id" name="type_id" class="form-control"> 
				<option value=""> Selecione o tipo do usuário </option>
				@foreach($types as $type)
					<option value="{{ $type->id }}" value="{{ old('type_id') }}"> {{ $type->name }} </option>
				@endforeach
			</select>
		</div>

		<button type="submit" class="btn btn-primary" style="float: right; margin-left: 5px;"  onclick="validar(); return false;"> Cadastrar </button>
		<button type="button" class="btn btn-danger" style="float: right; margin-bottom: 5px;" onclick="history.go(-1); return false;">Voltar</button>
	</form>

@stop

<script type="text/javascript">
	function validar(){


		if($('#name').val() == '' || $('#name').val() == undefined){
			alert('Campo name não pode ser vazio');
			$('#name').focus();
			return false;
		}

		if($('#email').val() == ''|| $('#email').val() == undefined){
			alert('Campo email não pode ser vazio');
			$('#email').focus();
			return false;
		}

		if($('#type_id').val() == ''|| $('#type_id').val() == undefined){
			alert('Campo tipo de usuario não pode ser vazio');
			$('#type_id').focus();
			return false;
		}

		$("#form_submit").submit();
	}
</script>