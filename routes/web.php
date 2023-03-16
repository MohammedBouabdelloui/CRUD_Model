<?php

use App\Http\Controllers\ClientController;
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


Route::get('/add', function () {
    return view('add');
});

Route::resource('/client' , ClientController::class )->only([
    'index','edit' , 'create' ,'destroy' , 'update', 'show' 
]);

Route::get('/client/commonds/{id}' , [ClientController::class , 'commonds'])->name('commonds');
Route::get('/client/restore/{id}' , [ClientController::class , 'restore'])->name('restore');
Route::get('/client/softdelete/{id}' , [ClientController::class , 'forceDelete'])->name('softdelete');
Route::get('/client/recherche' , [ClientController::class , 'recherche'])->name('recherche');
Route::get('/client/commonds/{id}' , [ClientController::class , 'commonds'])->name('commonds');
