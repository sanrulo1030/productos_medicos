<?php

include '../control/controlconexion.php';
include '../modelo/productos.php';
include '../control/controlproductos.php'; 


$fechaactual = date("Y-m-d");

/* Consultar productos */
$db = new controlconexion();
$db->abrirBd("localhost","root","","producto_medico");
$comandoSql = "SELECT * FROM productos WHERE fechaven >= '".$fechaactual."'";
$rs = $db->ejecutarSelect($comandoSql);
$registros = $rs->fetch_all(MYSQLI_ASSOC);
$db->cerrarBd();






?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Productos Medicos</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    
</head>
<body class="body">
     <h1 class="title-home">Consultar Productos Médicos</h1>
      
     <!-- Inicio insert -->

    
      <div class="home">
          <form class="hijo"  method="post"  action="../vista/modificarproductos.php" enctype="multipart/form-data">
            

          <label for="fechaing" style="color: teal;font-weight: 1000;">Fecha Ingreso</label>
             <div> <td><input type="date"
 min="2018-01-01" max="20-12-31" id="fechaing" name="fechaing" id="fechaing" required="required" placeholder="Fecha Ingreso" required title="ejemplo: 'AAA-MM-DD'" autocomplete="off"></td>
              </div>
                                                             
              <input class="botones"  type="reset" value="Limpiar">
              <input class="botones" type="submit" value="Consultar Producto">
              <a class="botones" href="http://localhost/productos_medicos/">Volver al Menù Principal</a>
              </div>
            </form> 
           
      </div>
       <!-- fin insert -->

<h2 class="sub-title-home">Productos Médicos NO Vencidos</h2>
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
     <th>eliminar</th>
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