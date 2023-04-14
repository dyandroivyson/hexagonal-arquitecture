<?php

declare(strict_types=1);

namespace Infrastructure\Http\Controller;

use Application\Service\ProductService;

class ProductController
{
    public function __construct(
        private ProductService $service,
    )
    {
    }

    public function index(): array
    {
        return $this->service->handle();
    }
}