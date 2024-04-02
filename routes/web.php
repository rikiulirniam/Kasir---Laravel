<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DataPembelianController;
use App\Http\Controllers\DetailController;
use App\Models\DataPembelian;
use App\Models\Detail;
use Illuminate\Support\Facades\Route;
use Symfony\Component\CssSelector\Node\FunctionNode;

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
Route::prefix('auth')->group(function(){
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::middleware('auth:web')->group(function(){
    Route::post('/add-menu', [DetailController::class, 'store'])->name('add-menu');

    Route::post('/new-transaksi', [DataPembelianController::class, 'store'])->name('new.transaksi');
    Route::get('/kasir/transaksi', [DataPembelianController::class, 'index'])->name('kasir.transaksi');
    Route::get('/kasir',
        function(){
            return view('pages/home');
        }
    );
});

Route::get('/', function () {
    return view('index');
});
