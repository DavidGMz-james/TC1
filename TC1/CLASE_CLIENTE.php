<?php
class CLASE_CLIENTE
{
//Seccion de atributos
private $RFC;
private $NOMBRE;
private $EMAIL;
private $DOMICILIO;
private $TELEFONO;
//seccion de metodos  

public function __construct($x,$y,$z,$e,$s) {
       $this ->RFC = $x;
	  $this ->NOMBRE= $y;
 	  $this ->EMAIL = $z;
 	  $this ->DOMICILIO = $e;
 	  $this ->TELEFONO = $s;
    }
public function set_rfc($x){
$this->RFC = $x;
}
public function set_nombre($x){
$this->NOMBRE = $x;
}
public function set_email($x){
$this->EMAIL = $x;
}
public function set_domicilio($x){
$this->DOMICILIO = $x;
}
public function set_telefono($x){
$this->TELEFONO = $x;
}

public function get_rfc(){
return $this->RFC;
}
public function get_nombre(){
return $this->NOMBRE;
}
public function get_domicilio(){
return $this->DOMICILIO;
}
public function get_telefono(){
return $this->TELEFONO;
}
public function get_email(){
return $this->EMAIL;
}

public function INSERTAR() {
  $bd=new PDO('mysql:host=127.0.0.1;dbname=taller_mecanico',"root", "");
  
$insertar = "INSERT INTO CLIENTE(id_cliente,rfc,nombre,correo,direccion,telefono) VALUES ('','$RFC','$NOMBRE','$EMAIL','$DIRECCION','$TELEFONO')";
$resultado=mysqli_query($bd, $insertar);

if (!$resultado) {
	echo "Error al Agregar un nuevo Producto";

}else{
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