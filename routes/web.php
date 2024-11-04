    <?php

    use App\Http\Controllers\AuthController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\PortofolioController;


    Route::get('/folio', function () {
        return view('adminPortofolio');
    });
    
    Route::get('/', [PortofolioController::class, 'indexLanding']);

    Route::get('/detailHalaman/{id}', [PortofolioController::class, 'show'])->name('detailHalaman');

    Route::post('/tambah', [PortofolioController::class, 'store'])->name('tambah');

    Route::post('/ubah/{id}', [PortofolioController::class, 'update'])->name('ubah');

    Route::delete('/hapus/{id}', [PortofolioController::class, 'destroy'])->name('hapus');

    Route::get('/login', [AuthController::class, 'indexLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'storeLogin'])->name('loginSubmit');

    Route::get('/registrasi', [AuthController::class, 'indexRegistrasi'])->name(('registrasi'));
    Route::post('/registrasi', [AuthController::class, 'storeRegistrasi'])->name('registrasiSubmit');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/admin', [PortofolioController::class, 'index'])->name('admin');
    });
