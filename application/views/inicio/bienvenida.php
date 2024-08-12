<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url(); ?>multimedia/css/bienvenidaStyle.css">
    <link rel="shortcut icon" href="<?= base_url(); ?>multimedia/image/coronaIcono.png" type="image/x-icon">
    <title>Bienvenida</title>
</head>
<body>  
    <main>
        <section class="seccion-bienvenida">
            <div class="titulo">
                <h1>Panaderia "La Reina" <img src="multimedia/image/coronaIcono.png" alt=""></h1>
                <h4>Bienvenido a nuestra pagina inicial.</h4>
            </div>
    
            <div class="botones">
                <button><a href= "<?= base_url(); ?>ControladorAdmin/index">SOY UN ADMINISTRADOR</a></button>
                <button><a href= "<?= base_url(); ?>ControladorCliente/index">SOY UN CLIENTE</a></button>
                <button><a href= "<?= base_url(); ?>ControladorVisitante/index">SOY UN VISITANTE</a></button>
            </div>
        </section>
    </main>
</body>
</html>