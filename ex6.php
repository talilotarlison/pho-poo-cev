<?php
  // https://www.php.net/manual/en/function.boolval.php
	class ContaBanco
	{
		// atributos
	  public $nomeBanco;
      public $numConta;
      protected $tipo;
	  private $dono;
      private $saldo;
      private $status;
      // metodo especiais contrutor
      public function __construct(){
      	$this->nomeBanco = "Nubank";
      	$this->saldo = 0;
      	$this->status= false;
      }
      // metodos getter e setter
      public function setNumConta(int $nc){
			$this->numConta = $nc;
      }

      public function getNumConta():int{
      	return $this->numConta;
      }

      public function setTipo(string $tipo){
			$this->tipo = strtoupper($tipo);
      }

      public function getTipo(): string{
      	return $this->tipo;
      }

      public function setDono(string $dono){
			$this->dono = ucwords($dono);
      }

      public function getDono(): string{
      	return $this->dono;
      }

      public function setSaldo(float $saldo){
			$this->saldo = $saldo;
      }

      public function getSaldo():float{
      	return $this->saldo;
      }

      public function setStatus(bool $status){
		    return $this->status = $status;
      }

      public function getStatus():string{
      	return ($this->status == true) ? "Conta Aberta" : "Conta fechada";
      }
      
      // meus  metodos
      public function abrirConta(string $t){
      	$this->setTipo($t);
      	$this->setStatus(true);
      	echo  "Conta aberta com sucesso";

      	if($this->getTipo() == "CC"){
      		$this->saldo = 50;
      	}elseif ($this->getTipo() == "CP") {
      		$this->saldo = 150;
      	}else{
      		echo  "Conta Invalida, tente novamente";
      	}
      }

      public function fecharConta(){
      	if($this->getSaldo() > 0){
      		echo "Sua conta tem {$this->getSaldo()}, você precisa sacar para fecha a conta!";
      	}elseif($this->getSaldo() < 0){
      		echo "Sua conta tem {$this->getSaldo()}, você precisa quitar o debito para fecha a conta!";
      	}else{
      		$this->setStatus(false);
      		echo  "Conta fechada com sucesso";
      	}
      }

      public function depositar(float $valor){
		if($this->getStatus() == "Conta Aberta"){
			$this->getSaldo($this->setSaldo()+ $valor);
			//$this->saldo += $valor;
		}else{
			echo  "Impossivel depositar, {$this->getStatus()}";
		}
      }

      public function sacar(float $saque){
      	if($this->getStatus() == "Conta Aberta"){
			$this->saldo -= $saque;
		}else{
			echo  "Impossivel sacar, {$this->getStatus()}";
		}
      }

      public function pagarMensal(){
       if($this->getStatus() == "Conta Aberta"){
       	  if($this->getSaldo() > 0){
       	  	$this->saldo -= 50;
       	  }else{
			echo  "Conta bloqueada, saldo insuficiente";
       	  }
		}else{

			echo  "Conta esta fechada, saldo insuficiente";
		}
      }
  }
  
  $pessoa1 = new ContaBanco();
  $pessoa1->setNumConta(725787935);
  // $pessoa1->setTipo("cc");
  $pessoa1->setDono("talilo tarlison");
  $pessoa1->abrirConta("cc");
  print_r($pessoa1 );
  $pessoa1->sacar(saque : 160);
  print_r($pessoa1 );
  $pessoa1->depositar(200);
  
  print_r($pessoa1 );

  