<?php

namespace App\Solid\OpenClosed\AreaCalculator\Shapes;

use App\Solid\OpenClosed\AreaCalculator\Shapes\Contracts\ShapeInterface;

class Triangle implements ShapeInterface
{
    public function __construct(
        protected $base,
        protected $height,
    ) {
    }

    public function area()
    {
        return ($this->base * $this->height) / 2;
    }
}
