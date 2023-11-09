<?php
require_once 'Model/sucursal.php';

class sucursalController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new sucursal();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/sucursal.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new sucursal();
        
        if(isset($_REQUEST['idsucursal'])){
            $alm = $this->model->getting($_REQUEST['idsucursal']);
        }
        
        require_once 'View/header.php';
        require_once 'View/sucursal-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new sucursal();
        
        $alm->idsucursal = $_REQUEST['idsucursal'];
        $alm->pais = $_REQUEST['pais'];
        $alm->estado = $_REQUEST['estado'];
        $alm->ciudad = $_REQUEST['FechaNacimiento'];
        $alm->domicilio = $_REQUEST['domicilio'];
        $alm->contacto = $_REQUEST['contacto'];
        $alm->correo = $_REQUEST['correo'];
        $alm->codigopostal = $_REQUEST['codigopostal'];

        // SI ID sucursal ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA sucursal, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->idsucursal > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->idsucursal > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idsucursal']);
        header('Location: index.php');
    }
}
