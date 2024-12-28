<?php
  interface IAnimal{
    public function locomover();
    public function alimentar();
    public function fazerSom();

  }

// class pessoa
//https://www.php.net/manual/en/language.oop5.abstract.php

abstract  class Animal implements IAnimal{
    private float $peso;
    private int $idade;
    private int $membros;
    
    function __construct(float $peso, int $idade,int $membros) {
      $this->peso = $peso;
      $this->idade = $idade;
      $this->membros = $membros;
    }

    public function locomover(){
      
    }
    public function alimentar(){
      
    }
    public function fazerSom(){
      
    }
}

// class Mamifero
class Mamifero extends Animal{
   private string $corPelo;
    function __construct(float $peso, int $idade,int $membros,string $corPelo){
    parent::__construct( $peso,$idade,$membros);
          $this->corPelo = $corPelo;
  }
      public function locomover():void{
        echo "Correr mamifero";
      }
    public function alimentar():void{
       echo "Mamar mamifero";
    }
    public function fazerSom():void{
       echo "faz som de mamifero";
    }

}

$m1 = new Mamifero(2.54, 8,4,"pelo preto");
print_r($m1->locomover() );
print_r($m1);

// class repitil
class Repitil extends Animal{
  private string $corEscama;
    function __construct(float $peso, int $idade,int $membros,string $corEscama){
    parent::__construct( $peso,$idade,$membros);
          $this->corEscama = $corEscama;
  }
  // polimofismo de sobreescrita - sobreposição
      public function locomover():void{
        echo "andar repitil";
      }
    public function alimentar():void{
      echo "Comer repitil";
    }
    public function fazerSom():void{
      echo "faz som de repitil";
    }

}

$r1 = new Repitil(0.3, 1,4,"escama preta");
print_r($r1->locomover() );
print_r($r1);


// class Cachoro
class Lobo extends Mamifero{
    function __construct(float $peso, int $idade,int $membros,string $corEscama){
    parent::__construct( $peso,$idade,$membros,$corEscama);
  }
  // polimofismo de sobreescrita -   sobreposição - assinatura igual class diferente
      public function locomover():void{
        echo "corre Lobo";
      }
       // polimofismo de sobreescrita  sobreposição
    public function alimentar():void{
      echo "Comer carne de lobo";
    }
     // polimofismo de sobreescrita  sobreposição
    public function fazerSom():void{
      echo "uuuuuuu";
    }
}  

$l1 = new Lobo(30,3,4,"pelo branco");
print_r($l1);

// class Cachoro
class Cachoro extends Mamifero{
    function __construct(float $peso, int $idade,int $membros,string $corEscama){
    parent::__construct( $peso,$idade,$membros,$corEscama);
  }
  // polimofismo de sobreescrita -   sobreposição - assinatura igual class diferente
      public function locomover():void{
        echo "andar cachorro";
      }
       // polimofismo de sobreescrita  sobreposição
    public function alimentar():void{
      echo "Comer carne";
    }
     // polimofismo de sobreescrita  sobreposição
    public function fazerSom():void{
      echo "latir";
    }
   // polimofismo de sobrecarga - > assinatura diferente mesma classe
    public function reagirFrase(string $frase):void{
      if($frase == "comida" || $frase == "ola" ){
        echo "abanar";
      }else{
        echo "latir";
      }

    }
       // polimofismo de sobrecarga - > assinatura diferente mesma classe
    public function reagirHora(int $hora):void{
      if($hora >= 18){
          echo "iginorar";
      }else{
        echo "abanar e latir";
      }
    }
        // polimofismo de sobrecarga - > assinatura diferente mesma classe
  public function reagirDono(bool $dono):void{
    if($dono){
        echo "abanar e latir";
    }else{
        echo "moder";
    }
  }
        // polimofismo de sobrecarga - > assinatura diferente mesma classe
  public function reagirIdade(int $idade):void{
    if($idade <=5){
        echo "abanar e latir";
    }else{
        echo "dormir";
    }
  }
}

$c1 = new Cachoro(10, 1,4,"pelo marron");
print_r($c1->locomover() );
print_r($c1->alimentar() );
print_r($c1->reagirFrase("comida") );
print_r($c1);


?>