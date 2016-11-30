@extends('layout.principal')

@section('conteudo')

	<h1> Listagem de usuários cadastrados
		<a href="users/cadastrar" type="submit" class="btn btn-primary" style="float: right; margin-left: 5px;">  + Cadastrar usuário </a>
	</h1>


	<table class="table table-striped table-bordered table-hover"> 
		@if(isset($alert))
			<tr>
				<td class="alert alert-danger"> {{ $alert }} </td>
			</tr>
		@endif

		@if(COUNT($users) == 0)
			<tr>
				<td class="alert alert-danger"> Não existe nenhum ususario cadastrado </td>
			</tr>
		@else

			<thead>
                <tr>
                    <th> Nome </th>
                    <th> Email </th>
                    <th> Tipo </th>
                    <th> Status </th>
                    <th style="width:220px!important;"> Ações </th>
                </tr>
            </thead>

			@foreach ($users as $key => $user)
				<tr>
					<td> {{$user->name}} </td>
					<td> {{$user->email}} </td>
					<td> {{$user->type->name}} </td>
					@if($user->active == 1)
					<td> Ativo </td>
					@else
						<td> Desativado </td>
					@endif
					<td>
						<a href="users/visualizar/{{$user->id}}" class="btn btn-mini btn-success"> View </a>
						@if($user->active == 1)
							<a href="users/edit_user/{{$user->id}}" class="btn btn-mini btn-primary"> Editar </a>
							<a href="users/delete_user/{{$user->id}}" class="btn btn-mini btn-danger"> Excluir </a>
						@endif
					</td>
				</tr>
			@endforeach
		
		@endif
	</table>

	@if(old('name'))
		<div class="alert alert-success">
			{{ old('name') }} foi cadastrado com sucesso!
		</div>
	@endif

	<button type="button" class="btn btn-danger" style="float: right; margin-bottom: 5px;" onclick="history.go(-1); return false;">Voltar</button>

@stop