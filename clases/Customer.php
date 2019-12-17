<?php
class Customer extends Persona{
  private $nombre;
  private $apellido;
  private $fotoDePerfil;
  private $compra;
  private $id;
  private $email;
  private $contraseña;

  public function setId($id){
    $this->id=$id;
  }
  public function getId(){
    return $this->id;
  }
  public function setEmail($email){
    $this->email=$email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setContraseña($contraseña){
    $this->contraseña=$contraseña;
  }
  public function getContraseña(){
    return $this->contraseña;
  }
  public function buscar(){

  }
  public function contactarse(){
    
  }

  public function modificarPerfil(){

  }
  public function cerrarSesion(){

  }
  public function agregarAlCarrito(){

  }
  public function verCarrito(){

  }
  public function eliminarCarrito(){

  }
  public function setNombre($nombre){
    $this->nombre=$nombre;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setApellido($apellido){
   $this->apellido=$apellido;
  }
  public function getApellido(){
    return $this->apellido;
  }
  public function setFotoDePerfil($fotoDePerfil){
    $this->$fotoDePerfil=$fotoDePerfil;

  }
  public function getFotoDePerfil(){
    return $this->fotoDePerfil;
  }
  public function setCompra($compra){
    $this->compra=$compra;
  }

}

 ?>
