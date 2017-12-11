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
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/loginalumno', function () {
    return view('login');
});
Route::get('/loginprofesor', function () {
    return view('loginProfesor');
});
Route::get('/admin', function () {
    return view('loginAdmin');
});
Route::get('/panel', function () {
    return view('panelControl');
});
Route::get('/panelAlumno', function () {
    return view('panelAlumno');
});
Route::get('/RegistrarEscuela', function () {
    return view('RegistrarEscuela');
});
Route::get('/RegistrarAlumno', function () {
    return view('RegistrarAlumno');
});
Route::get('/RegistrarGrupo', function () {
    return view('RegistrarGrupo');
});
Route::get('/RegistrarProfesor', function () {
    return view('RegistrarProfesor');
});
Route::get('/RegistrarSala', function () {
    return view('RegistrarSala');
});
Route::get('/RegistroAdministrador', function () {
    return view('RegistroAdministrador');
});
Route::get('/panelMaestro', function () {
    return view('panelMaestro');
   }); 
Route::get('/RegistrarAlumnoProfesor', function () {
    return view('RegistrarAlumnoProfesor');
   }); 
Route::get('/RegistrarSalaProfesor', function () {
    return view('RegistrarSalaProfesor');
   });
Route::get('/entrada', function () {
    return view('formularioEntrada');
   });
Route::get('/salida', function () {
    return view('formularioSalida');
   });
Route::get('/popupEntrada', function () {
    return view('popupEntrada');
   });
Route::get('/popupSalida', function () {
    return view('popupSalida');
   });
Route::get('/politica', function () {
    return view('piliticaprivacidad');
   });
Route::get('/terminos', function () {
    return view('terminos');
   });
