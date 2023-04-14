<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Original\Controllers\ProductController;

Route::get('products', [ProductController::class, 'index']);
