
<?php $this->load->view('cabeceras/navAdmin'); ?>
<main>
  <div class = "container">
    <h1 class = "title"> Felicidades! Accion realizada con exito!!</h1>
    <h3 class = "title">Que deseas hacer?</h3>
    <button class = "button"><a href="<?= base_url(); ?>ControladorAdmin/cargarVistaArticulos">Administrar Articulos</a></button>
    <button class = "button"><a href="<?= base_url(); ?>ControladorAdmin/cargarVistaClientes">Administrar Clientes</a></button>
  </div>
</main>

   