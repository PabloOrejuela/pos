<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">
                <?= esc($title); ?>
            </h3>
            <form action="<?= site_url(); ?>unidades_insertar" method="POST" autocomplete="off">
                <?= csrf_field(); ?>
                <div classs="form-group" id="form-datos">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="unidad" placeholder="Unidad" autofocus require>
                    </div>
                    <p id="error-message"><?= session('errors.unidad');?> </p>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Abreviatura</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre_corto" placeholder="Abreviatura" require>
                    </div>
                    <p id="error-message"><?= session('errors.nombre_corto');?> </p>
                    <a href="<?= site_url();?>/unidades" class="btn btn-primary" >Regresar</a>
                    <input type="submit" class="btn btn-success" value="Guardar" >
                </div>
            </form>
        </div>
    </main>
                
