<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
/
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/greeting', function () {
//     return 'Hello, Aku Manusia!';
// });


// Route::get('/greeting/{name}', function ($name) {
//     return 'Hello ' .$name;
// })->name('greeting_with_name');

// Route::get('/greeting/{name}', function ($name) {
//     return view ('example', ['name' => $name]);
// });


Route::get('/', [StudentController::class, 'index'])->name('index');
Route::get('/filter', [StudentController::class, 'filter'])->name('filter');
Route::get('/show/{id}', [StudentController::class, 'show'])->name('show');
Route::get('/update_password', [HomeController::class, 'update_password'])->name('update_password');
Route::patch('/store_password', [HomeController::class, 'store_password'])->name('store_password');

Route::middleware(['admin'])->group(function() {
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::post('/create', [StudentController::class, 'store'])->name('store');
    Route::get('/edit/{student}', [StudentController::class, 'edit'])->name('edit');
    Route::patch('/update/{student}', [StudentController::class, 'update'])->name('update');
    Route::delete('/delete/{student}', [StudentController::class, 'delete'])->name('delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
