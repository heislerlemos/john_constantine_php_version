<?php
use App\Http\Controllers\Centros_De_FormacoesController;
use App\Http\Controllers\CursoController;
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




Route::get('/', [Centros_De_FormacoesController::class, 'index']);
Route::post('centros_de_formacoes/{centros_de_formaco}/cursos', [CursoController::class, 'store'])->name('centros_de_formacoes.cursos.store'); 
Route::resource('centros_de_formacoes', Centros_De_FormacoesController::class);
