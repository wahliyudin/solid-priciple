<?php

namespace App\Solid\InterfaceSegregation\Bird;

use App\Solid\InterfaceSegregation\Bird\Abilities\Flyable;
use App\Solid\InterfaceSegregation\Bird\Abilities\Speakable;
use App\Solid\InterfaceSegregation\Bird\Abilities\Walkable;

class Duck implements Flyable, Speakable, Walkable
{
    public function fly()
    {
    }

    public function speak()
    {
    }

    public function walk()
    {
    }
}
