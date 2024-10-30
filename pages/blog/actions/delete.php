<?php
include '../../../assets/db/noticiasController.php';
$id = $_GET['id'];
excluirNoticia($pdo, $id);
exit(header('Location: ../blog.php'));
