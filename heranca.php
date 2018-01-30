<?php

  class funcionario
  {
    public $nome;
    public $salario;

    public function bonus()
    {
      return  0.1 * $this->salario;
    }
  };

class gerente extends funcionario
{
  public $usuario;
  public $senha;

  public function bonus()
  {
    return  0.1 * $this->salario + 666;
  }
}

class telefonista extends funcionario
{
  public $estacaoDeTrabalho;
}

class secretario extends funcionario
{
  private $ramal;
}

  $gerente = new gerente();
  $telefonista = new telefonista ();
  $secretaria = new secretario();

  $gerente->nome= "Lucas";
  $gerente->salario=2000;
  $gerente->usuario= 'ilucasf';
  $gerente->senha = 123;
  echo "AAAAAAA:"  . $gerente->bonus() . PHP_EOL;

  $telefonista->Nome              = "Kátia";
  $telefonista->salario           = 1000;
  $telefonista->estacaoDeTrabalho = 123456;

  $secretaria->Nome    = "Aaa";
  $secretaria->salario = 1234;

  echo "$gerente->nome\n";
  echo "$gerente->salario\n";
  echo "$gerente->usuario\n";
  echo "$gerente->senha\n";

  echo "$telefonista->Nome\n";
  echo "$telefonista->salario\n";
  echo "$telefonista->estacaoDeTrabalho\n";

  echo "$secretaria->Nome\n";
  echo "$secretaria->salario\n";
