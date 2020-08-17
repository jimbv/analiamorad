<?php  
use Illuminate\Support\Facades\Route;

use App\Noticia;
use App\Image;
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


// Para hacer las pruebas con las imagenes
Route::get('/prueba', function () {

    //17 CARGA PREVIA DE MULTIPLES RELACIONES DE UN PRODUCTO ESPECIFICO (EAGER LOADING) 

    /*$noticia = App\Noticia::with('images')->orderBy('id','desc')->get();
    return $noticia;*/
    return view('prueba');
     
});

// Mostrar resultados
Route::get('/resultados', function () {
    $img = App\Image::orderBy('id','desc')->get();
    return $img;
});




Route::get('/admin', function () {
    
    return view('plantilla.admin');
})->name('admin'); 

Route::resource('admin/noticia','Admin\AdminNoticiaController')->names('admin.noticia');

Route::get('/', function () {
    return view('inicio');
});
Route::get('/sobremi', function () {
    return view('sobremi');
});





Route::get('/amma', function () {
    return view('amma');
});
Route::get('ostamma', function () {
    return view('ostamma');
});
Route::get('/cieso', function () {
    return view('cieso');
});
Route::get('/utracos', function () {
    return view('utracos');
});
Route::get('/solidaridad', function () {
    return view('solidaridad');
});
Route::get('/adyra', function () {
    return view('adyra');
});
Route::get('/sea', function () {
    return view('sea');
});
Route::get('/compartir', function () {
    return view('compartir');
});
Route::get('/onativia', function () {
    return view('onativia');
});
Route::get('/maradona', function () {
    return view('maradona');
});
Route::get('/repetto', function () {
    return view('repetto');
});
Route::get('/servicios', function () {
    return view('servicios');
});
Route::get('/consejo', function () {
    return view('consejo');
});
Route::get('/mision', function () {
    return view('mision');
});
Route::get('/canal', function () {
    return view('canal');
});
Route::get('/canal', function () {
    return view('canal');
});
Route::get('/revista', function () {
    return view('revista');
});


Route::get('/contacto','ControladorPagina@contacto')->name('contacto');
Route::post('/contacto','ControladorPagina@contactoenviado')->name('contacto_enviado'); 

Route::get('/noticias', function () {
    $noticia = new Noticia();
    return $noticia->all();
});

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

Route::get('/home', 'HomeController@index')->name('home');



Route::get('cancelar/{ruta}',function($ruta){
    return redirect()->route($ruta)->with('cancelar','Acción cancelada');
})->name('cancelar');



Route::get('/noticia/{slug}/', 'ControladorPagina@noticia'); 


Route::get('/noticias','ControladorPagina@noticias')->name('noticias');