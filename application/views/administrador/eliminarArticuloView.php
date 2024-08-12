
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Eliminar Articulo</h5>
                <form method="post" action="<?= base_url() ?>ControladorArticulo/eliminar/<?=$id?>">
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="text" name="stock" placeholder="Stock" value="<?=$articulo->stock?>" class="form-control" id="stock">
                    </div>
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                </form>

            </div>
        </div>
    </div>
</div>
