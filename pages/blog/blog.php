<?php
$title_page = "Blog | ";
include dirname(__FILE__) . '/../includes/header.php';
include '../../assets/db/noticiasController.php';

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
?>

<main class="main mb-0" data-animate="top" data-delay="3">
    <aside class="banner_topo bnr-blog"></aside>

    <header class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1><span>Blog</span></h1>
                </div>
            </div>
        </div>
    </header>

    <section class="mb-4">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <form class="row" method="GET" action="./pages/blog/blog.php">
                        <div class="col-lg-8 col-12 mb-3 mb-lg-0">
                            <input class="form-control form-control-lg" type="text" placeholder="Buscar" name="search" value="<?= htmlspecialchars($search) ?>">
                        </div>
                        <div class="col-lg-4 col-12 d-flex">
                            <button type="submit" class="btn btn-primary flex-fill mx-1">Buscar</button>
                            <button type="button" class="btn btn-primary flex-fill mx-1" data-toggle="modal" data-target="#addNewsModal">Nova Notícia</button>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <?php foreach ($noticias as $noticia): ?>
                        <div class="col-lg-4 mb-5" style="width: 40rem;">
                            <article class="card" style="width: 20rem;">
                                <a href="/clinicmais/pages/blog/blog-detalhe.php?id=<?= $noticia['id'] ?>" class="card-img-top zoom_image mb-3">
                                    <img src="assets/img/blog/<?= htmlspecialchars($noticia['imagem']) ?>" alt="Imagem da notícia" class="img-fluid card-img-top" style="height: 200px; object-fit: cover;" />
                                </a>
                                <div class="card-body" style="padding: 15px;">
                                    <h5 class="card-title text-truncate topic5" title="<?= htmlspecialchars($noticia['titulo']) ?>">
                                        <?= htmlspecialchars(substr($noticia['titulo'], 0, 35)) ?>...
                                    </h5>
                                    <p class="card-text" style="height: 80px; overflow: hidden; text-overflow: ellipsis;">
                                        <?= htmlspecialchars(substr($noticia['conteudo'], 0, 140)) ?>...
                                    </p>
                                    <div class="mt-5 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-warning mx-1" data-toggle="modal" data-target="#editNewsModal" onclick="editNews(<?= htmlspecialchars(json_encode($noticia)) ?>)">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" style="fill: white;">
                                                <path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path>
                                            </svg>
                                        </button>
                                        <a href="/clinicmais/pages/blog/actions/delete.php?id=<?= $noticia['id'] ?>" class="btn btn-sm btn-danger delete-btn mx-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: white;">
                                                <path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path>
                                                <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <a href="/clinicmais/pages/blog/blog-detalhe.php?id=<?= $noticia['id'] ?>" class="btn btn-primary btn-block ">Saiba mais</a>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-12 my-3">
                    <nav aria-label="Paginação">
                        <ul class="pagination justify-content-center">
                            <li class="page-item <?= $paginaAtual == 1 ? 'disabled' : '' ?>">
                                <a class="page-link" href="/clinicmais/pages/blog/blog.php?pagina=<?= max(1, $paginaAtual - 1) ?>&search=<?= urlencode($search) ?>" tabindex="-1">Anterior</a>
                            </li>
                            <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
                                <li class="page-item <?= $paginaAtual == $i ? 'active' : '' ?>">
                                    <a class="page-link" href="/clinicmais/pages/blog/blog.php?pagina=<?= $i ?>&search=<?= urlencode($search) ?>"><?= $i ?></a>
                                </li>
                            <?php endfor; ?>
                            <li class="page-item <?= $paginaAtual == $totalPaginas ? 'disabled' : '' ?>">
                                <a class="page-link" href="/clinicmais/pages/blog/blog.php?pagina=<?= min($totalPaginas, $paginaAtual + 1) ?>&search=<?= urlencode($search) ?>">Próximo</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <aside>
        <?php
        $banner = rand(1, 6);
        ?>
        <a href="<?= $config['whatsapp']; ?>" target="_blank">
            <img src="assets/img/banner/0<?= $banner; ?>.png" class="d-none d-md-block w-100">
            <img src="assets/img/banner/mobile0<?= $banner; ?>.jpg" class="d-block d-md-none w-100">
        </a>
    </aside>
</main>

<div class="modal fade" id="addNewsModal" tabindex="-1" role="dialog" aria-labelledby="addNewsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title topic5" id="addNewsModalLabel">Adicionar Nova Notícia</h5>
                <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x">X</i>
                </button>
            </div>
            <form method="post" action="./pages/blog/actions/create.php" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="titulo" class="form-label ">Título</label>
                        <input class="form-control form-control-lg " type="text" name="titulo" id="titulo" placeholder="Título" maxlength="400" required>
                    </div>
                    <div class="mb-3">
                        <label for="conteudo" class="form-label">Conteúdo</label>
                        <textarea class="form-control form-control-lg" name="conteudo" id="conteudo" placeholder="Conteúdo" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="imagem" class="form-label">Imagem:</label>
                        <input class="form-control form-control-lg" type="file" name="imagem" id="imagem" accept="image/*">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary text-uppercase" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-sm btn-primary text-uppercase">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editNewsModal" tabindex="-1" role="dialog" aria-labelledby="editNewsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editNewsModalLabel">Editar Notícia</h5>
                <button type="button" class="btn" data-dismiss="modal" aria-label="Close"><i class="bx bx-x">X</i></button>
            </div>
            <form id="editNewsForm" method="post" action="./pages/blog/actions/update.php" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="id" id="editNewsId">
                    <div class="mb-3">
                        <label for="imagem" class="form-label">Mudar Imagem:</label>
                        <input class="form-control form-control-lg" type="file" name="imagem" id="imagem" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="editNewsTitle" class="form-label">Título</label>
                        <input class="form-control form-control-lg" type="text" name="titulo" id="editNewsTitle" placeholder="Título" maxlength="100" required>
                    </div>
                    <div class="mb-3">
                        <label for="editNewsContent" class="form-label">Conteúdo</label>
                        <textarea class="form-control form-control-lg" name="conteudo" id="editNewsContent" placeholder="Conteúdo" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary text-uppercase" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-sm btn-primary text-uppercase">Salvar Alterações</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include dirname(__FILE__) . '/../includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/clinicmais/assets/js/sweetalert.js"></script>
<script src="/clinicmais/assets/js/modal.js"></script>