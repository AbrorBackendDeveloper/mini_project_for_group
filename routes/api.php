<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;

Route::get('/', function () {
    return response()->json([
        'loading_image' => asset('images/loading.png'),
    ]);
});

Route::get('/home', [HomePageController::class, 'index'])->name('homepage.index');
Route::get('/info', [HomePageController::class, 'getInfo']);

