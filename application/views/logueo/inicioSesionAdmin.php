<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url(); ?>multimedia/css/administradorStyle.css">
    <link rel="shortcut icon" href="<?= base_url(); ?>multimedia/image/coronaIcono.png" type="image/x-icon">
    <title>Administrador</title>
</head>
<body>  

    <section class="form-log">
        
        <form action="<?= base_url(); ?>ControladorAdmin/validarUsuario" method="POST">          
            <h1>Inicia Sesión como Administador</h1>          
            <label for="name">Nombre de Usuario: </label> <input class="controls" type="text" name="usuario" required="true" placeholder = "Nombre de Usuario">
            <label for="password">Contraseña:</label> <input class="controls" type="password" name="clave" required="true" placeholder = "Contraseña">
            <button class="botons" type="submit">Ingresar</button>
        </form>
        <h1> <?php echo($conforme); ?> </h1>
    </section>
        
        
</body>
</html>