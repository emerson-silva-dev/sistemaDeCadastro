<?php 

namespace sistemaDeCadastro\Http\Controllers;
use Illuminate\Support\Facades\DB;
USE sistemaDeCadastro\User;
USE sistemaDeCadastro\Type;
use Request;
use sistemaDeCadastro\Http\Requests\UsersRequest;

class UserController extends Controller {

	public function lista(){
		if (!view()->exists('users.list_users')) {
			return "Página não existe";
		}

		$users = User::all();
		return view('users.list_users')->with('users', $users);
	}

	public function visualizar($id){
		if (!view()->exists('users.view_user')) {
			return "Página não existe";
		}

		$user = User::find($id);
		if(empty($user)){
			return "Usuário não existe";
		}

		return view('users.view_user')->with('user', $user);
	}

	public function cadastrar(){
		if(!view()->exists('users.form_users')){
			return "Página não existe";
		}

		$types = Type::all()->where('active', 1);
		return view('users.form_users')->with('types', $types);
	}

	public function edit_user($id){
		if (!view()->exists('users.edit_user')) {
			return "Página não existe";
		}

		$user = User::find($id);
		$types = Type::all();
		if(empty($user)){
			return "Usuário não existe";
		}

		return view('users.edit_user')
				->with('user', $user)
				->with('types', $types);
	}

	public function s_editar(UsersRequest $request){

		$user = User::find(Request::input('id'));
		$user->name = $request->input('name');
		$user->email = $request->input('email');
		$user->type_id = $request->input('type_id');

		$user->save();

		return redirect()
				->action('UserController@lista')
				->withInput(Request::only('name'));
	}

	public function s_cadastrar(UsersRequest $request){

		User::create($request->all());

		return redirect()
				->action('UserController@lista')
				->withInput(Request::only('name'));
	}

	public function delete_user($id){
		$user = User::find($id);
		$user->active = 0;
		$user->save();

		return redirect()
			->action('UserController@lista');
	}

}


?> 