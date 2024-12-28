<?php
 
class Luta {

	 private  $desafiado;

    private  $desafiante;

    private int $raund;

    private bool $aprovado;

    public function marcarLuta(Lutador $l1 , Lutador $l2 ){
    	if(($l1 !== $l2)&&($l1->getCategoria() == $l2->getCategoria())){
    		$this->aprovado = true;
    		$this->desafiado = $l1;
    		$this->desafiante = $l2; 
    	}else{
    		$this->aprovado = false;
    		$this->desafiado = null;
    		$this->desafiante = null; 
    	}
    }
    
 	public function lutar(){
 		if($this->aprovado === true){
			 $this->desafiado->apresentar();
			 $this->desafiado->status();
		  $this->desafiante->apresentar();
		  $this->desafiante->status();
			$vencedor = rand(0,2);
			switch ($vencedor) {
			    case 0:
			        $this->desafiado->empatarLuta();
			        $this->desafiante->empatarLuta();
			        echo "Luta Empatada";
			        break;
			    case 1:
			        $this->desafiado->ganharLuta();
			        $this->desafiante->perderLuta();
			        echo "Vitoria: ".  $this->desafiado->getNome();
			        break;
			    case 2:
			        $this->desafiante->ganharLuta();
			        $this->desafiado->perderLuta();
			        echo "Vitoria: ". $this->desafiante->getNome();
			        break;
			}
 		}else{
 			echo "A luta não foi aprovada.!!";
 		}
 		}
	}
	
$luta1 = new Luta();
$luta1->marcarLuta($lutadores[0],$lutadores[1]);
$luta1->lutar();
print_r($lutadores[0]);