<?php
$title_page = "Blog | ";

include dirname(__FILE__) . '/../includes/header.php';
include_once '../../assets/db/noticiasController.php';
$post_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($post_id <= 0) {
	header('Location: ../blog.php');
	exit;
}
$noticia = buscarNoticia($pdo, $post_id);
if (!$noticia) {
	header('Location: ../blog.php');
	exit;
}

$stmt = $pdo->prepare("SELECT nome, mensagem, data_comentario FROM comentarios WHERE post_id = :post_id ORDER BY data_comentario DESC");
$stmt->execute(['post_id' => $post_id]);
$comentarios = $stmt->fetchAll();
?>

<main class="main mb-0" data-animate="top" data-delay="3">
	<aside class="banner_topo bnr-blog"></aside>
	<header class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>
						<span>Blog</span>
					</h1>
				</div>
			</div>
		</div>
	</header>

	<section class="mb-4">
		<div class="container">
			<div class="row">
				<article class="col-12">
					<div class="cabecalho mb-4 pb-2">
						<h2 class="topic5" style="max-width: 100%; word-wrap: break-word; overflow-wrap: break-word;"><?= htmlspecialchars($noticia['titulo']) ?></h2>
						<time style="color:#3056bb">
							<img src="assets/img/icones/calendar.jpg" style="vertical-align: baseline;" alt="img_das_notícias">
							<?= htmlspecialchars(date('d \d\e F \d\e Y', strtotime($noticia['data_publicacao']))) ?>
						</time>
						<hr class="">
					</div>
					<p class="text-center"><img src="assets/img/blog/<?= htmlspecialchars($noticia['imagem']) ?>" alt="" class="img-fluid mb-3" style="width: 100%; max-width: 600px;"></p>
					<p style="max-width: 100%; word-wrap: break-word; overflow-wrap: break-word;"><?= nl2br(htmlspecialchars($noticia['conteudo'])) ?></p>
					<p><a href="javascript:history.go(-2);" class="btn btn-1 mt-3"> &laquo; Voltar</a></p>
				</article>
				<div class="col-md-12 mt-4 col-lg-10 col-xl-8">
					<h5 class="topic5">Comentários</h5>
					<?php if (count($comentarios) > 0): ?>
						<?php foreach ($comentarios as $comentario): ?>
							<div class="comentario mb-3">
								<div class="d-block">
									<h6 class="fw-bold text-primary mb-1" style="word-break: break-word;"><?= htmlspecialchars($comentario['nome']) ?></h6>
									<p class="text-muted small mb-0">Compartilhado publicamente - <?= date("M Y", strtotime($comentario['data_comentario'])) ?></p>
								</div>
								<p class="mt-1 mb-1 pb-1 lh-sm text-break text-wrap" style="word-break: break-word;"><?= nl2br(htmlspecialchars($comentario['mensagem'])) ?></p>
							</div>
						<?php endforeach; ?>
					<?php else: ?><p>Nenhum comentário até o momento.</p><?php endif; ?>
				</div>

				<form class="py-3 border-0" action="./pages/blog/comment/process_comment.php" method="POST">
					<input type="hidden" name="post_id" value="<?= htmlspecialchars($post_id) ?>">
					<h5 class="topic5">Deixe um comentário</h5>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input class="form-control" type="text" name="nome" placeholder="Nome" style="border: 1px solid #98a8b1;" required>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea class="form-control" type="text" name="mensagem" placeholder="Mensagem" rows="4" style="border: 1px solid #98a8b1;" required></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="float-right pt-1">
								<button type="submit" class="btn btn-primary btn-sm">PUBLICAR</button>
							</div>
						</div>
					</div>
				</form>
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

<?php
include dirname(__FILE__) . '/../includes/footer.php';
?>