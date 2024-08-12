
<?php $this->load->view('cabeceras/navCliente'); ?>

<section class="contenido-princ">
<h2>Lista de productos</h2>



<div id= "tabla_artic">
<table width="90%" align="center">
            <tr>
               <th>Artículo</th>
               <th>Descripción</th>
               <th>Precio</th>
               <th>Imagen</th>
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
                              <summary>Ver Imagen</summary>
                              <div class="details-info">
                              <img src="<?= base_url(); ?>multimedia/image/<?=$articulo->idArticulo?>.png" width="150px" height="100px" alt="imagen no encontrada" >
                              </div>
                         </details> 
                       </td>
                    </tr> 
               <?php 
               }
                ?>
        </table>

</div>

</body>
</html>