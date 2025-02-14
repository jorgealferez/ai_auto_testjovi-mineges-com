use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuienesSomosController;
use App\Http\Controllers\JoviController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quienes-somos', [QuienesSomosController::class, 'index'])->name('quienes.somos');

Route::get('/jovi', [JoviController::class, 'index'])->name('jovi.index');