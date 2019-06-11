<?php
declare(strict_types=1);

use AdamTheHutt\LaravelDismissibleTips\DismissibleTipsController;
use Illuminate\Support\Facades\Route;

Route::post('dismissible-tips/dismiss', [DismissibleTipsController::class, 'dismiss'])->middleware(['web', 'auth']);
