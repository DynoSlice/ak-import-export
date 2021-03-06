<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
/**page qui somme nous */
// Route::get('notre-mission', function () {
//     return view('AK/qui-somme-nous/notre-mission');
// });

Route::get('qui-somme-nous-ak', function () {
    return view('AK/qui-somme-nous/qui-somme-nous');
});

/**page service */
Route::get('nos-service-guinee', function () {
    return view('AK/nos-service/nos-service');
});

Route::get('transport-maritime-Europe-Guinee', function () {
    return view('AK/nos-service/transport-maritime');
});

// Route::get('transport-aerien', function () {
//     return view('AK/nos-service/transport-aerien');
// });

Route::get('transport-routier-Guinee', function () {
    return view('AK/nos-service/transport-routier');
});

// Route::get('consulting', function () {
//     return view('AK/nos-service/consulting');
// });

/**page Vente */
Route::get('vente-materiel-Guinee', function () {
    return view('AK/vente/vente');
});
/**page contact et devis */
Route::get('contact', function () {
    return view('AK/contact/contact');
});

// Route::get('devis', function () {
//     return view('AK/devis-en-ligne/devis');
// });

//Post page contact
Route::post('/contact', 'ContactController@store');

//Auth::routes();

//Route partie admin du site.
Route::get('/homeDashboard', 'HomeController@index')->name('homeDashboard');

