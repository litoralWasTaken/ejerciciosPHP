# Actividad3: Arrays y bucles

## Descripción 📋 

Sacar por pantalla los datos de los arrays de información que se dan al inicio de cada index.php.
Hay dos ejercicios:
1. index.php
2. index_p2.php

La información que se aporta en ambos archivos son dos arrays:
$menu       ->    Array con los ítems del menú
$productos  ->    Array con los productos de la tienda


## Enunciado 📒 


1. En index.php:

1.1 Sacar los datos de $menu con echos o <?= ?> en el elemento <nav> en lugar de los textos planos que hay ahora

1.2 Sacar los datos de $productos con echos o <?= ?> en todos los elementos div.card en lugar de los textos planos que hay ahora:
 - título: Lenovo IdeaPad 3
 - descripción: Lenovo IdeaPad 3 15IAU7 Intel Core i5-1235U/16GB/512GB SSD/15.6''
 - precio:  1233,99
 - src de la imagen: https://thumb.pccomponentes.com/w-300-300/articles/1063/10639213/1359-lenovo-ideapad-3-15iau7-intel-core-i5-1235u-16gb-512gb-ssd-156.jpg



2. En index_p2.php: 
2.1 Sacar por pantalla los <a class="link"> del <nav> a través de recorrer el array $menu con un bucle FOR
2.2 Sacar por pantalla los <div class="card"> a través de recorrer el array $productos con un bucle FOREACH sacando la información de cada producto en el lugar correspondiente del elemento html