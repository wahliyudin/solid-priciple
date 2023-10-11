<?php

namespace App\Solid\InterfaceSegregation\Bird;

use App\Solid\InterfaceSegregation\Bird\Abilities\Speakable;
use App\Solid\InterfaceSegregation\Bird\Abilities\Walkable;

class Penguin implements Speakable, Walkable
{
    public function speak()
    {
    }

    public function walk()
    {
    }
}
