<?php

	class Caneta
	{
	   public $modelo;
	   private $ponta;
//    metodos 
	   public function getModelo(){
       return $this->modelo;
	   }
	   
       public function setModelo(string $m){
		$this->modelo = $m;
	   }

       public function getPonta(){
        return $this->ponta;
        }

	   public function setPonta(float $p){
		  $this->ponta = $p;
	   }

	}

	$c1 = new Caneta();

	print_r($c1);
    $c1->setModelo("BIC");
	$c1->setPonta(0.5);
	print_r($c1);




?>