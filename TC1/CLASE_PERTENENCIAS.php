<?php
class CLASE_PERTENENCIAS
{

//Seccion de atributos

private $DESCRIPCION = array();
private $Si_Tiene = array();
private $No_Tiene = array();
private $Notas = array();

//Seccion de metodos  

public function __construct($a,$b,$c,$d = array()) {
    $this ->DESCRIPCION = $a;
	  $this ->Si_Tiene = $b;
 	  $this ->No_Tiene = $c;
 	  $this ->Notas = $d;
    }

public function set_descripcion($x){
		$this->DESCRIPCION = $x;
		}
public function set_sitiene($x){
		$this->Si_Tiene = $x;
		}
public function set_notiene($x){
		$this->No_Tiene = $x;
		}
public function set_notas($x){
		$this->Notas = $x;
		}

public function get_descripcion(){
		return $this->DESCRIPCION;
		}
public function get_sitiene(){
		return $this->Si_Tiene;
		}
public function get_notiene(){
		return $this->No_Tiene;
		}
public function get_notas(){
		return $this->Notas;
		}

public function INSERTAR() {
  $bd=new PDO('mysql:host = 127.0.0.1;dbname=posada3rositas',      "root", "");
  
$insertar = "INSERT INTO """""() VALUES ('$DESCRIPCION','$Si_Tiene','$No_Tiene','$Notas')";
$resultado=mysqli_query($bd, $insertar);

if (!$resultado) {
	echo "Error al Agregar un nuevo Producto";

} else{
	echo "\n Producto agregado";

}

mysqli_close($bd);
$resultado=null;
$insertar=null;
}


public function ejecucionscriptC() {

}


public function ejecucionscriptE (){


}

public function ejecucionscriptM(){

}

}

?>