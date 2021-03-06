<?php

use App\Http\Controllers\EpicController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TaskController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/epic/list', [EpicController::class, 'index']);
//Route::get('/epic', [EpicController::class, 'create'])->name('epic');
//Route::get('/task', [TaskController::class, 'create'])->name('task');
//Route::post('/epic', [EpicController::class, 'store']);

Route::resources([
    'epics' => EpicController::class,
    'tasks' => TaskController::class,
]);

require __DIR__.'/auth.php';
