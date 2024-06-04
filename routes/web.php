<?php
use App\Http\Controllers\Centros_De_FormacoesController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EdicaoController;
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
Route::resource('centros_de_formacoes', Centros_De_FormacoesController::class) -> except([
'edit'
]);


Route::put('centros_de_formacoes/{centros_de_formaco}/cursos', [CursoController::class, 'update'])->name('centros_de_formacoes.cursos.update'); 
Route::get('/procurar', [Centros_De_FormacoesController::class, 'procurar']);
Route::get('centros_de_formacoes/{centros_de_formaco}/edit', [EdicaoController::class, 'estudanteid'] );
Route::delete('/cursos/destroy/{id}', [CursoController::class, 'destroy'])->name('centros_de_formacoes.cursos.destroy');
