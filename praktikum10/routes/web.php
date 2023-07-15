<?php

// panggil controller
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TampilamController;
use Illuminate\Support\Facades\Auth;


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
//     return view('welcome');
// });

Route::get('/', [TampilamController::class, 'index']);

// bikin routing untuk validasi login user data
Route::group(['middleware' => ['auth']], function () {
    Route::prefix('admin')->group(function () {


        // routing ke dashboard
        Route::get('/dashboard', [DashboardController::class, 'index']);

        //routing ke produk
        Route::get('/produk', [ProdukController::class, 'index']);
        // routing ke form create
        Route::get('/produk/create', [ProdukController::class, 'create']);
        // routing tambah data fungsi store
        Route::post('/produk/store', [ProdukController::class, 'store']);
        // routing ke form edit
        Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
        //routing fungsi update
        Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
        // routing fungsi delete data fungsi destroy
        Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
    });
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
