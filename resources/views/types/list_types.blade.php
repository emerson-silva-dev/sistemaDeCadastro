@extends('layout.principal')

@section('conteudo')

	<h1> Listagem de tipos de usuários 
		<a href="types/cadastrar" type="submit" class="btn btn-primary" style="float: right; margin-left: 5px;">  + Cadastrar tipo </a>
	</h1>
	
	<table class="table table-striped table-bordered table-hover"> 

		@if(COUNT($types) == 0)
			<tr>
				<td class="alert alert-danger"> Não existe tipos cadastrados </td>
			</tr>
		@else

			<thead>
                <tr>
                    <th> Tipo </th>
                    <th style="width:220px!important;"> Ações </th>
                </tr>
            </thead>

			@foreach ($types as $key => $type)
				<tr>
					<td> {{$type->name}} </td>
					<td>
						<a href="types/visualizar/{{$type->id}}" class="btn btn-mini btn-success"> View </a>
						<a href="types/edit_type/{{$type->id}}" class="btn btn-mini btn-primary"> Editar </a>
						<a href="types/delete_type/{{$type->id}}" class="btn btn-mini btn-danger"> Excluir </a>
					</td>
				</tr>
			@endforeach

		@endif
	</table>

	@if(old('name'))
		<div class="alert alert-success">
			<strong> Sucesso! </strong> O tipo {{ old('name') }} foi adicionado com sucesso!
		</div>
	@endif

	<button type="button" class="btn btn-danger" style="float: right; margin-bottom: 5px;" onclick="history.go(-1); return false;">Voltar</button>

@stop