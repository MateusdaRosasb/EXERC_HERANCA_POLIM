// Davi Mateus e Verissimo

<?php

class Veterinario{
  public $ver;
  public function examina($a){
    echo "examinando $a \n";
    $this->ver=true; 
  }
}

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

$ex = new Veterinario;
$a1= new Cachorro("soco","3 anos","latir");
$ex->examina($a1->nome);
 if ($ex->ver == true){
   $a1->setSom();}

$a2= new Cavalo("Pé de Pano","10 anos","relinchar");
$ex->examina($a2->nome);
 if ($ex->ver == true){
   $a2->setSom();}

$a3= new Preguica("Joares","25 anos","emitir som");
$ex->examina($a3->nome);
 if ($ex->ver == true){
   $a3->setSom();}

?>