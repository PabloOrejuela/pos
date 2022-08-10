<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">
                <?= esc($title); ?>
            </h3>
            <form action="<?= site_url(); ?>unidades_actualizar" method="POST" autocomplete="off">
                <div classs="form-group" id="form-datos">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            d="exampleFormControlInput1" 
                            name="unidad" 
                            placeholder="Unidad" 
                            value="<?= esc($unidad->unidad); ?>" 
                            autofocus require>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Abreviatura</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="exampleFormControlInput1" 
                            name="nombre_corto" 
                            placeholder="Abreviatura" 
                            value="<?= esc($unidad->nombre_corto); ?>" 
                            require>
                    </div>
                    <?= form_hidden('id', $unidad->id); ?> 
                    <a href="<?= site_url();?>/unidades" class="btn btn-primary" >Regresar</a>
                    <input type="submit" class="btn btn-success" value="Guardar" >
                </div>
            </form>
        </div>
    </main>
                
