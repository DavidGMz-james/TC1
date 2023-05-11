<?php
class index
{

private $interfaz;
// Atriburos Cliente/Auto

private $rfc; private $nom; private $email; private $domicilio; private $tel; private $placas; private $marca; private $modelo; private $version; private $color; private $tipo; private $year; 

// Atributos cajas de texto Edo. del auto Interno

private $vestiduras; private $tapetes;
private $estereo_pantalla; private $calefaccion; private $retrovisor; private $cinturon; private $ventanillas; private $tablero; private $manijasseguros;
private $luzservicio; private $puertadd; private $puertadi; private $puertatd;
private $puertati; private $Bvest; private $Rvest; private $Mvest; private $Svest;
private $Nvest; private $Notevest; private $Btap; private $Rtap; private $Mtap;
private $Stap; private $Ntap; private $Notetap; private $Bep; private $Rep;
private $Mep; private $Sep; private $Nep; private $Noteep; private $Bcal;
private $Rcal; private $Mcal; private $Scal; private $Ncal; private $Notecal;
private $Bret; private $Rret; private $Mret; private $Sret; private $Nret;
private $Noteret; private $Bcin; private $Rcin; private $Mcin; private $Scin;
private $Ncin; private $Notecin; private $Bven; private $Rven; private $Mven;
private $Sven; private $Nven; private $Noteven; private $Btab; private $Rtab;
private $Mtab; private $Stab; private $Ntab; private $Notetab; private $Bmanseg; private $Rmanseg; private $Mmanseg; private $Smanseg; private $Nmanseg;
private $Notemanseg; private $Bluz; private $Rluz; private $Mluz; private $Sluz;
private $Nluz; private $Noteluz; private $Bpdd; private $Rpdd; private $Mpdd;
private $Spdd; private $Npdd; private $Notepdd; private $Bpdi; private $Rpdi;
private $Mpdi; private $Spdi; private $Npdi; private $Notepdi; private $Bptd;private $Rptd; private $Mptd; private $Sptd; private $Nptd; private $Noteptd;
private $Bpti; private $Rpti; private $Mpti; private $Spti; private $Npti;
private $Notepti;

// Atributos cajas de texto Edo. del auto Externo

private $golpes; private $pintura; private $cofre; private $cajuela; private $tapong; private $techo; private $defensa; private $alarma; private $limpiaparabrisas; private $aspersores; private $parabrisas; private $medallon;
private $espejold; private $espejoli; private $farosdd; private $farosdi; private $indd; private $indi; private $inti; private $intd; private $rinesd; private $rinest; private $tapondd; private $tapondi; private $tapontd; private $taponti;

private $checkboxgolpeS; private $checkboxpinturaS; private $checkboxcofreS;
private $checkboxcajuelaS; private $checkboxtapongS; private $checkboxtechoS;
private $checkboxdefensaS; private $checkboxalarmaS;
private $checkboxlimpiapS; private $checkboxaspersoresS; private $checkboxparabrisasS; private $checkboxmedallonS; private $checkboxespejoldS;
private $checkboxespejoliS; private $checkboxfarosddS; private $checkboxfarosdiS; private $checkboxinddS; private $checkboxindiS; private $checkboxintdS;
private $checkboxintiS; private $checkboxrinesdS; private $checkboxrinestS;
private $checkboxtoponddS; private $checkboxtapondiS; private $checkboxtapontdS;
private $checkboxtapontiS; private $checkboxgolpeN; private $checkboxpinturaN;
private $checkboxcofreN; private $checkboxcajuelaN; private $checkboxtapongN;
private $checkboxtechoN; private $checkboxdefensaN; private $checkboxalarmaN;
private $checkboxlimpiapN; private $checkboxaspersoresN; private $checkboxparabrisasN; private $checkboxmedallonN; private $checkboxespejoldN;
private $checkboxespejoliN; private $checkboxfarosddN; private $checkboxfarosdiN;
private $checkboxinddN; private $checkboxindiN; private $checkboxintdN;
private $checkboxintiN; private $checkboxrinesdN; private $checkboxrinestN;
private $checkboxtoponddN; private $checkboxtapondiN; private $checkboxtapontdN;
private $checkboxtapontiN; 

private $notagolpe; private $notapintura; private $notacofre; private $notacajuela; private $notatapong; private $notatecho; private $notadefensa; private $notaalarma; private $notalimpiap; private $notaaspersores; private $notaparabrisas; private $notamedallon; private $notaespejold; private $notaespejoli; private $notafarosdd; private $notafarosdi; private $notaindd; private $notaindi; private $notainti; private $notaintd; private $notarinesd; private $notarinest; private $notatapondd; private $notatapondi; private $notatapontd; private $notataponti;

// Atributos pertenencias

private $gato; private $llantar; private $reflec; private $cajaH; private $extintor; private $docs; private $cables; private $maneral; private $llaveC; private $birlo; private $dados; private $chbgatoS; private $chbllantarS; private $chbreflecS; private $chbcajaHS; private $chbextintorS; private $chbdocsS; private $chbcablesS; private $chbmaneralS; private $chbllaveCS; private $chbbirloS; private $chbdadosS; private $chbgatoN; private $chbllantarN; private $chbreflecN; private $chbcajaHN; private $chbextintorN; private $chbdocsN; private $chbcablesN; private $chbmaneralN; private $chbllaveCN; private $chbbirloN; private $chbdadosN; private $notagato; private $notallantar; private $notareflec; private $notacajaH; private $notaextintor; private $notadocs; private $notacables; private $notamaneral; private $notallaveC; private $notabirlo; private $notadados;  

// Atributos Edo. Llantas

private $dd; private $di; private $td; private $ti; private $refraccion; private $ddN; private $diN; private $tdN; private $tiN; private $refraccionN; private $dd12; private $di12; private $td12; private $ti12; private $refraccion12; private $dd14; private $di14; private $td14; private $ti14; private $refraccion14; private $ddlisa; private $dilisa; private $tdlisa; private $tilisa; private $refraccionlisa;

  	
  public function mostrar()
  {
     $this->interfaz=file_get_contents('../RECEPCION DE AUTO/index.html');
	 echo $this->interfaz;
  }
  
