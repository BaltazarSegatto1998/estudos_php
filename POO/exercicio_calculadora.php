<?php
class Calculadora {
    private float $result; //Variável que vai armazenar o resultado.

    public function __construct() {
        $this->result = 0; //Inicia a variável ao criar o Obrjeto.
    }
    public function clear(){
        $this->result = 0 ;
    }
    //Pega o valor da variável $result e soma com valor enviado para add.
    public function add($n1){
        $this->result += $n1;
       return $this->result;
    }
    //Pega o valor da variável $result e subtrai com valor enviado para sub.
    public function sub($n2){
        $this->result -= $n2;
       return $this->result;
    }
    //Pega o valor da variável $result e multiplica com valor enviado para multiply.
    public function multiply($n3){
        $this->result *= $n3;
       return $this->result;
    }
   
    //Verifica se a divisão não é por zero.
    public function divide($n4){
        if( $n4 > 0){
            $this->result /= $n4;
        }else{
            echo 'Divisão não efetuada, não é possível dividir por '. $n4.'.' . '<br>';
        }
    }
    //Pega os resultados das operações
    public function getResult(){
        return $this->result;
    }
}



$obj = new Calculadora;
$obj -> add (12);
$obj -> add (2);
$obj -> sub (1);
$obj -> multiply (3);
$obj -> divide (2);
$obj -> add (0.5);

echo 'Total: '.$obj -> getResult ();
$obj -> clear();

