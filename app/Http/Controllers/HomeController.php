<?php 

namespace sistemaDeCadastro\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;

class HomeController extends Controller {

	public function index(){
		if (!view()->exists('home')) {
			return "Página não existe";
		}
		
		return view('home');
	}

}

?>