<?php
include '../control/controlproductos.php';
include '../modelo/productos.php';
include '../control/controlconexion.php';
//include 'ingresoproductos.php';




$Id =NULL;
$nombre = $_POST['nombre'];
$laboratorio = $_POST['laboratorio'];
$fechaven = $_POST['fechaven'];
$cantidad1 = $_POST['cantidad'];
$cantidad = intval($cantidad1);
$fechaing = $_POST['fechaing'];
$muestra = 0;





///

$db = new controlconexion();
$db->abrirBd("localhost","root","","producto_medico");
$comandoSql = "SELECT * FROM productos WHERE nombre = '".$nombre."' and fechaing = '".$fechaing."'";
//$consult="SELECT * FROM productos WHERE nombre = '".$nombre."'";
$rs_id = $db->ejecutarSelect($comandoSql);
//var_dump($rs_id);
//rs_id1 = $db->ejecutarSelect($consult);
 $registros = $rs_id->fetch_all(MYSQLI_ASSOC);
//$registros = $rs_id->fetch_array(MYSQLI_BOTH);
//$registros1 = $rs_id1->fetch_array(MYSQLI_BOTH);
//$consult=;
// $registro = $recordSet->fetch_array(MYSQLI_BOTH);
$db->cerrarBd();
//$idc = $registros1["id"];
if($registros) {

  echo 'Ya se encuentra registrado este producto, intente con otro nombre';


  ?>

  <script type="text/javascript">

         alert('Ya se encuentra registrado este producto, intente con otro nombre'):
       
                           
                       
</script>

<script type="text/javascript">

          parent.location.href=('../vista/ingresoproductos.php');
                           
                       
</script>

<?php  
} else{


$objProductos = new productos($Id, $nombre, $laboratorio, $fechaven, $cantidad, $fechaing, $muestra);
$objControlProductos = new controlproductos($objProductos);
//var_dump($objControlProductos);

$r = $objControlProductos->guardar();



//echo'OK';



?>


<script type="text/javascript">

 

                 var agree = confirm('Producto registrado con èxito, desea registrar otro producto?.');


                  if (agree) 
                    {

                             
                               

                              parent.location.href=('../vista/ingresoproductos.php');

                              $('#loading').hide();
                               $('.content-page').show();
                               
                                




                                
                          


                    } else{ 

                        var agree = confirm('Desea vender un producto?.');


                  if (agree) 
                    {

                              parent.location.href=('../vista/venderproductos.php');
                                 $('#loading').hide();
                               $('.content-page').show();

                    }else{


                        parent.location.href=('../index.html');

                              $('#loading').hide();
                               $('.content-page').show();


                    }}

                  
  


                           
                       
</script>

<?

//$URL            = $_SESSION['anterior-url']; 




} 

?>






