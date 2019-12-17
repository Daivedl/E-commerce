<?php
class UsuarioWeb extends Persona{
  private $invitado;
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

  public function setInvitado($invitado){
    $this->invitado=$invitado;
  }
  public function getInvitado(){
    return $this->invitado;
  }
  public function registrar(){

  }
  public function login(){

  }
}
 ?>
