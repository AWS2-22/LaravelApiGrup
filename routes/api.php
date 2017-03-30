<?php

use Illuminate\Http\Request;
use App\Dosrius;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/naixements/{any}', function(Request $request, $any) {
	// retorna els naixements d'aquest any dividits per gènere
	$data = dosrius::select('any', 'homes', 'dones', 'total')->where('any',$any)->get();
    return response()
    	->json( $data )
    	->withCallback($request->input('callback'));
});

Route::get('/naixements/{any}/{genere}', function(Request $request, $any, $genere) {
	// retorna els naixements d'aquest any i gènere
	$data = dosrius::select('any', $genere)->where('any',$any)->get();
    return response()
    	->json( $data )
    	->withCallback($request->input('callback'));
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
