<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'user',
], function () {
    Route::get('info', [UserController::class, 'info']);
});
