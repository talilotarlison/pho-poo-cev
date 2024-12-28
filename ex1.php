<?php

	class Caneta
	{
	   var $modelo;
	   var $cor;
	   var $ponta;
	   var $carga;
	   var $tampada;
	   
	   function rabiscar(){
		 if($this->tampada == true){
			echo "erro";
		 }else{
			echo "estou rabiscando agora";
		 }
		 
	   }
	   
	   function tampar($status){
		$this->tampada = $status;
	   }
	   
	   function destampar(){
		  $this->tampada = false;
	   }

	}

	$c1 = new Caneta();
	$c1->cor = "azul";
	$c1->ponta = 0.5;
	$c1->carga= 4;
	$c1->tampada = true;

	print_r($c1);
	print_r($c1->rabiscar());
	print_r($c1->tampar(true));
	print_r($c1->rabiscar());



	$c2 = new Caneta();
	$c2->modelo = "bic";
	$c2->cor = "verde";
	$c2->ponta = 0.5;
	$c2->carga= 14;
	$c2->tampada = false;

	print_r($c2);
	print_r($c2->rabiscar());
	print_r($c2->tampar(true));
	print_r($c2->rabiscar());

?>