
<?php
include "conexao.php";

header("Content-Type: application/json");
$dados = json_decode(file_get_contents("php://input"), true);

if (!empty($dados)) {
    $stmt = $conexao->prepare("INSERT INTO pedidos (nome, preco) VALUES (?, ?)");

    foreach ($dados as $item) {
        $nome = $item['nome'];
        $preco = $item['preco'];
        $stmt->bind_param("sd", $nome, $preco);
        $stmt->execute();
    }

    echo json_encode(["status" => "sucesso"]);
    $stmt->close();
} else {
    echo json_encode(["status" => "erro", "mensagem" => "Nenhum dado recebido"]);
}

$conexao->close();
?>
