<?php

declare(strict_types=1);

namespace Application\Service;

use Domain\Repository\ProductInterface;

class ProductService
{
    public function __construct(
        private ProductInterface $repository,
    )
    {
    }

    public function handle(): array
    {
        return $this->repository->paginate();
    }
}