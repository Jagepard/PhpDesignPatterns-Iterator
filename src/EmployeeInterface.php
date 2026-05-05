<?php

declare(strict_types=1);

namespace Behavioral\Iterator;

interface EmployeeInterface
{
    public function iterateItems(\Traversable $basket): void;
}
