<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">
                <?= esc($title); ?>
            </h3>
            <form action="<?= site_url(); ?>categorias_actualizar" method="POST" autocomplete="off">
                <div classs="form-group" id="form-datos">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            d="exampleFormControlInput1" 
                            name="cat_nombre" 
                            placeholder="Unidad" 
                            value="<?= esc($categoria->cat_nombre); ?>" 
                            autofocus require>
                    </div>
                    <?= form_hidden('id', $categoria->id); ?> 
                    <a href="<?= site_url();?>/categorias" class="btn btn-primary" >Regresar</a>
                    <input type="submit" class="btn btn-success" value="Guardar" >
                </div>
            </form>
        </div>
    </main>
                
