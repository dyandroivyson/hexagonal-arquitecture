<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Infrastructure\Http\Controller\ProductController;

Route::get('products', [ProductController::class, 'index']);
