<?

include '../control/controlconexion.php';
//include '../controlador/codigos_php.php';


$id1 = $_GET['id'];



              $db = new controlconexion();
                                                $db->abrirBd("localhost","root","","producto_medico");
                                                $comandoSql = "SELECT * FROM productos WHERE id = '".$id1."'";
                                                $rs = $db->ejecutarSelect($comandoSql);
                                                $registros = $rs->fetch_all(MYSQLI_ASSOC);
                                                $db->cerrarBd();
                                                foreach($registros as $registro1) {
                                                      $id2 = $registro1['id'];
                                                      $id = intval($id2);
                                                      $nombre = $registro1['nombre'];
                                                      $laboratorio = $registro1['laboratorio'];
                                                      $fechaven = $registro1['fechaven'];
                                                      $cantidad = $registro1['cantidad'];
                                                      $fechaing = $registro1['fechaing'];
                                                      $muestra = $registro1['muestra'];
                                                                              


                                                                             
                                                                }
                                                                
                                                                echo $nombre;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Medicos</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    
</head>
<body class="body">
     <h1 class="title-home">Productos Médicos No Vencidos</h1>
     
     

    <h2 class="sub-title-home">Producto Médico Consultado</h2>
      <div class="home">
          <form class="hijo"  method="post"  action="../control/act-productos.php" enctype="multipart/form-data">



            <label for="fechaing" style="color: teal;font-weight: 500;">ID</label>
           <div><td> <input class="btn_empl input" type="text" name="id" required placeholder="id" id="id" value="<?= $id ?>" readonly="readonly" style="width:400px;height:20px;background-color:red;color:yellow;font-size:10pt; font-family:Verdana;text-align:center;"></td>
           </div>

           
                                                                                <input name="idd" id="idd" type="hidden" value="<?=$id?>" />
                                                                                                                  
            

            <label for="nombre" style="color: teal;font-weight: 500;">Nombre</label>
           <div><td> <input class="btn_empl input" type="text" name="nombre" required placeholder="nombre" id="nombre"  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Ingrese el nombre completo del producto"  value="<?= $nombre ?>" readonly="readonly"  style="width:400px;height:20px;background-color:red;color:yellow;font-size:10pt; font-family:Verdana;text-align:center;"></td>
           </div>
                                                  
               <label for="laboratorio" style="color: teal;font-weight: 500;">Laboratorio</label>
             <div><td> <input class="btn_empl input" type="text" id="laboratorio" name="laboratorio" placeholder="laboratorio" required="required"  value="<?= $laboratorio ?>" readonly="readonly"  style="width:400px;height:20px;background-color:red;color:yellow;font-size:10pt; font-family:Verdana;text-align:center;"> </td>
              </div>


           
                                                                    <label for="fechaven" style="color: teal;font-weight: 1000;">Fecha Vencimiento</label>
             <div> <td><input  type="date" id="fechaven" name="fechaven"  required="required" placeholder="Fecha Vencimiento" value="<?= $fechaven ?>"
       min="2018-01-01" max="20-12-31" required title="ejemplo: '2022-04-08'" autocomplete="off"></td>
              </div>
              
              <label for="cantidad" style="color: teal;font-weight: 500;">Cantidad</label>
              <div><td><input class="btn_empl input"  type="number" name="cantidad" id="cantidad" placeholder="cantidad" title="Ingrese la cantidad de del producto mèdico" required="required"  value="<?= $cantidad ?>" color="red"></td>
                </div>
                      <label for="fechaing" style="color: teal;font-weight: 500;">Fecha Ingreso</label>
             <div><td> <input class="btn_empl input" type="text" id="fechaing" name="fechaing" id="fechaing" readonly="readonly" placeholder="Fecha Ingreso" required value="<?= $fechaing ?>"  style="width:400px;height:20px;background-color:red;color:yellow;font-size:10pt; font-family:Verdana;text-align:center;"> </td> </div>
              <div>    
              
              <input class="botones" type="submit" value="Modificar Producto">
              <a class="botones" href="http://localhost/productos_medicos/">Volver Menù Principal</a>
              </div>
            </form> 
           
      </div>
    <!-- fin insert -->


   
    
</body>
<script src="https://kit.fontawesome.com/176c817b83.js" crossorigin="anonymous"></script>
<script src="../../js/main.js">
</script>
</html>