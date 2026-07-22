<?php

namespace Colonia\Escalon;

class Persona
{
    public function saludar(): string
    {
        return "Hola, soy Juan Pérez, de la Colonia Escalón.";
    }
}

namespace Colonia\Soyapango;

class Persona
{
    public function saludar(): string
    {
        return "Hola, soy Juan Pérez, de Soyapango.";
    }
}

namespace App;

$p1 = new \Colonia\Escalon\Persona();
$p2 = new \Colonia\Soyapango\Persona();

echo $p1->saludar() . PHP_EOL;
echo $p2->saludar() . PHP_EOL;

echo get_class($p1) . PHP_EOL;
echo get_class($p2) . PHP_EOL;