<?php
  interface IPessoa{
    public function fazerAniversario();

  }

// class pessoa
//https://www.php.net/manual/en/language.oop5.abstract.php

abstract  class Pessoa implements IPessoa{
    private string $nome;
    private int $idade;
    private string $sexo;
    
    function __construct(string $nome, int $idade,string $sexo) {
      $this->nome = $nome;
      $this->idade = $idade;
      $this->sexo = $sexo;
    }

    public function fazerAniversario(){
      $this->idade ++;
      $anoAtual = date("Y");
      echo "Feliz aniverario: Você tem " . $this->idade."anos, nasceu em -> " . ($anoAtual - $this->idade);
    }
}

// class visitante
class Visitante extends Pessoa{

}

$v1 = new Visitante("Joao", 22,"m");
print_r($v1->fazerAniversario() );
print_r($v1);

// class aluno
class Aluno extends Pessoa{
      private int $matricula;
      private bool $matriculaAtiva;
      private string $curso;
     function __construct(string $nome, int $idade,string $sexo, int $matricula, string $curso){
     parent::__construct( $nome,$idade,$sexo);
          $this->matricula = $matricula;
          $this->matriculaAtiva = true;
          $this->curso = $curso;
   }
   // uso do final para nao deixar sobreescrever
    public function pagarMensalidade():void{
      echo "Mensalidade aluno paga com sucesso!!";
  }
}

$a1 = new Aluno("Rogerio", 27,"M",4856949,"Ciencia da computação");
print_r($a1->fazerAniversario());
print_r($a1);
print_r($a1->pagarMensalidade());

// class visitante
class Bolsista extends Aluno{
      private int $bolsa;
     function __construct(string $nome, int $idade,string $sexo, int $matricula, string $curso, int $bolsa){
     parent::__construct( $nome,$idade,$sexo,$matricula,$curso);
          $this->bolsa = $bolsa ;
   }
    public function renovarBolsa():void{
      echo "Renovado bolsa paga com sucesso!!";
  }
  // polimofismo
    public function pagarMensalidade():void{
      echo "Mensalidade de aluno bolsista paga com sucesso!!";
  }
   
}

$b1 = new Bolsista("Marcia", 17,"M",488949,"Ciencia da computação",11);
print_r($b1->fazerAniversario());
print_r($b1->pagarMensalidade());

?>