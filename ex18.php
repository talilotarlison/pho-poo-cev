<?php
// interface Video
  interface IAcoesVideo{

    public function play();
    public function pause();
    public function like();

  }

// class Video

class Video implements IAcoesVideo{
    private string $titulo;
    private string $avaliacao;
    private int $views;
    private int $curtidas;
    private bool $reproduzindo;
    
    function __construct(string $titulo,string $avaliacao) {
      $this->titulo = $titulo;
      $this->avaliacao = $avaliacao;
      $this->views = 0;
      $this->curtidas = 0;
      $this->reproduzindo = false;
    }
// titulo
    private function getTitulo():string{
      return   $this->titulo ;
    }
    private function setTitulo(string $titulo):void{
      $this->titulo =  $titulo ;
    }
// avaliacao
    private function getAvaliacao():string{
      return   $this->titulo ;
    }
    public function setAvaliacao(string $avaliacao):void{
       // $this->avaliacao = ($this->avaliacao + $avaliacao / $this->views);
      $this->avaliacao =  $avaliacao ;
    }
// views
    private function getViews():int{
      return   $this->views ;
    }
    private function setViews():void{
      $this->views ++;
    }
// curtidas
    private function getCurtidas():int{
      return   $this->curtidas ;
    }
    private function setCurtidas():void{
      $this->curtidas++;
    }
// reproduzindo
    private function getReproduzindo():bool{
      return   $this->reproduzindo ;
    }
    private function setReproduzindo(bool $reproduzindo):void{
      $this->reproduzindo =  $reproduzindo ;
    }
  // interface metodos
    public function play(){
      $this->setReproduzindo(true);
        $this->setViews();
      if($this->reproduzindo == true){
        echo "Conteudo em reprodução.";
      }else{
           echo "Conteudo nao esta em reprodução.";
      }
    }

    public function pause(){
      $this->setReproduzindo(false);
      if($this->reproduzindo == true){
        echo "Conteudo Pausado.";
      }else{
           echo "Conteudo ja Pausado.";
      }
 
    }
    public function like(){
      $this -> setCurtidas();
    }

}

$v1 = new Video("PHP moderno", "Curso basico de PHP muito produtivo!!");
print_r($v1);
print_r($v1->play());
print_r($v1);
print_r($v1->pause());
print_r($v1->like());
print_r($v1);


// interface pessoa
interface IPessoa{
   public function ganharExp();
  }

// class pessoa

abstract class Pessoa implements IPessoa{
    private string $nome;
    private int $idade;
    private string $sexo;
    private string $xp;

    function __construct(string $nome, int $idade,string $sexo) {
      $this->nome = $nome;
      $this->idade = $idade;
      $this->sexo = $sexo;
      $this->xp = 0;
    }
    // metodos
    private function getNome():string{
      return $this->nome;
    }

    private function setNome(string $nome):void{
      $this->nome = $nome;
    }
    private function getIdade():int{
      return $this->idade;
    }

    private function setIdade(int $idade):void{
      $this->idade = $idade;
    }
    private function getSexo():string{
      return $this->sexo;
    }

    private function setSexo(string $nome):void{
      $this->sexo = $sexo;
    }

    private function setXp(int $xp):void{
      $this->xp = $xp;
    }
    private function getXp():int{
      return $this->xp;
    }
// metodos interface
    public function ganharExp():void{
      $this->xp ++;

    }
}

// classe Gafanhoto

class Gafanhoto extends Pessoa{
    private string $login;
    private int $totalAssistido;
    function __construct(string $nome, int $idade,string $sexo, string $login){
    parent::__construct( $nome,$idade,$sexo); // https://stackoverflow.com/questions/1961907/how-to-call-super-in-php
          $this->login = $login;
          $this->totalAssistido = 0;
  }

    private function getLogin():string{
      return $this->login;
    }

    private function setLogin(string $login):void{
      $this->login = $login;
    }

    private function setTotalAssistido(int $totalAssistido):void{
      $this->totalAssistido = $totalAssistido;
    }

    private function getTotalAssistido():int{
      return $this->totalAssistido;
    }

    public function viuMaisUm():void{
      $this->totalAssistido++;
    }
}

$g1 = new Gafanhoto("Talilo", 25,"M","taliltarlison");

print_r($g1);


// interface IVisualizacao
  interface IVisualizacao{

    public function avaliar($avaliacao):void;

  }
// class Visualizacao

class Visualizacao implements IVisualizacao{
    private $espectador;
    private $filme;
    
    function __construct($espectador,$filme) {
      $this->espectador = $espectador;
      $this->filme = $filme;
    }
    // metodos
    private function getEspectador(){
      return $this->espectador;
    }

    private function setEspectador($espectador):void{
      $this->espectador = $espectador;
    }
    public function getFilme(){
      return $this->filme;
    }

    public function setFilme($filme):void{
      $this->$filme = $filme;
    }
    // metodos sobrecargar
    public function avaliar($avaliacao):void{
       $this->filme->setAvaliacao($avaliacao);
       echo "Avalicao por frase feita com sucesso";
    }
    public function avaliarPorcentagem($avaliacao):void{
      if($avaliacao <=100){
           $this->filme->setAvaliacao($avaliacao);
            echo "Avalicao por Porcentagem feita com sucesso ";
      }else{
         echo "Avalicao por Porcentagem invalida -> 0 ate 100";
      }
    }
      
    public function avaliarNota($avaliacao):void{
      if($avaliacao <=10){
           $this->filme->setAvaliacao($avaliacao);
            echo "Avalicao por nota feita com sucesso ";
      }else{
         echo "Avalicao por nota invalida -> 0 ate 10";
      }

      
    }
}


$vw1 = new Visualizacao($g1,$v1);
print_r($vw1);
print_r($vw1->avaliarNota(5));
print_r($vw1);
?>