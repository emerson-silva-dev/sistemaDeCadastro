@extends('layout.principal')

@section('conteudo')

	<h1> Cadastrar tipo de usuário </h1>

	@if(COUNT($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li> {{ $error }} </li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="/types/s_cadastrar" method="post" id="form_submit">

		<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
		
		<div class="form-group">
			<label> Nome: </label>
			<input type="text" name="name" id="name" class="form-control" placeholder="Nome tipo" value="{{ old('name') }}">
		</div>

		<button type="submit" class="btn btn-primary" style="float: right; margin-left: 5px;" onclick="validar(); return false;" > Cadastrar </button>
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

		$("#form_submit").submit();
	}

</script>