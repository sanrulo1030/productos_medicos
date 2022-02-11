<?


include("../control/controlproductos.php");
include("../control/controlconexion.php");
include("../modelo/productos.php");




            $IdE                =   htmlspecialchars($_REQUEST["idd"],ENT_QUOTES,'UTF-8');
            $id= intval($IdE);
            $NombreE               =   htmlspecialchars($_REQUEST["nombre"],ENT_QUOTES,'UTF-8');
            $LaboratorioE            =   htmlspecialchars($_REQUEST["laboratorio"],ENT_QUOTES,'UTF-8');
            $FechavenE               =   htmlspecialchars($_REQUEST["fechaven"],ENT_QUOTES,'UTF-8');
            $CantidadE                =   htmlspecialchars($_REQUEST["cantidad"],ENT_QUOTES,'UTF-8');
            $FechaingE          =   htmlspecialchars($_REQUEST["fechaing"],ENT_QUOTES,'UTF-8');
            $MuestraE=0;

$objProductos = new productos($id, $NombreE, $LaboratorioE, $FechavenE, $CantidadE, $FechaingE, $MuestraE);
$objControlProductos = new controlproductos($objProductos);
//var_dump($objProductos);
$r = $objControlProductos->modificar();

if($r){

  ?>
<script type="text/javascript">

 

                 var agree = confirm('Guardado con èxito, desea registrar otro producto?.');


                  if (agree) 
                    {

                             
                               

                              parent.location.href=('../vista/ingresoproductos.php');

                              $('#loading').hide();
                               $('.content-page').show();
                               
                                




                                
                          


                    } else{ 

                        var agree = confirm('Desea consultar otra fecha?.');


                  if (agree) 
                    {

                              parent.location.href=('../vista/consultaproductos.php');
                                 $('#loading').hide();
                               $('.content-page').show();

                    }else{


                        parent.location.href=('../index.html');

                              $('#loading').hide();
                               $('.content-page').show();


                    }}

                  
  


                           
                       
</script>


<?
  }

?>


