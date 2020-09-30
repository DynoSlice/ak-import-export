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
use App\Mail\sendEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;

Route::get('/', function () {
    return view('home');
});
/**page qui somme nous */
// Route::get('notre-mission', function () {
//     return view('AK/qui-somme-nous/notre-mission');
// });

Route::get('qui-somme-nous', function () {
    return view('AK/qui-somme-nous/qui-somme-nous');
});

/**page service */
Route::get('nos-service', function () {
    return view('AK/nos-service/nos-service');
});

Route::get('transport-maritime', function () {
    return view('AK/nos-service/transport-maritime');
});

// Route::get('transport-aerien', function () {
//     return view('AK/nos-service/transport-aerien');
// });

Route::get('transport-routier', function () {
    return view('AK/nos-service/transport-routier');
});

Route::get('consulting', function () {
    return view('AK/nos-service/consulting');
});

/**page Vente */
Route::get('vente', function () {
    return view('AK/vente/vente');
});
/**page contact et devis */
Route::get('contact', function () {
    return view('AK/contact/contact');
});

// Route::get('devis', function () {
//     return view('AK/devis-en-ligne/devis');
// });

Route::post('/contact', 'ContactController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
