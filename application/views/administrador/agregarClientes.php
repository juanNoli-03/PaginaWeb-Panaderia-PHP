
<body id="body-agregar-articulo">   
    <section class="form-log">
        <form action="<?= base_url(); ?>ControladorCliente/GrabarCliente" method="POST">
        <h1>Agregar Cliente</h1>          
            <label for="name">Nombre: </label> <input class="controls" type="text" required="true" placeholder = "DNI" name="usuario">
            <label for="password">Apellido:</label> <input class="controls" type="text" required="true" placeholder = "DNI" name="pass">
            <button class="botons" type="submit">Agregar</button>
        </form>
    
</body>
</html>