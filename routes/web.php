<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController; 
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return ('Selamat Datang');
// });

// Route::get('/about', function () {
//     return ('<p> Nama : Odan Syaharta </p>
//     <p> NIM : 2321771002</p>');
// });

// Route::get('/articles/{id}', function ($id) {
//     return view ('articles',["id"=>$id]);
// });
   
// Route::get('/p/{id}/articles/{coment}', function ($id, $coment) {
//  return view ('articles',['id'=>$id, 'coment'=>$coment]);
// });

Route::get('/odan', [PageController::class,'odan']);
Route::get('/', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/articles/{id}', [PageController::class,'articles']);

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticlesController::class,'articles']);