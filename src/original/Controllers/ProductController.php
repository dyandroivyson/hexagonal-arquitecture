<?php

declare(strict_types=1);

namespace Controllers;

class ProductController
{
    public function index(): array
    {
        return Product::latest()->paginate(5);
    }
}