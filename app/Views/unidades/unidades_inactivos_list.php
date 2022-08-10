<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">
                <?= esc($title); ?>
            </h3>
            <div>
                <p>
                    <a href="<?= site_url();?>unidades" class="btn btn-warning">Unidades</a>
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
                            <th>Activar</th>
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
                                    <a href="'.site_url().'unidades_eliminar/'.$unidad->id.'" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    </td>';
                            echo '<td> 
                                    <a href="'.site_url().'unidades_activar/'.$unidad->id.'" class="btn btn-secondary">
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
                