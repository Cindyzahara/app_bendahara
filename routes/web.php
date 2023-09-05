<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\T1AtuController;
use App\Http\Controllers\T1DpbController;
use App\Http\Controllers\T1NknController;
use App\Http\Controllers\T1RplController;
use App\Http\Controllers\T1TabController;
use App\Http\Controllers\T1TknController;
use App\Http\Controllers\T1TpmController;
use App\Http\Controllers\T1TsmController;
use App\Http\Controllers\T1UlwController;
use App\Http\Controllers\T2AtuController;
use App\Http\Controllers\T2DpbController;
use App\Http\Controllers\T2NknController;
use App\Http\Controllers\T2RplController;
use App\Http\Controllers\T2TabController;
use App\Http\Controllers\T2TknController;
use App\Http\Controllers\T2TpmController;
use App\Http\Controllers\T2TsmController;
use App\Http\Controllers\T2UlwController;
use App\Http\Controllers\T3AtuController;
use App\Http\Controllers\T3DpbController;
use App\Http\Controllers\T3NknController;
use App\Http\Controllers\T3RplController;
use App\Http\Controllers\T3TabController;
use App\Http\Controllers\T3TknController;
use App\Http\Controllers\T3TpmController;
use App\Http\Controllers\T3TsmController;
use App\Http\Controllers\T3UlwController;
use App\Http\Controllers\T1ApatController;
use App\Http\Controllers\T1AphpController;
use App\Http\Controllers\T1AtphController;
use App\Http\Controllers\T1NkpiController;
use App\Http\Controllers\T1TitlController;
use App\Http\Controllers\T1TlogController;
use App\Http\Controllers\T2ApatController;
use App\Http\Controllers\T2AphpController;
use App\Http\Controllers\T2AtphController;
use App\Http\Controllers\T2NkpiController;
use App\Http\Controllers\T2TitlController;
use App\Http\Controllers\T2TlogController;
use App\Http\Controllers\T3ApatController;
use App\Http\Controllers\T3AphpController;
use App\Http\Controllers\T3AtphController;
use App\Http\Controllers\T3NkpiController;
use App\Http\Controllers\T3TiltController;
use App\Http\Controllers\T3TlogController;
use App\Http\Controllers\halamanController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\T1KulinerController;
use App\Http\Controllers\T2KulinerController;
use App\Http\Controllers\T3KulinerController;
use App\Http\Controllers\LoginController;

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


Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/auth',[LoginController::class, 'auth'])->name('auth');
Route::get('/logout', [Logincontroller::class,'logout'])->name('logout');



