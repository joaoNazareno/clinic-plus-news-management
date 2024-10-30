<?php
include '../../../assets/db/noticiasController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = htmlspecialchars(trim($_POST['nome']));
    $mensagem = htmlspecialchars(trim($_POST['mensagem']));
    $post_id = filter_input(INPUT_POST, 'post_id', FILTER_VALIDATE_INT);

    if (!empty($nome) && !empty($mensagem) && $post_id !== false) {
        try {
            $stmt = $pdo->prepare("INSERT INTO comentarios (nome, mensagem, data_comentario, post_id) VALUES (:nome, :mensagem, NOW(), :post_id)");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':mensagem', $mensagem);
            $stmt->bindParam(':post_id', $post_id);
            $stmt->execute();
            header("Location: /clinicmais/pages/blog/blog-detalhe.php?id=" . $post_id);
            exit();
        } catch (PDOException $e) {
            echo "Erro ao salvar o comentário: " . $e->getMessage();
        }
    } else {
        echo "Por favor, preencha todos os campos corretamente.";
    }
}
