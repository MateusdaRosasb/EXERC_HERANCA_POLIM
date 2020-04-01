// Davi Mateus e Verissimo

<?php

class Veiculo{
  public $modelo;
  public $velocidade;
  public $passageiros;
  public $combustivel;

  public function getModelo(){
  return $this->modelo;
 }
  public function getVelocidade(){
  return $this->velocidade;
 }
  public function getPassageiros(){
  return $this->passageiros;
 }
  public function getCombustivel(){
  return $this->combustivel;
 }


  public function setModelo($modelo){
  $this->modelo = $modelo;
 }
  public function setVelocidade($velocidade){
  $this->velocidade = $velocidade;
 }
  public function setPassageiros($passageiros){
  $this->passageiros = $passageiros;
 }
  public function setCombustivel($combustivel){
  $this->combustivel = $combustivel;
 }
}

class Carro extends Veiculo{
public $portas;
public $ano;

  public function getPortas(){
  return $this->portas;
 }
  public function getAno(){
  return $this->ano;
 }

  public function setPortas($portas){
  $this->portas = $portas;
 }
  public function setAno($ano){
  $this->ano = $ano;
 }
}

class Aviao extends Veiculo{
public $uso;
public $tipo;

  public function getUso(){
  return $this->uso;
 }
  public function getTipo(){
  return $this->tipo;
 }

  public function setUso($uso){
  $this->uso = $uso;
 }
  public function setTipo($tipo){
  $this->tipo = $tipo;
 }
}

$p1 = new Carro();
$p2 = new Aviao();

$p1->setModelo("Carro Honda Civic");
$p1->setVelocidade(80);
$p1->setPassageiros(3);
$p1->setCombustivel(200);
$p1->setPortas(4);
$p1->setAno(2009);

echo "\n";
echo "Modelo: ".$p1->getModelo()."\n";
echo "Velocidade: ".$p1->getVelocidade()." Km/h \n";
echo "Quantidade de passageiros: ".$p1->getPassageiros()."\n";
echo "Quantidade de combustivel: ".$p1->getCombustivel()." litros \n";
echo "Quantidade de portas: ".$p1->getPortas()."\n";
echo "Ano de Fabricação: ".$p1->getAno()."\n";

$p2->setModelo("Avião Boeing 78");
$p2->setVelocidade(120);
$p2->setPassageiros(3);
$p2->setCombustivel(200);
$p2->setUso("Comercial");
$p2->setTipo("Avião de Carga");

echo "\n";
echo "Modelo: ".$p2->getModelo()."\n";
echo "Velocidade: ".$p2->getVelocidade()." Km/h \n";
echo "Quantidade de passageiros: ".$p2->getPassageiros()."\n";
echo "Quantidade de combustivel: ".$p2->getCombustivel()." litros \n";
echo "Usabilidade: ".$p2->getUso()."\n";
echo "Tipo: ".$p2->getTipo()."\n";

?>