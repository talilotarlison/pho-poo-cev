
<?php
    // CRIAÇÃO DA INTERFACE
    interface LutadorControlador
{
    public function apresentar();

    public function status();

    public function ganharLuta();

    public function perderLuta();

    public function empatarLuta();

}

    // CRIANÇÃO DA CLASSE
class Lutador implements  LutadorControlador
{
    private string $nome;

    private string $nacionalidade;

    private int $idade;

    private float $peso;

    private float $altura;

    private string $categoria;

    private int $vitorias;

    private int $derrotas;

    private int $empates;
    // metodos alternativos da CLASSE
    // metodo construtor
    public function __construct(string $nome,string $nacionalidade,int $idade, float $altura,float $peso,int $vitorias,int $derrotas,int $empates){
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->setCategoria();
          $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;

    }
    // nome
    private function getNome():string{
        return $this->nome;
    }

    private function setNome(string $nome):void{
        $this->nome = $nome;
    }
   //nacionalidade
  private function getNacionalidade(): string{
        return $this->nacionalidade;
    }

    private function setNacionalidade(string $nacionalidade):void{
        $this->nacionalidade = $nacionalidade;
    }
  // idade
  private function getIdade():int{
        return $this->idade;
    }

    private function setIdade(int $idade):void{
         $this->idade = $idade;
    }
  //altura
  private function getAltura():float{
        return $this->altura;
    }

    private function setAltura(float $altura):void{
         $this->altura = $altura;
    }
    // peso
  private function getPeso():float{
        return $this->peso;
    }

    private function setPeso(float $peso):void{
         $this->peso = $peso;
         $this->setCategoria(); 
    }
  // CATEGORIA

    private function setCategoria():void{
         $pesoLutador = $this->getPeso();

         if($pesoLutador <= 52.3){
             $this->categoria = "Invalido";
         }elseif($pesoLutador <=70.3){
             $this->categoria = "Baixo";
         }elseif($pesoLutador <=82.3){
             $this->categoria = "Medio";
         }elseif($pesoLutador <=120.9){
             $this->categoria = "Pesado";
         }else{
            $this->categoria = "Invalido";
         }
    }
    
    private function getCategoria():string{
        return $this->categoria;
    }

        // vitorias
  private function getVitorias():int{
        return $this->vitorias;
    }

    private function setVitorias(int $vitorias):void{
         $this->vitorias = $vitorias;
    }
      // derotas
  private function getDerotas():int{
        return $this->derrotas;
    }

    private function setDerotas(int $derrotas):void{
         $this->derrotas = $derrotas;
    }
      // empates
  private function getEmpates():int{
        return $this->empates;
    }

    private function setEmpates(int $empates):void{
         $this->empates = $empates;
    }
  

    // emplementar metodos da interface

    public function ganharLuta():void{
          $this->setVitorias(vitorias: $this->getVitorias() + 1);
    }
    public function perderLuta():void{
          $this->setDerotas(derrotas: $this->getDerotas() + 1);
    }
    public function empatarLuta():void{
        $this->setEmpates(empates: $this->getEmpates() + 1);
    }


    public function status():void{
        echo "=========== Status Lutador=============\n";
        echo "Pesando : {$this->getPeso()} kg.\n";
        echo "Categoria : {$this->getCategoria()}.\n";
        echo "Pesando : {$this->getPeso()} kg.\n";
        echo "Ganhou : {$this->getVitorias()} lutas.\n";
        echo "Perdeu : {$this->getDerotas()} lutas.\n";
        echo "Empatou : {$this->getEmpates()} lutas.\n";

    }

    public function apresentar():void{
        echo "Apresentando Atleta...\n";
        echo "Lutodor : {$this->getNome()}\n";
        echo "Origem : {$this->getNacionalidade()}\n";
        echo "Idade : {$this->getIdade()} anos.\n";
        echo "Altura : {$this->getAltura()} metros.\n";
        echo "Pesando : {$this->getPeso()} kg.\n";
        echo "Ganhou : {$this->getVitorias()} lutas.\n";
        echo "Perdeu : {$this->getDerotas()} lutas.\n";
        echo "Empatou : {$this->getEmpates()} lutas.\n";
    }

}

  print_r($prettyBoy = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1));

  $putscript = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
  $snapshadow = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
  $deadCode = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
  $ufocobol = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
  $nerdaard = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);
  
  $lutadores = [$prettyBoy, $putscript ,$snapshadow,$deadCode,$ufocobol ,$nerdaard];
  
  print_r($prettyBoy->perderLuta());
  print_r($prettyBoy->apresentar());
  print_r($prettyBoy->status());
 
 print_r( $lutadores); 
  