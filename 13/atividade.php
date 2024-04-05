<?php 

class Cliente {
    protected $nome;
    protected $cpf;

    public function __construct($nome, $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

}

class Conta {
    protected $numero;
    protected $saldo;
    protected $cliente;

    public function __construct($numero, $saldo, $cliente)
    {
        $this->numero = $numero;
        $this->saldo = $saldo;
        $this->cliente = $cliente;
    }

    public function sacar($valorSaque, $saldo) {
        if ($this.$saldo >= $valorSaque && $valorSaque > 0) {
            $this.$saldo -= $valorSaque;
            return true;
        }
        return false;
    }

    public function depositar($valorDeposito, $saldo) {
        if ($valorDeposito > 0) {
            $this.$saldo += $valorDeposito;
            return true;
        }

        return false;
    }

    // public function tranferir($valorSaque, $contaPouapanca) {
    //     if ($this->sacar($this->$valorSaque)) {
    //         $contaPouapanca->depositar($contaPouapanca);
    //         return true;
    //     }

    //     return false;
    // }

}

class ContaCorrente extends Conta {
    private $limiteChequeEspecial;
    private $sacar;
}

class ContaPoupanca extends Conta {
    private $taxaRendimento;
    private $aplicarRendimento;
}


// Criando instâncias de Cliente
$cliente1 = new Cliente("João", "123456789-00");
$cliente2 = new Cliente("Maria", "987654321-00");

// Cirando instâncias de Contas
$contaCorrente1 = new ContaCorrente($cliente1, 1001, 1500, 500);
$contaPouapanca1 = new ContaPoupanca($cliente1, 2001, 3000, 0.05);
$contaCorrente2 = new ContaCorrente($cliente2, 1002, 3000, 1000);

// Realizando operações nas contas
// $contaCorrente1->sacar(100, 500);
// $contaCorrente2->transferir(200, $contaPouapanca1);
// $contaPouapanca1->aplicarRendimento();

// Exibindo dados das contas:
echo "Dados da Conta Corrente 1: $contaCorrente1 <br>";
echo "Dados da Conta Poupança 1: $contaPouapanca1 <br>";
echo "Dados da Conta Corrente 2: $contaCorrente2 <br>";



?>