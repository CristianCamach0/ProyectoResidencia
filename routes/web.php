<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Route::get('/academia/index',function(){
    return view('academia.index');
});

Route::get('/academia/asignacion',function(){
    return view('academia.asignacion');
});

Route::get('/academia/dictamen',function(){
    return view('academia.dictamen');
});


Route::get('/alumno/index',function(){
    return view('alumno.index');
});

Route::get('/alumno/registro',function(){
    return view('alumno.registro');
});

Route::get('/alumno/solicitud',function(){
    return view('alumno.solicitud');
});


Route::get('/coordinacion/index',function(){
    return view('coordinacion.index');
});

Route::get('/coordinacion/validacion',function(){
    return view('coordinacion.validacion');
});

Route::get('/coordinacion/dashboard',function(){
    return view('coordinacion.dashboard');
});


Route::get('/revisor/index',function(){
    return view('revisor.index');
});

Route::get('/revisor/proyectos',function(){
    return view('revisor.proyectos');
});


Route::post('/autenticar/usuario',[AutenticarUser::class,'validar'])->name('autenticar.usuario');

Route::get('logout',[AutenticarUser::class,'logout'])->name('cerrar.usuario');