Route::redirect('home', 'dashboard');
Route::prefix('dashboard')->group(
    function () {
        Route::get('/', [dashboardController::class, 'main'])->name('dashboard');
        Route::get('/tingkat1', [halamanController::class, 'tingkat1'])->name('tingkat1');
        Route::get('/tingkat2', [halamanController::class, 'tingkat2'])->name('tingkat2');
        Route::get('/tingkat3', [halamanController::class, 'tingkat3'])->name('tingkat3');
        Route::resource('T1Rpl', T1RplController::class);
        Route::resource('T1Titl', T1TitlController::class);
        Route::resource('T1Tsm', T1TsmController::class);
        Route::resource('T1Tpm', T1TpmController::class);
        Route::resource('T1Ulw', T1UlwController::class);
        Route::resource('T1Kuliner', T1KulinerController::class);
        Route::resource('T1Dpb', T1DpbController::class);
        Route::resource('T1Atph', T1AtphController::class);
        Route::resource('T1Aphp', T1AphpController::class);
        Route::resource('T1Apat', T1ApatController::class);
        Route::resource('T1Atu', T1AtuController::class);
        Route::resource('T1Nkn', T1NknController::class);
        Route::resource('T1Tkn', T1TknController::class);
        Route::resource('T1Nkpi', T1NkpiController::class);
        Route::resource('T1Tlog', T1TlogController::class);
        Route::resource('T1Tab', T1TabController::class);

        Route::resource('T2Rpl', T2RplController::class);
        Route::resource('T2Titl', T2TitlController::class);
        Route::resource('T2Tsm', T2TsmController::class);
        Route::resource('T2Tpm', T2TpmController::class);
        Route::resource('T2Ulw', T2UlwController::class);
        Route::resource('T2Kuliner', T2KulinerController::class);
        Route::resource('T2Dpb', T2DpbController::class);
        Route::resource('T2Atph', T2AtphController::class);
        Route::resource('T2Aphp', T2AphpController::class);
        Route::resource('T2Apat', T2ApatController::class);
        Route::resource('T2Atu', T2AtuController::class);
        Route::resource('T2Nkn', T2NknController::class);
        Route::resource('T2Tkn', T2TknController::class);
        Route::resource('T2Nkpi', T2NkpiController::class);
        Route::resource('T2Tlog', T2TlogController::class);
        Route::resource('T2Tab', T2TabController::class);

        Route::resource('T3Rpl', T3RplController::class);
        Route::resource('T3Titl', T3TiltController::class);
        Route::resource('T3Tsm', T3TsmController::class);
        Route::resource('T3Tpm', T3TpmController::class);
        Route::resource('T3Ulw', T3UlwController::class);
        Route::resource('T3Kuliner', T3KulinerController::class);
        Route::resource('T3Dpb', T3DpbController::class);
        Route::resource('T3Atph', T3AtphController::class);
        Route::resource('T3Aphp', T3AphpController::class);
        Route::resource('T3Apat', T3ApatController::class);
        Route::resource('T3Atu', T3AtuController::class);
        Route::resource('T3Nkn', T3NknController::class);
        Route::resource('T3Tkn', T3TknController::class);
        Route::resource('T3Nkpi', T3NkpiController::class);
        Route::resource('T3Tlog', T3TlogController::class);
        Route::resource('T3Tab', T3TabController::class);

        Route::get('/cetak-apat', [T1ApatController::class, 'cetakApat'])->name('cetak-apat');
        Route::get('/cetak-aphp', [T1AphpController::class, 'cetakAphp'])->name('cetak-aphp');
        Route::get('/cetak-atph', [T1AtphController::class, 'cetakAtph'])->name('cetak-atph');
        Route::get('/cetak-atu', [T1AtuController::class, 'cetakAtu'])->name('cetak-atu');
        Route::get('/cetak-dpb', [T1DpbController::class, 'cetakDpb'])->name('cetak-dpb');
        Route::get('/cetak-kuliner', [T1KulinerController::class, 'cetakKuliner'])->name('cetak-kuliner');
        Route::get('/cetak-nkn', [T1NknController::class, 'cetakNkn'])->name('cetak-nkn');
        Route::get('/cetak-nkpi', [T1NkpiController::class, 'cetakNkpi'])->name('cetak-nkpi');
        Route::get('/cetak-rpl', [T1RplController::class, 'cetakRpl'])->name('cetak-rpl');
        Route::get('/cetak-tab', [T1TitlController::class, 'cetakTab'])->name('cetak-tab');
        Route::get('/cetak-titl', [T1TitlController::class, 'cetakTitl'])->name('cetak-titl');
        Route::get('/cetak-tkn', [T1TknController::class, 'cetakTkn'])->name('cetak-tkn');
        Route::get('/cetak-tlog', [T1TlogController::class, 'cetakTlog'])->name('cetak-tlog');
        Route::get('/cetak-tpm', [T1TpmController::class, 'cetakTpm'])->name('cetak-tpm');
        Route::get('/cetak-tsm', [T1TsmController::class, 'cetakTsm'])->name('cetak-tsm');
        Route::get('/cetak-ulw', [T1UlwController::class, 'cetakUlw'])->name('cetak-ulw');

        Route::get('/cetak-apat', [T2ApatController::class, 'cetakApat'])->name('cetak-apat');
        Route::get('/cetak-aphp', [T2AphpController::class, 'cetakAphp'])->name('cetak-aphp');
        Route::get('/cetak-atph', [T2AtphController::class, 'cetakAtph'])->name('cetak-atph');
        Route::get('/cetak-atu', [T2AtuController::class, 'cetakAtu'])->name('cetak-atu');
        Route::get('/cetak-dpb', [T2DpbController::class, 'cetakDpb'])->name('cetak-dpb');
        Route::get('/cetak-kuliner', [T2KulinerController::class, 'cetakKuliner'])->name('cetak-kuliner');
        Route::get('/cetak-nkn', [T2NknController::class, 'cetakNkn'])->name('cetak-nkn');
        Route::get('/cetak-nkpi', [T2NkpiController::class, 'cetakNkpi'])->name('cetak-nkpi');
        Route::get('/cetak-rpl', [T2RplController::class, 'cetakRpl'])->name('cetak-rpl');
        Route::get('/cetak-tab', [T2TitlController::class, 'cetakTab'])->name('cetak-tab');
        Route::get('/cetak-titl', [T2TitlController::class, 'cetakTitl'])->name('cetak-titl');
        Route::get('/cetak-tkn', [T2TknController::class, 'cetakTkn'])->name('cetak-tkn');
        Route::get('/cetak-tlog', [T2TlogController::class, 'cetakTlog'])->name('cetak-tlog');
        Route::get('/cetak-tpm', [T2TpmController::class, 'cetakTpm'])->name('cetak-tpm');
        Route::get('/cetak-tsm', [T2TsmController::class, 'cetakTsm'])->name('cetak-tsm');
        Route::get('/cetak-ulw', [T2UlwController::class, 'cetakUlw'])->name('cetak-ulw');

        Route::get('/cetak-apat', [T3ApatController::class, 'cetakApat'])->name('cetak-apat');
        Route::get('/cetak-aphp', [T3AphpController::class, 'cetakAphp'])->name('cetak-aphp');
        Route::get('/cetak-atph', [T3AtphController::class, 'cetakAtph'])->name('cetak-atph');
        Route::get('/cetak-atu', [T3AtuController::class, 'cetakAtu'])->name('cetak-atu');
        Route::get('/cetak-dpb', [T3DpbController::class, 'cetakDpb'])->name('cetak-dpb');
        Route::get('/cetak-kuliner', [T3KulinerController::class, 'cetakKuliner'])->name('cetak-kuliner');
        Route::get('/cetak-nkn', [T3NknController::class, 'cetakNkn'])->name('cetak-nkn');
        Route::get('/cetak-nkpi', [T3NkpiController::class, 'cetakNkpi'])->name('cetak-nkpi');
        Route::get('/cetak-rpl', [T3RplController::class, 'cetakRpl'])->name('cetak-rpl');
        Route::get('/cetak-tab', [T3TitlController::class, 'cetakTab'])->name('cetak-tab');
        Route::get('/cetak-titl', [T3TitlController::class, 'cetakTitl'])->name('cetak-titl');
        Route::get('/cetak-tkn', [T3TknController::class, 'cetakTkn'])->name('cetak-tkn');
        Route::get('/cetak-tlog', [T3TlogController::class, 'cetakTlog'])->name('cetak-tlog');
        Route::get('/cetak-tpm', [T3TpmController::class, 'cetakTpm'])->name('cetak-tpm');
        Route::get('/cetak-tsm', [T3TsmController::class, 'cetakTsm'])->name('cetak-tsm');
        Route::get('/cetak-ulw', [T3UlwController::class, 'cetakUlw'])->name('cetak-ulw');
    });
