<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Siswa\SiswaProfileController;
use App\Http\Controllers\Admin\BiayaController;
use App\Http\Controllers\Admin\PembayaranController;
use App\Http\Controllers\Admin\TahunAjaranController;
use App\Http\Controllers\Admin\JurusanController;
use App\Http\Controllers\Siswa\InformasiPembayaranController;
use App\Http\Controllers\Siswa\RiwayatPembayaranController;
use App\Http\Controllers\Admin\KelolaSiswaController;
use App\Http\Controllers\Admin\RekapPembayaranController;


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
Route::middleware('revalidate')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::controller(LoginController::class)->group(function () {
            Route::get('/login', 'login')->name('login');
            Route::post('/authenticate', 'authenticate')->name('authenticate');
        });
        Route::controller(RegisterController::class)->group(function () {
            Route::get('/register', 'register')->name('register');
            Route::post('/registration', 'registration')->name('registration');
        });
        Route::controller(ForgotPasswordController::class)->group(function () {
            Route::get('/forgot-password', 'forgotPassword')->name('forgotPassword');
            Route::post('/forgotPasswordProcess', 'forgotPasswordProses')->name('forgotPasswordProses');
        });
        Route::controller(ResetPasswordController::class)->group(function () {
            Route::get('/reset-password/{token}', 'resetPassword')->name('resetPassword');
            Route::post('/reset-password', 'resetPasswordProcess')->name('resetPasswordProcess');
        });
    });
    Route::middleware('auth')->group(function () {
        Route::controller(LogoutController::class)->group(function () {
            Route::post('/logout', 'logout')->name('logout');
        });
        Route::name('dashboard.')->group(function () {
            Route::prefix('/dashboard')->group(function () {
                Route::controller(DashboardController::class)->group(function () {
                    Route::get('', 'index')->name('');
                });
                Route::middleware('admin')->group(function () {
                    Route::resource('biaya', BiayaController::class)->only('index', 'show', 'store');
                    Route::resource('ksiswa', KelolaSiswaController::class)->except('create','index');
                    Route::controller(KelolaSiswaController::class)->group(function () {
                        Route::get('/ksiswa', 'tahunAjaran')->name('ksiswa.tahunAjaran');
                        Route::get('/ksiswa/{tahun_ajaran}/{jurusan}', 'siswa')->name('ksiswa.siswa');
                        Route::post('/ksiswa/import', 'import')->name('ksiswa.import');
                    });
                    Route::resource('tahunAjaran', TahunAjaranController::class)->only(['index','store','edit','update']);
                    Route::resource('jurusan', JurusanController::class)->only(['index','store','edit','update', 'destroy']);
                    Route::controller(BiayaController::class)->group(function () {
                        Route::get('/biaya/{id_biaya}/{id_tahun_ajaran}', 'biaya')->name('biaya.show.jurusan');
                        Route::post('/biaya/tambah', 'tambah')->name('biaya.tambah');
                        Route::post('/biaya/tambah/{tahunAjaran}', 'tambahTahunAjaran')->name('biaya.tambah.tahunAjaran');
                        Route::post('/biaya/jurusan/tambah', 'jurusanTambah')->name('biaya.jurusan.tambah');
                    });
                    Route::controller(RekapPembayaranController::class)->group(function () {
                        Route::get('/rekapan_pembayaran', 'index')->name('rekapan.pembayaran.index');
                        Route::get('/rekapan_pembayaran/{id}', 'show')->name('rekapan.pembayaran.show');
                    });

                    Route::resource('pembayaran', PembayaranController::class)->only('index', 'show', 'store');
                    Route::controller(PembayaranController::class)->group(function () {
                        Route::get('/pembayaran/cetak/{id}', 'cetak')->name('pembayaran.cetak');
                    });
                });
                Route::middleware('user')->group(function () {
                    Route::name('siswa.')->group(function () {
                        Route::prefix('/siswa')->group(function () {
                            Route::controller(InformasiPembayaranController::class)->group(function () {
                                Route::get('/pembayaran', 'index')->name('pembayaran');
                            });
                            Route::controller(RiwayatPembayaranController::class)->group(function () {
                                Route::get('/riwayat_pembayaran', 'index')->name('riwayat_pembayaran');
                            });
                            Route::controller(SiswaProfileController::class)->group(function () {
                                Route::get('/profile', 'index')->name('profile');
                            });
                        });
                    });
                });
            });
        });
    });
});

