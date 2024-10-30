<?php
date_default_timezone_set('America/Sao_Paulo');
$title_page = "Blog | ";
include '../../../assets/db/noticiasController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    $data_publicacao = $_POST['data_publicacao'] . ' ' . date('H:i:s');

    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
        $imagem = $_FILES['imagem']['name'];
        $caminhoImagem = "C:/xampp/htdocs/clinicmais/assets/img/blog/" . $imagem;

        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoImagem)) {
            atualizarNoticia($pdo, $id, $titulo, $conteudo, $data_publicacao, $imagem);
        } else {
            echo "Erro ao salvar a nova imagem. Por favor, tente novamente.";
            exit;
        }
    } 
    else {
        atualizarNoticia($pdo, $id, $titulo, $conteudo, $data_publicacao);
    }
    exit(header('Location: ../blog.php'));
}
