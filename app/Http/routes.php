<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return view('index');
});

$app->get('/estados', 'EstadosController@index');
$app->get('/municipios', 'MunicipiosController@index');
$app->get('/parroquias', 'ParroquiasController@index');
$app->get('/ciudades', 'CiudadesController@index');

$app->post('oauth/access_token', function() {
    return response()->json(Authorizer::issueAccessToken());
});


$app->get('/github_login', function() {
	return redirect('https://github.com/login/oauth/authorize?client_id='.env('GH_CLIENT_ID'));
});

$app->get('oauth/github/authorize', function(\Illuminate\Http\Request $request) {
	$params['client_id'] = env('GH_CLIENT_ID');
	$params['client_secret'] = env('GH_CLIENT_SECRET');
	$params['code'] = $request['code'];
	//$params['redirect_uri'] = 'http://veneestados.app/oauth2/authorize';

	$client = new GuzzleHttp\Client();

	
	$res = $client->request('POST', 'https://github.com/login/oauth/access_token?'.http_build_query($params), [
    	'headers' => ['Accept' => 'application/json']
	]);

	$body = json_decode($res->getBody());

	dd($body);

});