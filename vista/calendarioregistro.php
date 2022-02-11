<?php

include '../control/controlconexion.php';

//header('content-type: application/Json; charset=utf-8');
//header('Access-Control-Allow-Origin: *');


//include '../controlador/codigos_php.php';




              $db = new controlconexion();
                                                $db->abrirBd("localhost","root","","producto_medico");
                                                $comandoSql = "SELECT * FROM productos";
                                                $rs = $db->ejecutarSelect($comandoSql);
                                                $registros = $rs->fetch_all(MYSQLI_ASSOC);
                                                $db->cerrarBd();

                                                
                                               
                                                                              

$hola='Hello';



                                                                             
                                                                
?>

<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <link href='../css/main.css' rel='stylesheet' />
    <script src='../js/main1.js'></script>
    <script src='../js/jquery.min.js'></script>
    <script src='../js/moment.min.js'></script>
    
   <script type="text/javascript">



      document.addEventListener('DOMContentLoaded', function() {

       $('#exampleModal').hide();

        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          selectable: true,
          locale: "es",
          fixedWeekCount: true,
          headerToolbar: {
         
          left:'prev,next,today Miboton',
          center: 'title',
          //right: 'month, basickWeek, basicDay, scheduleWeek, scheduleDay'
          right: 'dayGridMonth, timeGridWeek, timeGridDay, fixedWeekCount'

        },
        customButtons: { 

          Miboton: {

            text:"Botón 1",
            click:function() {

              alert("Acción del botón");
               
             }
}



          },

          dateClick: function(info) {


            <?php

    foreach($registros as $registro1) {
                                                  
                                                                              


                                                                             
                                                                
                                              


?>
    alert('FECHA DE PRODUCTO: ' + info.dateStr +'             '+ 'PRODUCTOS MÉDICOS INGRESADOS:'+' '+'id:'+ '<?php echo $registro1['id'];?>'+'                                                                '+'NOMBRE:'+ '<?php echo $registro1['nombre'];?>'+'                                                                  '+'LABORATORIO:'+ '<?php echo $registro1['laboratorio'];?>'+'                                                                     '+'FECHA VENCIMIENTO:'+ '<?php echo $registro1['fechaven'];?>'+'                                                                       '+'CANTIDAD:'+ '<?php echo $registro1['cantidad'];?>'+'                                                                      '+'FECHA INGRESO:'+ '<?php echo $registro1['fechaing'];?>' );

    <?php

    }

    ?> 
    //alert('Resource ID: ' + info.);
    //$(this).css('backgroundColor','red');

    //$("exampleModal").remove();
    
   // $('#exampleModal').closest('#exampleModal');
    $('#exampleModal').modal();
  },

  events: [


  <?php

    foreach($registros as $registro2) {
                                                  
                                                                              


                                                                             
                                                                
                                              


?>


 {
      title  : '<?php echo $registro2['nombre'];?>',
      start  : '<?php echo $registro2['fechaing'];?>',
      end  : '<?php echo $registro2['fechaven'];?>',
      
    },



    <?php

    }

    ?>

   
  ]



        

        });




       // var calendar = new FullCalendar.Calendar(calendarEl, {

//  dateClick: function(info) {
  //  alert('Fecha: ' + info.dateStr);
   // alert('Resource ID: ' + info.resource.id);
 // }

//});
        calendar.render();

     
var calendar1 = new FullCalendar.Calendar(calendarEl,{


 events: [


 {
      title  : '<?php echo $registro2['id']; ?>',
      start  : '<?php echo $registro2['fechaven'];?>',
      end    : '<?php echo $registro2['fechaven'];?>'

    },

   <?php

    foreach($registros as $registro2) {
                                                  
                                                                              


                                                                             
                                                                
                                              


?>


    {
      id  : "<?php echo $registro2['id']; ?>",
      title  : "<?php echo $registro2['nombre'];?>",
      laboratorio  : "<?php echo $registro2['laboratorio']; ?>",
      end  : "<?php echo $registro2['fechaven'];?>",
      cantidad  : "<?php echo $registro2['cantidad'];?>",
      star  : "<?php echo $registro2['fechaing'];?>",
      muestra  : "<?php echo $registro2['muestra'];?>"
    },


<?php

    }

    ?>
   
  ]

      });
});


  


    </script>          


        
   







   

    




  


      <link rel="stylesheet" href="../css/style.css">


    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.css">

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/locales-all.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>




    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Medicos</title>

  
  </head>
   <body>





     <h1 class="title-home" align="center">Calendario Productos Médicos</h1>


     <div class="table_re" align="center" style="color: teal;font-weight: 800;"> 


     
     

        <div class="col-md-8 offset-md-2 "> 
       <div id="calendar" align="center"> </div>
       </div> 
  
          <a class="botones" href="http://localhost/productos_medicos/">Volver Menù Principal</a>

   
     </div> 


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Agregar</button>
        <button type="button" class="btn btn-succes">Modificar</button>
        <button type="button" class="btn btn-danger">Borrar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

  


  </body>
</html>