 <?

include '../control/controlconexion.php';
//include '../controlador/codigos_php.php';


$fechaing = $_POST['fechaing'];
$fechaactual = date("Y-m-d");



              $db = new controlconexion();
                                                $db->abrirBd("localhost","root","","producto_medico");
                                                $comandoSql = "SELECT * FROM productos WHERE fechaing = '".$fechaing."' and fechaven >= '".$fechaactual."'";
                                                $rs = $db->ejecutarSelect($comandoSql);
                                                $registros = $rs->fetch_all(MYSQLI_ASSOC);
                                                $db->cerrarBd();
                                                foreach($registros as $registro1) {
                                                      $id1 = $registro1['id'];
                                                      $id = intval($id1);
                                                      $nombre = $registro1['nombre'];
                                                      $laboratorio = $registro1['laboratorio'];
                                                      $fechaven = $registro1['fechaven'];
                                                      $cantidad = $registro1['cantidad'];
                                                      $fechaing = $registro1['fechaing'];
                                                      $muestra = $registro1['muestra'];
                                                                              


                                                                             
                                                                }
                                                                

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
     <h1 class="title-home">Productos Médicos por Fecha de Ingreso</h1>
     
     


    <h2 class="sub-title-home">Productos Médicos consultados</h2>
       <div class="table_re">
     <table class ="tabla_empleados">
     <thead>
     <tr>
     <th>ID</th>
     <th>NOMBRE</th>
     <th>LABORATORIO</th>
     <th>FECHA VENCIMIENTO</th>
     <th>CANTIDAD</th>
     <th>FECHA INGRESO</th>
     <th>editar</th>
     
     </tr>
     </thead>
     <?php foreach($registros as $registro) {?>
     <tr>
        
      <td><?php echo $registro["id"];  ?></td>
      <td><?php echo $registro["nombre"];  ?></td>
      <td><?php echo $registro["laboratorio"];  ?></td>
      <td><?php echo $registro["fechaven"];  ?></td>
      <td><?php echo $registro["cantidad"];  ?></td>
      <td><?php echo $registro["fechaing"];  ?></td>
      <td><a href="editarproductos.php?id=<?php echo $registro["id"];?>"><i class="fas fa-edit"></i></a></td>
     
     </tr>
     <?php }?>
     </table>

            <a class="botones" href="http://localhost/productos_medicos/">Volver Menù Principal</a>
     </div> 
    
</body>
<script src="https://kit.fontawesome.com/176c817b83.js" crossorigin="anonymous"></script>
<script src="../../js/main.js">
</script>
</html>