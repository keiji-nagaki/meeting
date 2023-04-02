<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ResultController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ScheduleSearchController;
use App\Http\Controllers\Main_userController;
use App\Http\Controllers\Main_userSearchController;

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
Route::middleware('auth')->group(function () {
    // 🔽 追加（検索画面）
Route::get('/result/search/input', [SearchController::class, 'create'])->name('search.input');
  // 🔽 追加（検索処理）
Route::get('/result/search/result', [SearchController::class, 'index'])->name('search.result');
Route::get('/result/mypage', [ResultController::class, 'mydata'])->name('result.mypage');
Route::resource('result', ResultController::class);

Route::get('/schedule/schedulesearch/input', [ScheduleSearchController::class, 'create'])->name('schedulesearch.input');
  // 🔽 追加（検索処理）
Route::get('/schedule/schedulesearch/result', [ScheduleSearchController::class, 'index'])->name('schedulesearch.result');
Route::get('/schedule/mypage', [ScheduleController::class, 'mydata'])->name('schedule.mypage');
Route::resource('schedule', ScheduleController::class);

// 🔽 追加（検索画面）
Route::get('/main_user/main_usersearch/input', [Main_usersearchController::class, 'create'])->name('main_usersearch.input');
  // 🔽 追加（検索処理）
Route::get('/main_user/main_usersearch/result', [Main_usersearchController::class, 'index'])->name('main_usersearch.result');
Route::get('/main_user/mypage', [Main_userController::class, 'mydata'])->name('main_user.mypage');
Route::resource('main_user', Main_userController::class);
});




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
