// Davi Mateus e Verissimo

<?php

class Animal{
  public $nome;
  public $idade;
  public $som;
  public $acao;
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
    $this->acao= "subir em arvore";
 }
}

?>