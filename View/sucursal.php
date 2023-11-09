<h1 class="page-header">Sucursal</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=sucursal&a=Crud">Agregar sucursales</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >ID</th>
            <th >pais</th>
            <th>estado</th>
            <th>ciudad</th>
            <th >domicilio</th>
            <th >contacto</th>
            <th >Codigo Postal</th>
            <th >correo</th>
            
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idsucursal; ?></td>
            <td><?php echo $r->pais; ?></td>
            <td><?php echo $r->estado; ?></td>
            <td><?php echo $r->ciudad; ?></td>
            <td><?php echo $r->domicilio; ?></td>
            <td><?php echo $r->contacto; ?></td>
            <td><?php echo $r->codigopostal; ?></td>
            <td><?php echo $r->correo; ?></td>
            

            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=sucursal&a=Crud&idsucursal=<?php echo $r->idsucursal; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=sucursal&a=Eliminar&idsucursal=<?php echo $r->idsucursal; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
