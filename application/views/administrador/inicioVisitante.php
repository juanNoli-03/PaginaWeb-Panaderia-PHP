
<?php $this->load->view('cabeceras/navVisitante'); ?>
<main>
  <div class = "container">
    <h1 class = "title"> Bienvenido! Has ingresado sesión como Visitante.</h1>
    <button class = "button"><a href="<?= base_url(); ?>ControladorVisitante/agregar">Registrarse</a></button>
    <button class = "button"><a href="<?= base_url(); ?>ControladorVisitante/cargarVistaArticulos">Ver Articulos</a></button>

  </div>
</main>

   