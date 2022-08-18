<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">
                <?= esc($title); ?>
            </h3>
            <form action="<?= site_url(); ?>categorias_insertar" method="POST" autocomplete="off">
                <?= csrf_field(); ?>
                <div classs="form-group" id="form-datos">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Categoria</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="cat_nombre" placeholder="Categoría" autofocus required>
                    </div>
                    <p id="error-message"><?= session('errors.cat_nombre');?> </p>
                    <a href="<?= site_url();?>/categorias" class="btn btn-primary" >Regresar</a>
                    <input type="submit" class="btn btn-success" value="Guardar" >
                </div>
            </form>
        </div>
    </main>
                
