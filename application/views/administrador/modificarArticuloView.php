<?php $this->load->view('cabeceras/navAdmin'); ?>
<body id="body-agregar-articulo">   
    <section class="form-log">
        <form action="<?= base_url(); ?>ControladorArticulo/modificar/<?=$id?>" method="POST">
        <h1>Modificar Articulo</h1> 
            <label for="nombre">Nombre: </label> <input class="controls" type="text" required="true" placeholder = "Ingrese nombre" name="nombre" value="<?=$articulo->nombre?>">
            <label for="password">Descripcion:</label> <input class="controls" type="text" required="true" placeholder = "Ingrese Descripcion" name="descripcion" value="<?=$articulo->descripcion?>">
            <label for="password">Precio:</label> <input class="controls" type="text" required="true" placeholder = "Ingrese Precio" name="precio" value="<?=$articulo->precio?>">
            <label for="password">Stock:</label> <input class="controls" type="text" required="true" placeholder = "Ingrese Stock" name="stock" value="<?=$articulo->stock?>">
            <button class="botons" type="submit">Modificar</button>
        </form>
    
</body>
</html>