<?php
class CLASE_AUTOMOVIL
{

//Seccion de atributos

private $PLACA;
private $MARCA;
private $MODELO;
private $VERSION;
private $TIPO;
private $AÑO;
private $COLOR;

//Seccion de metodos  

public function __construct($a,$b,$c,$d,$e,$f,$g) {
    $this ->PLACA = $a;
	  $this ->MARCA = $b;
 	  $this ->MODELO = $c;
 	  $this ->VERSION = $d;
 	  $this ->TIPO = $e;
 	  $this ->AÑO = $f;
 	  $this ->COLOR = $g;
    }

public function set_placa($x){
		$this->PLACA = $x;
		}
public function set_marca($x){
		$this->MARCA = $x;
		}
public function set_modelo($x){
		$this->MODELO = $x;
		}
public function set_version($x){
		$this->VERSION= $x;
		}
public function set_tipo($x){
		$this->TIPO = $x;
		}
public function set_año($x){
		$this->AÑO = $x;
		}
public function set_color($x){
		$this->COLOR = $x;
		}

public function get_placa(){
		return $this->PLACA;
		}
public function get_marca(){
		return $this->MARCA;
		}
public function get_modelo(){
		return $this->MODELO;
		}
public function get_version(){
		return $this->VERSION;
		}
public function get_tipo(){
		return $this->TIPO;
		}
public function get_año(){
		return $this->AÑO;
		}
public function get_color(){
		return $this->COLOR;
		}

public function INSERTAR() {
  $bd=new PDO('mysql:host = 127.0.0.1;dbname=taller_mecanico',      "root", "");
  
$insertar = "INSERT INTO AUTOMOVIL(id_placa,año,color,modelo,tipo,version,marca) VALUES ('$PLACA','$AÑO','$COLOR','$MODELO','$TIPO','$VERSION','$MARCA')";
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