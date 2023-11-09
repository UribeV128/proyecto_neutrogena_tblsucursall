<h1 class="page-header">
    <?php echo $alm->idsucursal != null ? $alm->pais : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=sucursal">Sucursales</a></li>
  <li class="active"><?php echo $alm->idsucursal != null ? $alm->pais : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=sucursal&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idsucursal" value="<?php echo $alm->idsucursal; ?>" />
    
    <div class="form-group">
        <label>Pais</label>
        <input type="text" name="pais" value="<?php echo $alm->pais; ?>" class="form-control" placeholder="Ingrese el pais" data-validacion-tipo="requerido|nombres" />
    </div>
    
    <div class="form-group">
        <label>Estado</label>
        <input type="text" name="estado" value="<?php echo $alm->estado; ?>" class="form-control" placeholder="Ingrese el estado" data-validacion-tipo="requerido|estado" />
    </div>
    
    <div class="form-group">
        <label>Ciudad</label>
        <input type="text" name="FechaNacimiento" value="<?php echo $alm->ciudad; ?>" class="form-control" placeholder="Ingrese la ciudad" data-validacion-tipo="requerido|ciudad" />
    </div>
    
    <div class="form-group">
        <label>Domicilio</label>
        <input type="text" name="domicilio" value="<?php echo $alm->domicilio; ?>" class="form-control" placeholder="Ingrese el domicilio" data-validacion-tipo="requerido|domicilio" />
    </div>
    
    <div class="form-group">
        <label>Contacto</label>
        <input type="text" name="contacto" value="<?php echo $alm->contacto; ?>" class="form-control" placeholder="Ingrese el numero de contacto" data-validacion-tipo="requerido|contacto" />
    </div>

    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="correo" value="<?php echo $alm->correo; ?>" class="form-control" placeholder="Ingrese el correo electrónico" data-validacion-tipo="requerido|correo" />
    </div>

    <div class="form-group">
        <label>Codigo Postal</label>
        <input type="text" name="codigopostal" value="<?php echo $alm->codigopostal; ?>" class="form-control" placeholder="Ingrese el codigo postal" data-validacion-tipo="requerido|codigopostal" />
    </div>

    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
