<?php
class sucursal
{
	private $pdo;
    
    public $idsucursal;
    public $pais;
    public $estado;
    public $ciudad;
    public $domicilio;
    public $contacto;
	public $correo;
	public $codigopostal;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM sucursal");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($idsucursal)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM sucursal WHERE idsucursal = ?");
			          

			$stm->execute(array($idsucursal));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idsucursal)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM sucursal WHERE idsucursal = ?");			          

			$stm->execute(array($idsucursal));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE sucursal SET 
						pais          = ?, 
						estado        = ?,
                        ciudad       = ?,
						domicilio            = ?, 
						contacto = ?,
						correo = ?,
						codigopostal = ?
				    WHERE idsucursal = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->pais, 
                        $data->estado,
                        $data->ciudad,
                        $data->domicilio,
                        $data->contacto,
						$data->correo,
						$data->codigopostal,
                        $data->idsucursal
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `sucursal` (pais,estado,ciudad,domicilio,contacto,correo,codigopostal) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->pais, 
                    $data->estado,
                    $data->ciudad,
                    $data->domicilio,
                    $data->contacto,
					$data->correo,
					$data->codigopostal                 
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
