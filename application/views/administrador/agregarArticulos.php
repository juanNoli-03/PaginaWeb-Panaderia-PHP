 <body id="body-agregar-articulo">   
    <section class="form-log">
        <form action="<?= base_url(); ?>ControladorArticulo/GrabarArticulo" method="POST">
        <h1>Cargar Articulo</h1>          
            <label for="name">Nombre: </label> <input class="controls" type="text" required="true" placeholder = "Ingrese nombre" name="nombre">
            <label for="password">Descripcion:</label> <input class="controls" type="text" required="true" placeholder = "Ingrese Descripcion" name="descripcion">
            <label for="password">Precio:</label> <input class="controls" type="text" required="true" placeholder = "Ingrese Precio" name="precio">
            <label for="password">Stock:</label> <input class="controls" type="text" required="true" placeholder = "Ingrese Stock" name="stock">
            <button class="botons" type="submit">Cargar</button>
        </form>
    
</body>
</html>