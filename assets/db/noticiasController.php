<?php
include 'db.php';

function listarNoticias($pdo, $search = '', $offset = 0, $itensPorPagina = 6)
{
    $sql = "SELECT * FROM noticias";
    $params = [];

    if (!empty($search)) {
        $sql .= " WHERE titulo LIKE :search OR conteudo LIKE :search";
        $params[':search'] = "%$search%";
    }

    $sql .= " ORDER BY data_publicacao DESC LIMIT :offset, :itensPorPagina";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->bindValue(':itensPorPagina', $itensPorPagina, PDO::PARAM_INT);

    foreach ($params as $key => $value) {
        $stmt->bindValue($key, $value);
    }

    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function buscarNoticia($pdo, $id)
{
    $stmt = $pdo->prepare("SELECT titulo, conteudo, data_publicacao, imagem FROM noticias WHERE id = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function criarNoticia($pdo, $titulo, $conteudo, $data_publicacao, $imagem)
{
    $stmt = $pdo->prepare("INSERT INTO noticias (titulo, conteudo, data_publicacao, imagem) VALUES (:titulo, :conteudo, :data_publicacao, :imagem)");
    return $stmt->execute([
        'titulo' => $titulo,
        'conteudo' => $conteudo,
        'data_publicacao' => $data_publicacao,
        'imagem' => $imagem
    ]);
}


function atualizarNoticia($pdo, $id, $titulo, $conteudo, $data_publicacao, $imagem = null)
{
    if ($imagem) {
        $stmt = $pdo->prepare("UPDATE noticias SET titulo = :titulo, conteudo = :conteudo, data_publicacao = :data_publicacao, imagem = :imagem WHERE id = :id");
        return $stmt->execute([
            'id' => $id,
            'titulo' => $titulo,
            'conteudo' => $conteudo,
            'data_publicacao' => $data_publicacao,
            'imagem' => $imagem
        ]);
    } 
    else {
        $stmt = $pdo->prepare("UPDATE noticias SET titulo = :titulo, conteudo = :conteudo, data_publicacao = :data_publicacao WHERE id = :id");
        return $stmt->execute([
            'id' => $id,
            'titulo' => $titulo,
            'conteudo' => $conteudo,
            'data_publicacao' => $data_publicacao
        ]);
    }
}

function excluirNoticia($pdo, $id)
{
    $stmt = $pdo->prepare("DELETE FROM noticias WHERE id = :id");
    return $stmt->execute(['id' => $id]);
}

function contarNoticias($pdo, $busca = '')
{
    $query = "SELECT COUNT(*) as total FROM noticias";

    if (!empty($busca)) {
        $query .= " WHERE titulo LIKE :busca OR conteudo LIKE :busca";
    }

    $stmt = $pdo->prepare($query);

    if (!empty($busca)) {
        $buscaParam = "%$busca%";
        $stmt->bindParam(':busca', $buscaParam, PDO::PARAM_STR);
    }

    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    return $resultado['total'];
}
