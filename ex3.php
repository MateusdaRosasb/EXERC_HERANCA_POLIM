// Davi Mateus e Verissimo

<?php

class Animal{
  public $nome;
  public $idade;
  public $som;
  public $acao;

  public function setSom(){
    echo "{$this->nome} {$this->som}\n";
  }
}

Class Cachorro extends Animal{
  public function Cachorro($n,$i,$s){
    $this->nome = $n;
    $this->idade = $i;
    $this->som = $s;
    $this->acao= "correr";
  }
}

Class Cavalo extends Animal{
   public function Cavalo($n,$i,$s){
    $this->nome = $n;
    $this->idade = $i;
    $this->som = $s;
    $this->acao= "correr";
 }
}

Class Preguica extends Animal{
  public function Preguica($n,$i,$s){
    $this->nome = $n;
    $this->idade = $i;
    $this->som = $s;
    $this->acao= "subir em árvore";
 }
}

$animal1= new Cachorro("soco","3 anos","latir");
$animal1->setSom();
$animal2= new Cavalo("Pé de Pano","10 anos","relinchar");
$animal2->setSom();
$animal3= new Preguica("Joares","25 anos","emitir som");
$animal3->setSom();
?>