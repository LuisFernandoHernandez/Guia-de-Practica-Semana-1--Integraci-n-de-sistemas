<?php

require_once __DIR__ . '/src/App/Dominio/Priorizable.php';
require_once __DIR__ . '/src/App/Dominio/Item.php';
require_once __DIR__ . '/src/App/Dominio/Tarea.php';

use App\Dominio\Tarea;

$hoy = new DateTimeImmutable();

$tareaPasado = new Tarea(
    "Entrega del informe",
    1,
    (new DateTimeImmutable())->modify("-3 days")
);

$tareaFuturo = new Tarea(
    "Preparar presentación",
    2,
    (new DateTimeImmutable())->modify("+5 days")
);

echo "Tarea del pasado vencida: "
    . ($tareaPasado->esVencida($hoy) ? "Sí" : "No")
    . PHP_EOL;

echo "Tarea del futuro vencida: "
    . ($tareaFuturo->esVencida($hoy) ? "Sí" : "No")
    . PHP_EOL;