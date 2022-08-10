<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">
                <?= esc($title); ?>
            </h3>
            <div>
                <p>
                    <a href="<?= site_url();?>categorias_agregar" class="btn btn-info">Agregar</a>
                    <a href="<?= site_url();?>categorias_inactivos" class="btn btn-warning">Inactivos</a>
                </p>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Categoria</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th>Desactivar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($categorias as $key => $categoria) {
                            echo '<tr>';
                            echo '<td>'.$categoria->id.'</td>';
                            echo '<td>'.$categoria->cat_nombre.'</td>';
                            echo '<td> 
                                    <a href="'.site_url().'categorias_editar/'.$categoria->id.'" class="btn btn-warning">
                                        <i class="fa-solid fa-file-pen"></i>
                                    </a>
                                    </td>';
                            echo '<td> 
                                    <a href="'.site_url().'categorias_eliminar/'.$categoria->id.'" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    </td>';
                            echo '<td> 
                                    <a href="'.site_url().'categorias_desactivar/'.$categoria->id.'" class="btn btn-secondary">
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
                
