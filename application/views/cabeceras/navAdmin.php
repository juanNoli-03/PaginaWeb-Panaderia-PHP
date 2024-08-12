<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= base_url(); ?>multimedia/image/coronaIcono.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url(); ?>multimedia/css/listaArticulos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </head>
    <title>Administrador</title>
</head>
<body>
<!--Esto sería el encabezado de la página, en este caso está separado y debe cargarse para cada vista-->
<header>
    <div class="logo">
            <img src="<?= base_url(); ?>multimedia/image/coronaIcono.png" alt="foto-logo">
        </div>
        <div class="titulo">
            <h1>La Reina</h1>
        </div>
        <div class="calls-header">
            <nav>
                <a href="<?= base_url(); ?>controladorAdmin/cargarVistaInicio"> <b>Inicio</b> </a>
                <a href="<?= base_url(); ?>controladorAdmin/cargarVistaArticulos"> <b>Administrar Articulos</b> </a>
                <a href="<?= base_url(); ?>controladorAdmin/cargarVistaClientes"> <b>Administrar Clientes</b> </a>
                <a href="<?= base_url(); ?>"> <b>Salir</b> </a>
            </nav>
        </div>
</header>