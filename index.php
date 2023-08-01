<?php
const school = 'EIP';
$name = 'Juan';
$surname = 'Rodríguez Fernández';
$age = 55;
$interests = 'Deportes, música, naturaleza';

?>
<h1> Alumno de <span><?= school ?></span></h1>
<p>
    <b>Nombre: </b> <span> <?= $name ?> </span>
</p>
<p>
    <b>Apellidos: </b> <span> <?= $surname ?> </span>
</p>
<p>
    <b>Edad: </b> <span> <?= $age ?> </span>
</p>
<p>
    <b>Intereses: </b> <span> <?= $interests ?> </span>
</p>