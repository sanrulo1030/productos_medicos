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
    <title>Productos Medicos</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    
</head>
<body class="body">
     <h1 class="title-home">Productos Médicos No Vencidos</h1>
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
      <td><a href="editar_empleado.php?id=<?php echo $registro["id"];?>"><i class="fas fa-edit"></i></a></td>
     
     </tr>
     <?php }?>
     </table>
     </div>   
     <!-- Inicio insert -->

    <h2 class="sub-title-home">Ingresar Nuevos Producto Médico</h2>
      <div class="home">
          <form class="hijo"  method="post"  action="../control/add-productos.php" enctype="multipart/form-data">
            

            <label for="nombre">Nombre</label>
           <div><td> <input class="btn_empl input" type="text" name="nombre" required placeholder="nombre" id="nombre"  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Ingrese el nombre completo del producto" autocomplete="off"></td>
           </div>
                                                    <script>   

                                                                        var x = document.getElementById("nombre");
                                                                        x.addEventListener("blur", funcionBlur, true);

                                                                         function funcionBlur() {
                                                                         var nombre = document.getElementById("nombre");
                                                                         nombre.value = capitalize(nombre.value);
                                                                                                 }

                                                                             function capitalize(s){
                                                                       return s.toLowerCase().replace( /\b./g, function(a){ return a.toUpperCase(); } );
                                                                                                    }
                                                        
                                                        </script> 
               <label for="laboratorio">Laboratorio</label>
             <div><td> <input class="btn_empl input" type="text" id="laboratorio" name="laboratorio" placeholder="laboratorio" required="required" autocomplete="off"> </td>
              </div>


              <script>   

                                                                        var x = document.getElementById("laboratorio");
                                                                        x.addEventListener("blur", funcionBlur, true);

                                                                         function funcionBlur() {
                                                                         var laboratorio = document.getElementById("laboratorio");
                                                                         laboratorio.value = capitalize(laboratorio.value);
                                                                                                 }

                                                                             function capitalize(s){
                                                                       return s.toLowerCase().replace( /\b./g, function(a){ return a.toUpperCase(); } );
                                                                                                    }
                                                        
                                                        </script> 
                         <label for="fechaven" style="color: teal;font-weight: 1000;">Fecha Vencimiento</label>
             <div> <td><input  type="date" id="fechaven" name="fechaven"  required="required" placeholder="Fecha Vencimiento" 
              min="2018-01-01" max="20-12-31" required title="ejemplo: '2022-04-08'" autocomplete="off"></td>
              </div>
              <label for="cantidad">Cantidad</label>
              <div><td><input class="btn_empl input"  type="number" name="cantidad" id="cantidad" placeholder="cantidad" title="Ingrese la cantidad de del producto mèdico" required="required" autocomplete="off"></td>
                </div>
                      <label for="fechaing">Fecha Ingreso</label>
             <div><td> <input class="btn_empl input" type="text" id="fechaing" name="fechaing" id="fechaing" readonly="readonly" placeholder="Fecha Ingreso" required value="<?php echo date("Y-m-d");?>"> </td> </div>
              <div>    
              <input class="botones"  type="reset">
              <input class="botones" type="submit" value="Ingresar Producto">
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