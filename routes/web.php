<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MovieController;

//ACT6 MIGRACIONES
use App\Http\Controllers\DirectorController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

//ACT 15
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




//NUEVAS

    Route::get('/', function(){
        return view('index');
    })->name('index');


Route::get('characters', function () {
    $characters = [
        ['name' => 'Gandalf', 'alias' => 'Mithrandir', 'movie' => 'El señor de los anillos: La comunidad del anillo', 'age' => 2018, 'species' => 'Maiar', 'gender' => 'Masculino', 'img' => 'https://www.mundoespadas.com/wp-content/uploads/2012/01/23.jpg'],
        ['name' => 'Natasha Romanoff', 'alias' => 'Viuda Negra', 'movie' => 'The Avengers', 'age' => 28, 'species' => 'Humana', 'gender' => 'Femenino', 'img' => 'https://i0.wp.com/codigoespagueti.com/wp-content/uploads/2021/07/black-widow-natasha-Romanoff.jpg'],
        ['name' => 'Tyler Durden', 'alias' => 'Cornelius', 'movie' => 'El club de la lucha', 'age' => 26, 'species' => 'Humano', 'gender' => 'Masculino', 'img' => 'https://media.revistagq.com/photos/5ca5ec08bda594d44a33ccbe/1:1/w_320,h_320,c_limit/recordando_a_tyler_durden_el_club_de_la_lucha_92815838.jpg'],
        ['name' => 'Kevin Flynn', 'alias' => 'El creador', 'movie' => 'Tron', 'age' => 25, 'species' => 'Humano', 'gender' => 'Masculino', 'img' => 'https://medias.spotern.com/spots/w640/102/102318-1532336916.jpg'],
        ['name' => 'Sarah Connor', 'alias' => null, 'movie' => 'Terminator', 'age' => 23, 'species' => 'Humana', 'gender' => 'Femenino', 'img' => 'https://i1.wp.com/cinedominicano.com/wp-content/uploads/2017/09/Sarah-Connor.jpg?fit=2874%2C1934&ssl=1'],
        ['name' => 'Sarah Williams', 'alias' => null, 'movie' => 'Dentro del laberinto', 'age' => 17, 'species' => 'Humana', 'gender' => 'Femenino', 'img' => 'https://i.pinimg.com/1200x/51/19/a3/5119a38d53fa33a721706a8630246d4c.jpg'],
        ['name' => 'John McClane', 'alias' => 'Vaquero', 'movie' => 'La jungla de cristal', 'age' => 35, 'species' => 'Humano', 'gender' => 'Masculino', 'img' => 'https://i0.wp.com/popcon.com.ar/wp-content/uploads/2022/04/bruce-willis-john-mcclane-die-hard.jpg?fit=1280%2C720&ssl=1'],
        ['name' => 'Beatrix Kiddo', 'alias' => 'La novia', 'movie' => 'Kill Bill', 'age' => null, 'species' => 'Humana', 'gender' => 'Femenino', 'img' => 'https://static.diariofemenino.com/pictures/galerias/197000/197281-4.jpg'],
    ];
    return view('characters.characters', compact('characters'));
});



//ACT 8 CONTROLADORES CON TODO
//Route::get('/directors/nationality/{country}', [DirectorController::class, 'getDirectorsFromNationality']);
//ACT 14 SERVICE PROVIDER (Cambiamos a post)
Route::post('/directors/nationality/', [DirectorController::class, 'getDirectorsFromNationality'])->name('directors.nationality');


Route::resource('directors', DirectorController::class);

Route::resource('movies', MovieController::class)
    ->parameters(['movie' => 'slug'])
    ->missing(function (Request $request) {
        return Redirect::route('movies.index');
    });


    //ACT 15
    Route::get('signup', [LoginController::class, 'signupForm'])->name('signupForm');
    Route::post('signup', [LoginController::class, 'signup'])->name('signup');
    Route::get('login', [LoginController::class, 'loginForm'])->name('loginForm');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('account', function() {
        return view('users.account');
    })->name('users.account')
    ->middleware('auth');

    Route::get('/users/profile', [UserController::class, 'show'])->name('users.profile')->middleware('auth');


    Route::get('admin/profile', [AdminController::class, 'profileAdmin'])->name('admin.profileAdmin');
