use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DesejosController;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\AuthController;

// Rota Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Rotas de Produtos
Route::prefix('produtos')->group(function () {
    Route::get('/create', [ProdutoController::class, 'create'])->name('produtos.create');
    Route::post('/store', [ProdutoController::class, 'store'])->name('produtos.store');
});

// Rotas de Desejos
Route::get('/desejos', [DesejosController::class, 'index'])->name('desejos');

// Rota para exibir a página de criação de conta
Route::get('/conta', [ContaController::class, 'index'])->name('conta.index'); // Exibe o formulário de criação de conta

// Rota para exibir o formulário de login
Route::get('/login', [AuthController::class, 'show'])->name('auth.show'); // Exibe o formulário de login

// Rota para registrar um novo usuário
Route::post('/registrar', [AuthController::class, 'register'])->name('auth.register');

// Rota para fazer login (autenticação)
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
