<?php

namespace App\Solid\OpenClosed\AreaCalculator\Shapes;

use App\Solid\OpenClosed\AreaCalculator\Shapes\Contracts\ShapeInterface;

class Circle implements ShapeInterface
{
    public function __construct(
        protected $radius,
    ) {
    }

    public function area()
    {
        return $this->radius * $this->radius * pi();
    }
}
