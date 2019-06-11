<?php
declare(strict_types=1);

use AdamTheHutt\LaravelDismissibleTips\DismissibleTipsController;
use Illuminate\Support\Facades\Route;

Route::prefix('dismissible-tips')->middleware('auth')->group(function () {
    Route::post('dismiss', [DismissibleTipsController::class, 'dismiss']);
});
