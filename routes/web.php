<?php

use App\Http\Controllers\RelationController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/relation/oneToOne', [RelationController::class, 'oneToOne']);
Route::get('/relation/oneToOneInverse', [RelationController::class, 'oneToOneInverse']);
Route::get('/relation/oneToMany', [RelationController::class, 'oneToMany']);
Route::get('/relation/oneToManyInverse', [RelationController::class, 'oneToManyInverse']);
Route::get('/relation/defaultModels', [RelationController::class, 'defaultModels']);
Route::get('/relation/whereBelongsTo', [RelationController::class, 'whereBelongsTo']);
Route::get('/relation/hasOneOfMany', [RelationController::class, 'hasOneOfMany']);
Route::get('/relation/advancedHasOneOfMany', [RelationController::class, 'advancedHasOneOfMany']);
