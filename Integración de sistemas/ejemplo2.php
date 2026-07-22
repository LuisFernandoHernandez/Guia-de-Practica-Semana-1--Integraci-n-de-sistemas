<?php

class Tarea
{
    public string $titulo;

    public function __construct(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function mover(): void
    {
        echo "Moviendo: " . $this->titulo . PHP_EOL;
    }
}

$t1 = new Tarea("Diseñar wireframe");
$t2 = new Tarea("Revisar presupuesto");

$t1->mover();
$t2->mover();