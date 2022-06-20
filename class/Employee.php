<?php

// includo la classe da estendere
require_once __DIR__ . "/User.php";

// estendo la classe User
class Employee extends User{
  private $level;

  public function setLevel($_level){
    $this->level = $_level;
  }

  // questo è polimofismo del metodo setSconto perché ha lo stesso nome del metodo genitore ma con funzionalità diverse
  public function setSconto(){
    if($this->age > 65){
      $this->discount = 50;
    }else{
      $this->discount = $this->level * 10;
    }
  }

  public function getLevel(){
    return $this->level;
  }

}



