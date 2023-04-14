<?php

declare(strict_types=1);

namespace Domain\Repository;

interface ProductInterface
{
    public function paginate(): array;
}