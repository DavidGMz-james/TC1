<?php
class CLASE_ESTADOS
{
//Seccion de atributos

private $DESC_INT=array();
private $DESC_EXT=array();
private $INTERMITENTES=array();
private $SI_TIENE=array();
private $NO_TIENE=array();
private $NOTAS_INT=array();
private $NOTAS_EXT=array();
private $DESC_LLANTAS=array();
private $NUEVO_EDO=array();
private $MEDIA_EDO=array();
private $TAPA=array();
private $BUENA=array();
private $REGULAR=array();
private $MALA=array();
private $CUARTOVIDA=array();
private $LISA=array();

//seccion de metodos  

public function __construct($a=array(),$b=array(),$c=array(),$d=array(),$e=array(),$f=array(),$g=array(),$h=array(),$i=array(),$j=array(),$k=array(),$l=array(),$m=array(),$n=array(),$o=array(),$p=array()) {
      $this ->RFC = $x;
$this -> DESC_INT=$a;
$this -> DESC_EXT=$b;
$this -> INTERMITENTES=$c;
$this -> SI_TIENE=$d;
$this -> NO_TIENE=$e;
$this -> NOTAS_INT=$f;
$this -> NOTAS_EXT=$g;
$this -> DESC_LLANTAS=$h;
$this -> NUEVO_EDO=$i;
$this -> MEDIA_EDO=$j;
$this -> TAPA=$k;
$this -> BUENA=$l;
$this -> REGULAR=$m;
$this -> MALA=$n;
$this -> CUARTOVIDA=$o;
$this -> LISA=$p;
    }
public function set_desc_int($a=array()){
$this->DESC_INT = $a;
}
public function set_desc_ext($b=array()){
$this->DESC_EXT = $b;
}
public function set_intermitentes($a=array()){
$this->INTERMITENTES = $a;
}
public function set_si_tiene($b=array()){
$this->SI_TIENE = $b;
}
public function set_no_tiene($a=array()){
$this->NO_TIENE = $a;
}
public function set_notas_int($b=array()){
$this->NOTAS_INT = $b;
}
public function set_notas_ext($a=array()){
$this->NOTAS_EXT = $a;
}
public function set_desc_llantas($b=array()){
$this->DESC_LLANTAS = $b;
}
public function set_nuevo_edo($a=array()){
$this->NUEVO_EDO = $a;
}
public function set_media_edo($b=array()){
$this->MEDIA_EDO = $b;
}
public function set_tapa($a=array()){
$this->TAPA = $a;
}
public function set_buena($b=array()){
$this->BUENA = $b;
}
public function set_regular($a=array()){
$this->REGULAR = $a;
}
public function set_mala($b=array()){
$this->MALA = $b;
}
public function set_cuartovida($a=array()){
$this->CUARTOVIDA = $a;
}
public function set_desc_lisa($b=array()){
$this->LISA = $b;
}


public function get_desc_int(){
return $this->DESC_INT;
}
public function get_desc_ext(){
return $this->DESC_EXT;
}
public function get_intermitentes(){
return $this->INTERMITENTES;
}
public function get_si_tiene(){
return $this->SI_TIENE;
}
public function get_no_tiene(){
return $this->NO_TIENE;
}
public function get_notas_int(){
return $this->NOTAS_INT;
}
public function get_notas_ext(){
return $this->NOTAS_EXT;
}
public function get_desc_llantas(){
$this->DESC_LLANTAS;
}
public function get_nuevo_edo(){
return $this->NUEVO_EDO;
}
public function get_media_edo(){
return $this->MEDIA_EDO;
}
public function get_tapa(){
return $this->TAPA;
}
public function get_buena(){
return $this->BUENA;
}
public function get_regular(){
return $this->REGULAR ;
}
public function get_mala(){
return $this->MALA ;
}
public function set_cuartovida(){
return $this->CUARTOVIDA ;
}
public function get_desc_lisa(){
$this->LISA;
}


public function INSERTAR() {
  $bd=new PDO('mysql:host=127.0.0.1;dbname=posada3rositas',      "root", "");
  
$insertar = "INSERT INTO """""""() VALUES ('$RFC','$NOMBRE','$EMAIL','$DIRECCION','$TELEFONO')";
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