  public function set_rfc($x)
  {
	  $this->rfc=$x;
  }
  public function set_nom($x)
  {
	  $this->nom=$x;
  }
  public function set_email($x)
  {
	  $this->email=$x;
  }
  public function set_domicilio($x)
  {
	  $this->domicilio=$x;
  }
  public function set_tel($x)
  {
	  $this->tel=$x;
  }
  public function set_placas($x)
  {
	  $this->placas=$x;
  }
  public function set_marca($x)
  {
    $this->marca=$x;
  }
  public function set_modelo($x)
  {
    $this->modelo=$x;
  }
  public function set_version($x)
  {
    $this->version=$x;
  }
  public function set_color($x)
  {
    $this->color=$x;
  }
  public function set_tipo($x)
  {
    $this->tipo=$x;
  }
  public function set_year($x)
  {
    $this->year=$x;
  }

  public function get_rfc()
  {
	 $this->rfc=$_POST['rfc'];
	 return $this->rfc;
  }

  public function get_nom()
  {
	 $this->nom=$_POST['nom'];
	 return $this->nom;
  }

  public function get_email()
  {
	 $this->email=$_POST['email'];
	 return $this->email;
  }

  public function get_domicilio()
  {
	 $this->domicilio=$_POST['domicilio'];
	 return $this->domicilio;
  }

  public function get_tel()
  {
	 $this->tel=$_POST['tel'];
	 return $this->tel;
  }
  
  public function get_placas()
  {
	 $this->placas=$_POST['placas'];
	 return $this->placas;
  }

  public function get_marca()
  {
   $this->marca=$_POST['marca'];
   return $this->marca;
  }

  public function get_modelo()
  {
   $this->modelo=$_POST['modelo'];
   return $this->modelo;
  }

  public function get_version()
  {
   $this->version=$_POST['version'];
   return $this->version;
  }

  public function get_color()
  {
   $this->color=$_POST['color'];
   return $this->color;
  }

  public function get_tipo()
  {
   $this->tipo=$_POST['tipo'];
   return $this->tipo;
  }
  
  public function get_year()
  {
   $this->year=$_POST['year'];
   return $this->year;
  }

}
?>