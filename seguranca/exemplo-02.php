<?php

// Obtendo o ID da URL, ou definindo 1 como padrão
$id = (isset($_GET['id'])) ? $_GET['id'] : 3;

if (!is_numeric($id) || strlen($id) > 5 ) {
    exit("ID inválido");
}

// Estabelecendo a conexão com o banco de dados
$conn = mysqli_connect("localhost", "root", "", "dbphp7");

// Verificando se a conexão foi bem-sucedida
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Montando a consulta SQL
$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

// Executando a consulta
$exec = mysqli_query($conn, $sql);

// Verificando se a consulta retornou resultados
if ($exec) {
    // Iterando pelos resultados e exibindo os dados
    while ($resultado = mysqli_fetch_object($exec)) {
        echo $resultado->deslogin . "<br>";

        var_dump($resultado);
    }
} else {
    // Exibindo erro caso a consulta falhe
    echo "Erro na consulta: " . mysqli_error($conn);
}

// Fechando a conexão
mysqli_close($conn);

?>
