<?php
include '../../../assets/db/noticiasController.php';

$itensPorPagina = 6;
$paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$offset = ($paginaAtual - 1) * $itensPorPagina;
$search = isset($_GET['search']) ? $_GET['search'] : '';

if ($paginaAtual < 1) {
    $paginaAtual = 1;
}

$totalNoticias = contarNoticias($pdo, $search);
$totalPaginas = ceil($totalNoticias / $itensPorPagina);
$noticias = listarNoticias($pdo, $search, $offset, $itensPorPagina);

header("Location: ../blog.php?search=" . urlencode($search) . "&pagina=$paginaAtual");
exit;
