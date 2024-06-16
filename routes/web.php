<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ImportacoesJsonController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



// Rota para a página de login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// Rota para logout
// Route::post('logout', function () {
//     Auth::logout();
//     return redirect()->route('login');
// })->name('logout');

    // Outra forma seria definir diretamente a função como um closure.
Route::post('logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// Rotas protegidas por autenticação
Route::middleware('auth')->group(function () {
    // Rotas para posts

    Route::resource('posts', 'App\Http\Controllers\PostController');

    Route::get('posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

    // Rotas para comentários dentro de posts
    Route::post('posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::get('posts/{post}/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
    Route::put('posts/{post}/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('posts/{post}/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

    Route::post('/importar-json', [ImportacoesJsonController::class, 'importarJson'])->name('importar.json');
    // Route::get('/importacoes-json', [ImportacoesJsonController::class, 'show'])->name('importacoes.json.show');
    Route::get('/posts', [PostController::class, 'index1'])->name('posts.index');
    Route::delete('/import-json/{id}', [ImportacoesJsonController::class, 'destroy'])->name('import-json.destroy');

});

// // Redirecionar a rota raiz para a página de login
// Route::get('/', function () {
//     return redirect()->route('login');
// });

Route::get('/', function () {
    return view('site.principal');
});

//ROTAS CADASTRO LOGIN

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [UserController::class, 'register']);

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

// Route::post('/login', [UserController::class, 'login'])->name('comments.index');

// Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// //ROTAS COMENTARIOS

// Route::middleware('auth')->group(function () {
//     Route::get('/comments', [PostController::class, 'index'])->name('comments');
//     Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
//     Route::get('/posts/{post}/comments', [CommentController::class, 'index'])->name('comments.index');
//     Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
//     Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
//     Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
//     Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
// });

//ROTAS PAGINAS

Route::get('/principal', [\App\Http\Controllers\PrincipalController::class, 'princ']);
Route::get('/historia', [\App\Http\Controllers\HistoriaController::class, 'princ']);
Route::get('/culturab', [\App\Http\Controllers\CulturaBController::class, 'princ'])->name('site.culturab');
Route::get('/culinaria', [\App\Http\Controllers\CulinariaController::class, 'princ']);
Route::get('/fauna', [\App\Http\Controllers\FaunaController::class, 'princ']);
Route::get('/flora', [\App\Http\Controllers\FloraController::class, 'princ']);
Route::get('/praias', [\App\Http\Controllers\PraiaController::class, 'princ']);
Route::get('/lugares', [\App\Http\Controllers\LugaresTuristicosController::class, 'princ']);



