<?php
    // arquivo NewFile1.php

    //https://bugs.php.net/bug.php?id=41129
    //https://www.php.net/manual/pt_BR/language.oop5.interfaces.php
	interface Controlador
{
    // Uma classe de implementação DEVE ter uma propriedade legível publicamente,
    // mas ser ou não configurável publicamente é irrestrito.
    public function ligar();

    // Uma classe de implementação DEVE ter uma propriedade gravável publicamente,
    // mas ser ou não legível publicamente é irrestrito.
     public function desligar();

    // Uma classe de implementação DEVE ter uma propriedade que seja
    // tanto legível quanto gravável publicamente.
     public function abrirMenu();
    // Uma classe de implementação DEVE ter uma propriedade legível publicamente,
    // mas ser ou não configurável publicamente é irrestrito.
     public function fecharMenu();
    // Uma classe de implementação DEVE ter uma propriedade legível publicamente,
    // mas ser ou não configurável publicamente é irrestrito.
     public function maisVolume();
    // Uma classe de implementação DEVE ter uma propriedade legível publicamente,
    // mas ser ou não configurável publicamente é irrestrito.
     public function menosVolume();
    // Uma classe de implementação DEVE ter uma propriedade legível publicamente,
    // mas ser ou não configurável publicamente é irrestrito.
     public function ligarMudo();
    // Uma classe de implementação DEVE ter uma propriedade legível publicamente,
    // mas ser ou não configurável publicamente é irrestrito.
     public function desligarMudo();
    // Uma classe de implementação DEVE ter uma propriedade legível publicamente,
    // mas ser ou não configurável publicamente é irrestrito.
     public function play();
         // Uma classe de implementação DEVE ter uma propriedade legível publicamente,
    // mas ser ou não configurável publicamente é irrestrito.
     public function pause();
}
?>


<?php 
// arquivo HelloWord.php
include("NewFile1.php");

class ControleRemoto implements  Controlador
{
    private int $volume;

    private bool $ligado;

    private bool $tocando;
# metodo construtor
    public function __construct(){
    	$this->volume = 50;
    	$this->ligado = false;
    	$this->tocando = false;
    }
    # volume
    private function getVolume():int{
    	return $this->volume;
    }

    private function setVolume(int $volume):void{
    	$this->volume = $volume;
    }
    #ligado
   private function getTocando(): bool{
    	return $this->tocando;
    }

    private function setTocando(bool $tocando):void{
    	$this->tocando = $tocando;
    }
    # tocando
   private function getLigado():bool{
    	return $this->ligado;
    }

    private function setLigado(bool $ligado):void{
    	 $this->ligado = $ligado;
    }

    // emplementar metodos da interface

    public function ligar():void{
    	if($this->getLigado()== false){
	    	$this->setLigado(true);
	    	echo "Ligando...\n";
    	}else{
    		echo "Ja esta Ligado...\n";
    	}
    }

     public function desligar():void{
     	if($this->getLigado() == true){
	     	$this->setLigado(ligado: false);
	     	echo "Desligando...\n";
    	 }else{
     		echo "Ja esta desligado...\n";
    	 }
     }

     public function abrirMenu():void{
     	if($this->getLigado() == true){
	     	echo "Abrindo Menu...\n";
	     	echo "Aparelho ligado : {$this->getLigado()}\n";
	     	echo "Aparelho tocando : {$this->getTocando()}\n";
	     	echo "Volume Aparelho : {$this->getVolume()} de 100.\n";

	     	for ($volume=0; $volume <$this->getVolume() ; $volume+=2) { 
	     		echo "|";
	     	}
	     	 	echo "\n";
     	}else{
			echo "Esta desligado...\n";
     	}

     }

     public function fecharMenu():void{
     	if($this->getLigado() == true){
     		echo "Fechando Menu...\n";
     	}else{
     		echo "Esta desligado...\n";
     	}
     	
     }

     public function maisVolume():void{
     	if($this->getLigado() == true){
	     	if($this->getVolume()>=100){
	     		echo "Volume no maximo...\n";
	     	}else{
	     		$this->setVolume(volume: $this->getVolume() + 1);
	     	}    
     	}else{
			echo "Esta desligado...\n";
     	}

     }

     public function menosVolume():void{
     	if($this->getLigado() == true){
     		if($this->getVolume()<=0){
				$this->ligarMudo();
     		}else{
				$this->setVolume(volume : $this->getVolume() - 1);
     		}	
     	}else{
			echo "Esta desligado...\n";
     	}

     }

     public function ligarMudo():void{
     	if($this->getLigado() == true){
			$this->setVolume(volume: 0);
     	}
     }

     public function desligarMudo():void{
     	if($this->getLigado() == true){
     		$this->setVolume(volume: 50);
     	}
     
     }

     public function play():void{
     	if($this->getLigado() == true){
     		$this->setTocando(tocando: true);
     	}
     }

     public function pause():void{
     	if($this->getLigado() == true){
     		$this->setTocando(tocando: false);
     	}
     }
}

$controleAlexa = new ControleRemoto();
$controleAlexa->ligar();
$controleAlexa->ligar();
$controleAlexa->maisVolume();
$controleAlexa->maisVolume();
$controleAlexa->maisVolume();
// dimunie volume
for($i=0;$i < 60;$i++){
	$controleAlexa->maisVolume(); 
}
// aumenta volume
for($i=0;$i < 150;$i++){
 	$controleAlexa->menosVolume(); 
}
// aumenta volume
$controleAlexa->abrirMenu();
$controleAlexa-> play();
$controleAlexa-> desligar();
print_r($controleAlexa);

?>