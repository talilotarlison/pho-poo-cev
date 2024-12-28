<?php
// classe pessoa
	class Pessoa{
		private string $nome;
		private int $idade;
		private string $sexo;

		public function __construct(string $nome,int $idade,string $sexo){
			$this->nome = $nome;
			$this->idade =$idade;
			$this->sexo =$sexo;
		}
		public function getNome():string{
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
	}
	
	$p1 = new Pessoa("Joao", 24,"M");
	$p2 = new Pessoa("Kaio", 34,"M");
	
	print_r($p1);
	
// CRIAÇÃO DA INTERFACE
	interface Publicacao {

	    public function abrir();

	    public function fechar();

	    public function folhear($pagina);

	    public function avancarPag();

	    public function voltarPag();

	}

		// CRIANÇÃO DA CLASSE
	class Livro implements  Publicacao {
	    private string $titulo;
	    private string $autor;
	    private int $totalPaginas;
	    private int $pagAtual;
	    private bool $aberto;
	    private $leitor;
	    public function __construct(string $titulo,string $autor,int $totalPaginas, $leitor){
			$this->titulo = $titulo;
			$this->autor =$autor;
			$this->totalPaginas =$totalPaginas;
			$this->pagAtual = 0;
			$this->aberto = false;
			$this->leitor = $leitor;
		}
		private function getTitulo():string{
			return $this->titulo;
		}

		private function setTitulo(string $titulo):void{
			$this->titulo = $titulo;
		}
		private function getAutor():string{
			return $this->autor;
		}

		private function setAutor(string $autor):void{
			$this->autor = $autor;
		}
		private function getTotalPaginas():int{
			return $this->totalPaginas;
		}

		private function setTotalPaginas(int $totalPaginas):void{
			$this->totalPaginas = $totalPaginas;
		}

		private function getPagAtual():int{
			return $this->pagAtual;
		}

		private function setPagAtual(int $pagAtual):void{
			$this->pagAtual = $pagAtual;
		}

		private function getAberto():bool{
			return $this->aberto;
		}

		private function setAberto(bool $aberto):void{
			$this->aberto = $aberto;
		}

		private function getLeitor(){
			return $this->leitor;
		}

		private function setLeitor($leitor):void{
			$this->leitor = $leitor;
		}

		public function detalhes():void{
		  echo "=========== Detalhes Livro =============\n";
    	echo "Titulo : {$this->getTitulo()}.\n";
    	echo "Paginas : {$this->getTotalPaginas()} pag.\n";
    	echo "Pagina Atual : {$this->getPagAtual()}.\n";
    	echo "Sendo lido por : {$this->leitor->getNome()}.\n";
    	echo "Aberto: {$this->getAberto()}.\n";
		}

		// metodos interface
		public function abrir():void{
		 $this->setAberto(true);
		}

	    public function fechar():void{
	    	$this->setAberto(false);
	    }

	    public function folhear($pagina):void{
	    	$this->setPagAtual($pagina);
	    }

	    public function avancarPag(){
	    	if($this->getPagAtual() <= $this->getTotalPaginas()){
	    		$this->pagAtual++;
	    	}else{
	    		echo "Fim do livro";
	    	}
	    }

	    public function voltarPag(){
	    	if($this->getPagAtual() <= 0 ){
	    		echo "Fim do livro";
	    	}else{
	    		$this->pagAtual--;	

	    	}
	    }

	}
	
	$l1 = new Livro("Php Moderno", "Guanabara", 350, $p1);
	print_r($l1->detalhes());
	print_r($l1->abrir());
	print_r($l1->avancarPag());
	print_r($l1->detalhes());