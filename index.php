<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Las escuelas de mi vida</title>
    <link rel="stylesheet" href="Styles/Principal.css">

    <?php
    $escuelas = [
        'preescolar.php',
        'primaria.php',
        'secundaria.php',
        'mediaSuperior.php'
    ];
    ?>
</head>
<body>
<?php include 'Otros/Header.php'; ?>
<?php include 'Otros/navbar.php'; ?>
<main>
    <?php foreach ($escuelas as $escuela): ?>
        <?php include "Escuelas/$escuela"; ?>
    <?php endforeach; ?>
</main>
</body>
</html>
