<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeniskamarController;

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
    return view('dashboard');
});

Route::get('/jeniskamar', [JeniskamarController::class, 'index'])->name('jeniskamar');
Route::get('/tambahkamar', [JeniskamarController::class, 'create'])->name('tambahkamar');
Route::post('/insertkamar', [JeniskamarController::class, 'store'])->name('insertkamar');
Route::get('/tampilankamar', [JeniskamarController::class, 'edit'])->name('tampilankamar');
Route::put('/updatejeniskamar', [JeniskamarController::class, 'update'])->name('updatejeniskamar');
Route::delete('/deletejeniskamar', [JeniskamarController::class, 'destroy'])->name('deletejeniskamar');

