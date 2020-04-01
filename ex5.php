// Davi Mateus e Verissimo

<?php

class Imovel {
  public $endereco;
  public $preco;
}

class Novo extends Imovel{
  public $add;
  public function Novo($end,$pr){
    $this->endereco = $end;
    $this->preco= $pr;
  }
  
  public function setAdd(){
   $this->preco= $this->preco + (($this->preco*25)/100); 
}

public function getAdd(){
  echo" para um imovel novo tem um  adicional de 25% \n";
 }
}

class Velho extends Imovel{
  public $des;
  public function Velho($end,$pr){
    $this->endereco = $end;
    $this->preco= $pr;
  }
  
  public function setdes(){
   $this->preco= $this->preco - (($this->preco*15)/100); 
}

public function getdes(){
  echo" para um imovel velho tem um  desconto de 15% \n";
 }
}

$imv1= new Novo("Avenida Francisco Miranda, número 2000",20000);
$imv1->getAdd(); 
echo "Primeiro Imovel:(Novo)\n";
echo "Endereço: {$imv1->endereco}\n";
echo "Preço: R$ {$imv1->preco} \n";
$imv1->setAdd();
echo "Preco com o adicional incluso: {$imv1->preco} \n \n";
$imv2= new Velho("Rua Tristão de Araújo Nobrega, número 1500",60000);
$imv2->getdes(); 
echo "Segundo Imovel:(Velho)\n";
echo "Endereço: {$imv2->endereco}\n";
echo "Preço: R$ {$imv2->preco} \n";
$imv2->setdes();
echo "Preco com o desconto incluso: {$imv2->preco}";
?>