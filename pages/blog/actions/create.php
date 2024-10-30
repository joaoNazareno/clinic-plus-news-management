<?php
include '../../../assets/db/noticiasController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    $data_publicacao = $_POST['data_publicacao'];

    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
        $imagem = $_FILES['imagem']['name'];
        $temp_path = $_FILES['imagem']['tmp_name'];
        $upload_dir = 'C:/xampp/htdocs/clinicmais/assets/img/blog/'; 

        if (move_uploaded_file($temp_path, $upload_dir . $imagem)) {
            criarNoticia($pdo, $titulo, $conteudo, $data_publicacao_com_hora, $imagem);
            exit(header('Location: ../blog.php'));
        } else {
            echo "Erro ao mover o arquivo da imagem.";
        }
    } else {
        $imagem = 'img_padrão/sem_imagem.jpg'; 
        criarNoticia($pdo, $titulo, $conteudo, $data_publicacao_com_hora, $imagem);
        exit(header('Location: ../blog.php'));
    }
}

