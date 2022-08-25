<?php
use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CoursesController;

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
    return view('welcome');
});
Route::view('/book-search','bookSearch');
Route::GET('search}',[BooksController::class,'bookSearch'])->name('autocomplete');
Route::view('/all-books','all-Books');
// Route::view('/header','header');
// Route::view('/footer','footer');

Route::view('/student','student');
Route::POST("/submit", [StudentController::class, "index"]);
Route::view('/course','courses');
Route::POST("/submit-course", [CoursesController::class, "index"]);
Route::view('/student-course','SC');
Route::POST("/submitCourse", [StudentController::class, "create"]);
Route::view('/datatable','datatable');
Route::GET("datatablelist", [StudentController::class, "getDataTable"]);
