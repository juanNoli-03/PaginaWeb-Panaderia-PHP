
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Modificar Cliente</h5>
                <form method="post" action="<?= base_url() ?>ControladorCliente/modificar/<?=$id?>">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Cliente</label>
                        <input type="text" name="nombre" placeholder="Nombre" value="<?=$cliente->nombre?>" class="form-control" id="nombre">

                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" name="apellido" id="apellido" value="<?=$cliente->apellido?>" placeholder="Apellido">

                    </div>


                    <button type="submit" class="btn btn-primary">Modificar</button>
                </form>

            </div>
        </div>
    </div>
</div>
<?php //$this->load->view('principal/footer'); ?>