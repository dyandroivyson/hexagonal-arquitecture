<?php

declare(strict_types=1);

namespace Infrastructure\Http\Repository\MySQL;

use Domain\Repository\ProductInterface;
use Infrastructure\Http\Repository\MySQL\Model\Product;

class ProductRepository implements ProductInterface
{
    public function __construct(
        private Product $model,
    )
    {
    }

    public function paginate(): array
    {
        return $this->model->latest()->paginate(5);
    }
}