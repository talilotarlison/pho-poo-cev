<?php
// https://www.php.net/manual/en/language.oop5.decon.php
	class Caneta
	{
      private $modelo;
      private $cor;
	   private $ponta;
       private $tampada;
		
      public function __construct(string $m, string $c,float $p){
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
      }  
//    metodos 
     private function tampar(){
        $this->tampada = true;
     }

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

	$c1 = new Caneta("BIC","azul", 5);

	print_r($c1);
    $c1->setModelo("BIC 2");
	$c1->setPonta(0.5);
	print_r($c1);

// phpinfo();


?>