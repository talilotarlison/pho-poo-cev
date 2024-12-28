  <?php
  	$velocidade = 73;
// metodo statico class php

class Velocidade{
	static public function MedirVelocidade(float $velocidade){
	if($velocidade >= 100){
  		echo "muito rapido";
  	}elseif ($velocidade >= 80 && $velocidade < 100) {
  		echo "acima do limite";
  	}elseif ($velocidade >= 60 && $velocidade < 80) {
  		echo "aceitavel";
  	}else{
  		echo  "muito lento";
  	}
	}
}  	
// limpar entrada de dados do usuario -> htmlspecialchars(string)
Velocidade::MedirVelocidade(velocidade :htmlspecialchars($velocidade));
