<?php $this->load->view('cabeceras/navVisitante'); ?>
<body id="body-agregar-articulo">  
    <section class="form-log">
        <form action="<?= base_url(); ?>ControladorVisitante/grabarClienteVisitante" method="POST"> 
             <h1>Registrarse como Cliente</h1>                
            <label for="name">Nombre de Usuario: </label> <input class="controls" type="text" name="usuario" required="true" placeholder = "Nombre de Usuario">
            <label for="password">Contraseña:</label> <input class="controls" type="password" name="pass" required="true" placeholder = "Contraseña">
            <button class="botons   " type="submit">Registrarse</button>
        </form>

    </section>

       
</body>
</html>