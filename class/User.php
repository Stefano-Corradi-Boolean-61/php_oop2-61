<?php

class User{

  // il metodo/propietà privata viene visto solo all'interno della classe
	private $name;
	public $lastname;
	public $age;
  // il metodo/proprietà protected viene visto anche dalle classi figlie
	protected $discount = 0;

  // il metodo statico non si valorizza col costruttore
  private static $counter = 0;

	public function __construct($_name, $_lastname, $_age = 18){
		// nel costruttore valorizzo tutte le proprietà che reputo essere obbligatorie
		$this->name = $_name;
		$this->lastname = $_lastname;
		$this->age = $_age;

		// e scateno le logiche che mi servono
		$this->setSconto();

    // incremento il metodo statico
    self::$counter++;
	}

	// il metodo privato lo posso invocare solo internamente alla classe
	private function setSconto(){
		if($this->age > 65){
			$this->discount = 20;
		}
	}

	public function setName($_name){
		$this->name = $_name;
	}

	public function getName(){
		return $this->name;
	}

	public function getFullName(){
		return $this->name . ' ' . $this->lastname;
	}

	public function getDiscount(){
		return $this->discount;
	}

  // restituisco il metodo statico privato 
  public static function getCounter(){
    return static::$counter;
  }

}