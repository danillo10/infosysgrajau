<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    

	public function paginaPrincipal()
	{

		return view('pagina-principal.index');

	}

}
