<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/", [HomeController::class,"index"]);
Route::get("/users", [AdminController::class,"user"]);
Route::get("/redirectadmin", [HomeController::class,"redirectadmin"]);
//for deleting food
Route::get("/deletefood/{id}", [AdminController::class,"deletefood"]);
//upadtefood reserveplace viewcheffs
Route::get("/updatefood/{id}", [AdminController::class,"updatefood"]);
Route::post("/updatefud/{id}", [AdminController::class,"updatefud"]);

Route::get("/reserved", [AdminController::class,"reserved"]);
//reserved'
//cheff area
Route::get("/viewcheffs", [AdminController::class,"viewcheffs"]);

Route::post("/addtocart/{id}", [HomeController::class,"addtocart"]);

 
Route::get("/showcart/{id}", [HomeController::class,"showcart"]);

Route::post("/reserveplace", [AdminController::class,"reserveplace"]);
Route::post("/savecheff", [AdminController::class,"savecheff"]);
Route::get("/deletethisuser/{id}", [AdminController::class,"deletethisuser"]);
Route::post("/uploadnow", [AdminController::class,"uploadnow"]);
Route::get("/fooditem", [AdminController::class,"fooditem"]);
Route::get("/updatecook/{id}", [AdminController::class,"updatecook"]);
// delete cook
Route::get("/deletecook/{id}", [AdminController::class,"deletecook"]);
//remove 
Route::get("/remove/{id}", [HomeController::class,"remove"]);
//post order to database
Route::post("/confirmorder", [HomeController::class,"confirmorder"]);
//customers ordes page
Route::get("/custormersorder", [AdminController::class,"confirmorder"]);

//search order
Route::get("/search", [AdminController::class,"search"]);

Route::post("/updatecookdetail/{id}", [AdminController::class,"updatecookdetail"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});