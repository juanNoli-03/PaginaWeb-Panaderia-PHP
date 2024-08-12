
     <?php $this->load->view('cabeceras/navAdmin'); ?>

     <div class="buttonAgregar">
          <button><a href="<?=base_url (); ?>/ControladorArticulo/agregar">Agregar Productos</a></button>
     </div>

    <section class="contenido-princ">
    <h2>Lista de Productos</h2>

<div id= "tabla_artic">
<table width="90%" align="center">
            <tr>
               <th>Artículo</th>
               <th>Descripción</th>
               <th>Precio</th>
               <th>Stock</th>
               <th>Imagen</th>
               <th>Operaciones</th>
            </tr>
            <?php //acá se pasó el array, artic estaba como parámetro
            foreach ($artic->result() as $articulo){?>
               
                   <tr>
                        <td>
                           <details close>
                                   <summary>Ver nombre articulo</summary>
                                   <div class="details-info">
                                        <b><?= $articulo->nombre; ?></b>
                                   </div>
                            </details> 
                       </td>                         
                       <td>
                         <details close>
                              <summary>Ver descripción</summary>
                              <div class="details-info">
                                   <b><?= $articulo->descripcion; ?></b>
                              </div>
                         </details> 
                       </td>
                       <td>
                         <details close>
                              <summary>Ver Precio</summary>
                              <div class="details-info">
                                   <b>$<?= $articulo->precio; ?></b>
                              </div>
                         </details> 
                       </td>
                       <td>
                         <details close>
                              <summary>Ver Stock</summary>
                              <div class="details-info">
                                   <b><?= $articulo->stock; ?></b>
                              </div>
                         </details> 
                       </td>

                       <td>
                         <details close>
                              <summary>Ver Imagen</summary>
                              <div class="details-info">
                              <img src="<?= base_url(); ?>multimedia/image/<?=$articulo->idArticulo?>.png" width="150px" height="100px" alt="imagen no encontrada" >
                              </div>
                         </details> 
                       </td>
                       
                       <td><a href="<?=base_url (); ?>ControladorArticulo/eliminar/<?php echo($articulo->idArticulo)?>">Eliminar</a> / 
                       <a href="<?=base_url (); ?>ControladorArticulo/modificar/<?php echo ($articulo->idArticulo)?>">Modificar</a></td>
                    </tr> 
               <?php 
               }
                ?>
        </table>

</div>

</body>
</html>