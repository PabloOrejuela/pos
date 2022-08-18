<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">
                <?= esc($title); ?>
            </h3>
            <div>
                <p>
                    <a href="<?= site_url();?>unidades_agregar" class="btn btn-info">Agregar</a>
                    <a href="<?= site_url();?>unidades_inactivos" class="btn btn-warning">Inactivos</a>
                </p>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Unidad</th>
                            <th>Abreviatura</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th>Desactivar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($unidades as $key => $unidad) {
                            echo '<tr>';
                            echo '<td>'.$unidad->id.'</td>';
                            echo '<td>'.$unidad->unidad.'</td>';
                            echo '<td>'.$unidad->nombre_corto.'</td>';
                            echo '<td> 
                                    <a href="'.site_url().'unidades_editar/'.$unidad->id.'" class="btn btn-warning">
                                        <i class="fa-solid fa-file-pen"></i>
                                    </a>
                                    </td>';
                            echo '<td> 
                                    <a 
                                        href="#"
                                        data-href="'.site_url().'unidades_eliminar/'.$unidad->id.'" class="btn btn-danger"
                                        data-bs-toggle="modal" 
                                        data-bs-target="#modal-confirma"
                                        data-placement="top"
                                        title="Eliminar registro"
                                        class="btn btn-danger"
                                    >
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    </td>';
                            echo '<td> 
                                    <a 
                                        href="'.site_url().'unidades_desactivar/'.$unidad->id.'"   
                                    >
                                        <i class="fa-solid fa-bolt-slash"></i></i>
                                    </a>
                                    </td>';
                            echo '</tr>';
                        } 
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="modal-confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>¿Desea eliminar este registro?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger btn-ok">Aceptar</a>
                </div>
            </div>
        </div>
    </div>
                
