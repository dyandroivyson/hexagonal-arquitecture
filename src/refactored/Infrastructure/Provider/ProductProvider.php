<?php

declare(strict_types=1);

namespace Infrastructure\Provider;

use Domain\Repository\ProductInterface;
use Illuminate\Support\ServiceProvider;
use Infrastructure\Http\Repository\MySQL\ProductRepository;

class ProductProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Http/routes.php');

        $this->app->bind(ProductInterface::class, ProductRepository::class);
    }
}