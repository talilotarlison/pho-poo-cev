<?php
  interface IPessoa{
    public function fazerAniversario();

  }

// class pessoa
class Pessoa implements IPessoa{
    private string $nome;
    private int $idade;
    private string $sexo;
    
    function __construct(string $nome, int $idade,string $sexo) {
      $this->nome = $nome;
      $this->idade = $idade;
      $this->sexo = $sexo;
    }

    public function fazerAniversario(){
      $anoAtual = date("Y");
      echo "Feliz aniverario: Você nasceu em -> " . ($anoAtual - $this->idade);
    }
}


$p1 = new Pessoa("Joao", 22,"m");
print_r($p1->fazerAniversario() );


// class Aluno

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
     
     public function cencelarMatricula():void{
       $this->matriculaAtiva = false;
     }
}

$aluno1 = new Aluno("Ze Amado", 19,"M",425634643,"Administração");
print_r($aluno1);

// class Professor


class Professor extends Pessoa{
     private string $espicialidade;
     private float $salario;
     function __construct(string $nome, int $idade,string $sexo, string $espicialidade, float $salario){
       parent::__construct( $nome,$idade,$sexo);
            $this->espicialidade = $espicialidade;
            $this->salario = $salario;
     }
     public function getSalario():float{
         return $this->salario;
     }
     
    public function setSalario(float $salario):void{
         $this->salario = $salario;
     }
     public function recebeAumento(int $aumento):void{
       $aumentoPorcento = $aumento/100 + 1;
       $this->setSalario($this->getSalario() * $aumentoPorcento);
     }
}


$professor1 = new Professor("pedro", 19,"M","Administração de produção", 2500.0);
print_r($professor1->recebeAumento(10)); 

print_r($professor1); 

// class Funcionario


class Funcionario extends Pessoa{
     private string $setor;
     private bool $trabalhando;
     function __construct(string $nome, int $idade,string $sexo, string $setor, bool $trabalhando){
       parent::__construct( $nome,$idade,$sexo);
            $this->setor = $setor;
            $this->trabalhando = $trabalhando;
     }
     public function getSetor():string {
         return $this->setor;
     }
     
    public function setSetor(string $setor):void{
         $this->setor = $setor;
     }
     
     public function mudarTrabalho(string $novoSetor):void{
       $this->setSetor($novoSetor);
     }
}

$funcionario1 = new Funcionario("pedro", 19,"M","Farmacia", true);
print_r($funcionario1->mudarTrabalho("Atendimento"));

print_r($funcionario1); 

?>