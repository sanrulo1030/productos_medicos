.l.<?php
//include  '../../config/congif.php';
/**
 * -Para llamar a un metodo primero hay que instanciar la clase, es decir crear un objeto de la clase
   -En PHP $nombreObjeto = new nombreClase(Argumentos del constructor)
   -Para llamar un metodo se escribe $nobreObjeto->nombreMetodo(Argumentos)
 */
class controlproductos
{
	var $objProductos;

	function __construct($objProductos)
	{
		$this->objProductos=$objProductos;
	}

	function guardar()
	{       
        $ID=$this->objProductos->getID();
        $NOMBRE=$this->objProductos->getNOMBRE();
        $LABORATORIO=$this->objProductos->getLABORATORIO();
        $FECHAVEN=$this->objProductos->getFECHAVEN();
        $CANTIDAD=$this->objProductos->getCANTIDAD();
        $FECHAING=$this->objProductos->getFECHAING();
        $MUESTRA=$this->objProductos->getMUESTRA();
   

		//$objControlConexion = new controlconexion();
		$db= new controlconexion(); //eror
		$db->abrirBd("localhost","root","","producto_medico");
		//var_dump($this->objEmpleado->getIDEMPLEADO());
		//$comandoSql = "insert into empleado values('".$IDEMPLEADO."','".$NOMBRE."','".$FOTO."','".$HOJAVIDA."','".$TELEFONO."','".$EMAIL."','".$DIRECCION."',".$X.",".$Y.",'".$fkEMPLE_JEFE."','".$fkAREA."','".$PASSWORD."')";
		//$comandoSql = "INSERT INTO empleado(IDEMPLEADO,NOMBRE,FOTO,HOJAVIDA,TELEFONO,EMAIL,DIRECCION,X,Y,fkEMPLE_JEFE,fkAREA,PASSWORD) VALUES('".$IDEMPLEADO."','".$NOMBRE."','".$FOTO."','".$HOJAVIDA."','".$TELEFONO."','".$EMAIL."','".$DIRECCION."','".$X."','".$Y."','".$fkEMPLE_JEFE."','".$fkAREA."','".$PASSWORD."')";
		$comandoSql = "insert into productos values(NULL,'".$NOMBRE."','".$LABORATORIO."','".$FECHAVEN."',".$CANTIDAD.",'".$FECHAING."',".$MUESTRA.")";
		//$objControlConexion->ejecutarComandoSql($comandoSql);
		
		if ( $db->ejecutarComandoSql($comandoSql) )
		{
			$mData = true;

		}
		else {
			$mData = false;	
		}
		$db->cerrarBd();
		var_dump($mData);
		return $mData; 
	}

	
	function modificar()
	{
	 $ID=$this->objProductos->getID();
        $NOMBRE=$this->objProductos->getNOMBRE();
        $LABORATORIO=$this->objProductos->getLABORATORIO();
        $FECHAVEN=$this->objProductos->getFECHAVEN();
        $CANTIDAD=$this->objProductos->getCANTIDAD();
        $FECHAING=$this->objProductos->getFECHAING();
        $MUESTRA=$this->objProductos->getMUESTRA();
   
  

		$objControlConexion = new ControlConexion();
		$objControlConexion->abrirBd("localhost","root","","producto_medico");
		$comandoSql = "update productos set nombre = '".$NOMBRE."', laboratorio = '".$LABORATORIO."', fechaven = '".$FECHAVEN."', cantidad = '".$CANTIDAD."', fechaing = '".$FECHAING."', muestra = '".$MUESTRA."'  where id = '".$ID."'";
		//var_dump($comandoSql);
		//$objControlConexion->ejecutarComandoSql($comandoSql);
		if ( $objControlConexion->ejecutarComandoSql($comandoSql) )
		{
			$mData = true;
		}
		else {
			$mData = false;	
		}
		$objControlConexion->cerrarBd();
		return $mData; 
	}

	
      
}

	
?>