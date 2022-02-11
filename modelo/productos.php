<?php  


	
	class productos
	{ 
        var $ID;
        var $NOMBRE;
		var $LABORATORIO;
		var $FECHAVEN;
		var $CANTIDAD;
        var $FECHAING;
        var $MUESTRA;
  

		function __construct($ID,$NOMBRE,$LABORATORIO,$FECHAVEN,$CANTIDAD,$FECHAING,$MUESTRA)
		{
           $this->ID=$ID;
           $this->NOMBRE=$NOMBRE;
           $this->LABORATORIO=$LABORATORIO;
           $this->FECHAVEN=$FECHAVEN;
           $this->CANTIDAD=$CANTIDAD;
           $this->FECHAING=$FECHAING;
		   $this->MUESTRA=$MUESTRA;
		}
		function setID($ID){
			$this->ID=$ID;
		}
		function getID() {
			return $this->ID;	
		}
		function setNOMBRE($NOMBRE){
			$this->NOMBRE=$NOMBRE;
		}
		function getNOMBRE() {
			return $this->NOMBRE;	
		}
        function setLABORATORIO($LABORATORIO){
			$this->LABORATORIO=$LABORATORIO;
		}
		function getLABORATORIO(){
			return $this->LABORATORIO;
		}
		function setFECHAVEN($FECHAVEN){
			$this->FECHAVEN=$FECHAVEN;
		}
		function getFECHAVEN(){
			return $this->FECHAVEN;
		}
		function setCANTIDAD($CANTIDAD){
			$this->CANTIDAD=$CANTIDAD;
		}
		function getCANTIDAD(){
			return $this->CANTIDAD;
		}
     
        function setFECHAING($FECHAING){
			$this->FECHAING=$FECHAING;
		}
		function getFECHAING(){
			return $this->FECHAING;
		}
		function setMUESTRA($MUESTRA){
			$this->MUESTRA=$MUESTRA;
		}
		function getMUESTRA(){
			return $this->MUESTRA;
		}
		

        }

        ?>