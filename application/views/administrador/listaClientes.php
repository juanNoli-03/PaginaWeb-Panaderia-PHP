
<?php $this->load->view('cabeceras/navAdmin'); ?>

<div class="buttonAgregar">
     <button><a href="<?=base_url (); ?>/ControladorCliente/agregar">Agregar Clientes</a></button>
</div>

<section class="contenido-princ">
<h2>Lista de Clientes</h2>

<div id= "tabla_artic">
<table border="1" width="90%" align="center">
       <tr>
          <th>Usuario</th>
          <th>Contraseña</th>
          <th>Operaciones</th>
       </tr>
       <?php 
       foreach ($clien->result() as $cliente){?>
          
              <tr>
                   <td>
                    <b><?= $cliente->usuario; ?></b> 
                  </td>                         
                  <td>
                    <b><?= $cliente->pass; ?></b>
                  </td>
                  
                  <td><a href="<?=base_url (); ?>ControladorCliente/eliminar/<?php echo($cliente->idCliente)?>">Eliminar</a> / 
                  <a href="<?=base_url (); ?>ControladorCliente/modificar/<?php echo ($cliente->idCliente)?>">Modificar</a></td>
               </tr> 
          <?php 
          }
           ?>
   </table>

</div>

</body>
</html>