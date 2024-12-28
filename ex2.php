<?php
// https://www.phpprogressivo.net/2019/02/Propriedades-SET-GET-Orientacao-objetos-PHP.html
$nome = "joao";

class Empregado {
private $name;
// Get
public function getName() {
 return $this->name;
}

// Set

public function setName($name) {
 $this->name = $name;
}
}

$func = new Empregado();
$func->setName($nome);
echo "Funcionário: ".$func->getName();

$func->setName("talilo");
echo "Funcionário: ".$func->getName();
?>