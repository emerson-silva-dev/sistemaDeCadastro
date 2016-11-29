<?php 

namespace sistemaDeCadastro\Http\Controllers;
use Illuminate\Support\Facades\DB;
USE sistemaDeCadastro\Type;
use Request;
use sistemaDeCadastro\Http\Requests\TypesRequest;

class TypeController extends Controller {
	
	public function lista(){
		if (!view()->exists('types.list_types')) {
			return "Página não existe";
		}

		$types = Type::all()->where('active', 1);
		return view('types.list_types')->with('types', $types);
	}

	public function visualizar($id){
		if (!view()->exists('types.view_type')) {
			return "Página não existe";
		}
		
		$type = Type::find($id);
		if(empty($type)){
			return "Tipo não existe";
		}
		return view('types.view_type')->with('type', $type);
	}

	public function edit_type($id){
		if (!view()->exists('types.edit_type')) {
			return "Página não existe";
		}

		$type = Type::find($id);
		if(empty($type)){
			return "tipo de usuário o não existe";
		}
		return view('types.edit_type')->with('type', $type);
	}


	public function cadastrar(){
		if(!view()->exists('types.form_types')){
			return "Página não existe";
		}
		return view('types.form_types');
	}


	public function s_cadastrar(TypesRequest $request){

		Type::create($request->all());

		return redirect()
				->action('TypeController@lista')
				->withInput(Request::only('name'));
	}

	public function s_editar(TypesRequest $request){

		$type = Type::find(Request::input('id'));
		$type->name = $request->input('name');
		$type->save();

		return redirect()
				->action('TypeController@lista');
	}

	public function delete_type($id){
		$type = Type::find($id);
		$type->active = 0;
		$type->save();
		
		return redirect()
			->action('TypeController@lista');
	}
}

?>