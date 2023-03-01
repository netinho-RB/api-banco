<?php

$host = 'localhost'; // ou o endereço do seu servidor 
$user = 'root';
$password = '1701';
$dbname = 'new_schema_netocode';

// criando conexão com o banco de dados
$conn = mysqli_connect($host, $user, $password, $dbname);

// verificando se houve erro na conexão
if (!$conn) {
    die('Não foi possível conectar: ' . mysqli_error($conn));
}
$cpf = rand(10000000000, 99999999999); // gerando CPF aleatório
$nome = "Cliente " . rand(1, 1000); // gerando nome aleatório
$idConvenio = rand(1, 10); 
$matricula = rand(1000000000, 9999999999); 
$vlMultiploSaque = rand(500, 5000) / 100; 
$limiteUtilizado = rand(0, 5000) / 100; 
$limiteTotal = rand(5000, 10000) / 100; 
$limiteDisponivel = $limiteTotal - $limiteUtilizado;
$vlLimiteParcela = rand(500, 5000) / 100; 
$vlMultiploCompra = rand(500, 5000) / 100; 
$vlLimiteCompra = rand(5000, 10000) / 100; 


// criando SQL para inserir dados na tabela
$sql = "INSERT INTO new_table (cpf, nome, idConvenio, matricula, vlMultiploSaque, limiteUtilizado, limiteTotal, limiteDisponivel, vlLimiteParcela, limiteParcelaUtilizado, limiteParcelaDisponivel, vlMultiploCompra, vlLimiteCompra) VALUES ('$cpf', '$nome', '$idConvenio', '$matricula', '$vlMultiploSaque', '$limiteUtilizado', '$limiteTotal', '$limiteDisponivel', '$vlLimiteParcela', '$limiteParcelaUtilizado', '$limiteParcelaDisponivel', '$vlMultiploCompra', '$vlLimiteCompra')";
// gerando valores aleatórios para inserção na tabela



// executando a query
if (mysqli_query($conn, $sql)) {
    echo "Dados inseridos com sucesso na tabela clientes!";
} else {
    echo "Erro ao inserir dados na tabela clientes: " . mysqli_error($conn);
}




// encerrando a conexão com o banco de dados
mysqli_close($conn);
?>
