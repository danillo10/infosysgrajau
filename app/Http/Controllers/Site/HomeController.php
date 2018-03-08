<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Goutte\Client;

class HomeController extends Controller
{
    

	public function paginaPrincipal()
	{

		$noticias = HomeController::pegaNoticias1();

    	return view('pagina-principal.index', compact('noticias'));

	}

	public static function pegaNoticias1()
    {

        $client = new Client();

        $crawler = $client->request('GET','http://idgnow.com.br/');

        $links = $crawler->filter('article > h2 > a')->each(function ($response) {
            return $response->attr('href');
        });

        $noticia = $crawler->filter('article > h2 > a')->each(function ($response) {
            return $response->text();
        });

        $imagem = $crawler->filter('article > figure > a > img')->each(function ($response) {
        	return $response->attr('src');
        });

        $noticias = ['noticia'=>$noticia, 'link'=>$links, 'imagem'=>$imagem];

        return $noticias;

    }

}
