<?php
session_start();
include dirname(__FILE__). '/../../vars.php';
include dirname(__FILE__). '/../../helpers.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
  echo "<base href=\"http://localhost/clinicmais/\"/>";
  $menuativo = basename($_SERVER['SCRIPT_NAME']);
  $titulo = "Clinic+";
?>
   
<title><?php echo $title_page; echo $titulo ?></title>
  
<!-- SEO -->
<link rel="canonical" href="<?php echo $url_current;?>" />
<meta name="description" content="<?=$config['description'];?>">
<meta name="robots" content="index, follow">
<meta name="rating" content="General">
<meta name="revisit" content="1 month">
<meta name="keywords" content="<?=$config['keywords'];?>">
<meta property="og:locale" content="pt_BR" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php echo $title_page; ?>" />
<meta property="og:description" content="" />
<meta property="og:url" content="https://<?php echo $_SERVER['HTTP_HOST']; echo $_SERVER['REQUEST_URI']; ?>" />
<meta property="og:site_name" content="<?php echo $title_page; ?>" />
<meta property="og:image" content="" />
<meta property="og:image:alt" content="#" />
<meta property="og:image:type" content="image/jpeg" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?php echo $title_page; ?>" />
<!-- FIM SEO -->

<link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
<link rel="manifest" href="assets/img/site.webmanifest">
<link rel="mask-icon" href="assets/img/safari-pinned-tab.svg" color="#481e06">
<meta name="msapplication-TileColor" content="#481e06">
<meta name="theme-color" content="#481e06">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/main.css">

<?php if( $_SERVER['SERVER_NAME'] != 'micro-2' ) : ?>

<?php endif; ?>
</head>
<body class="anime-scroll" id="inicio">

<header class="header">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-xl-2 pr-lg-0 col-10  py-3">
        <a href="./" class="logo" data-animate="top" data-delay="2">
          <img src="assets/img/logo.png" class="img-fluid" alt="Clinic+">
        </a>
      </div>

      <div class="col-xl-4  py-3 d-none d-xl-block" data-animate="top" data-delay="2">
        <p>
          Consultas cardiológicas e vasculares<br>
          Exames de diagnóstico
        </p>
      </div>

      <div class="col-xl-3  py-3 d-none d-xl-block" data-animate="top" data-delay="2">
        <a href="">
          <img src="assets/img/agende-seu-exame.png" alt="" />
        </a>
      </div>

      <div class="col-xl-3  py-3 d-none d-xl-block" data-animate="top" data-delay="2">
        <a href="">
          <img src="assets/img/resultado-online.png" alt="" />
        </a>
      </div>

      <div class="col-2 d-xl-none text-end">
        <label for="menu-toggle" class="pull"></label>
      </div>

  </div>
</div>

        <input type="checkbox" id="menu-toggle"/>
    <nav id="menu" role="navigation" data-animate="top" data-delay="3" >
          <div class="d-block d-xl-none mb-3 p-3">
            <label for="menu-toggle" class="pull bgplb"></label>
          </div>
          <ul>
            <li><a href="./" <?php if($menuativo == 'index.php'): echo 'class="active"'; endif;?>>Inicial</a></li>
            <li><a href="quem-somos" <?php if($menuativo == 'quemsomos.php'): echo 'class="active"'; endif;?> >Quem Somos</a></li>
            <li><a href="exames" <?php if($menuativo == 'exames.php'): echo 'class="active"'; endif;?> >Exames</a></li>
            <li><a href="medicos" <?php if($menuativo == 'medicos.php'): echo 'class="active"'; endif;?> >Médicos</a></li>
            <li><a href="convenios" <?php if($menuativo == 'convenios.php'): echo 'class="active"'; endif;?> >Convênios</a></li>
            <li><a href="pages/blog/blog.php" <?php if($menuativo == 'blog.php'): echo 'class="active"'; endif;?>>Blog</a></li>
            <li><a href="fale-conosco" <?php if($menuativo == 'contato.php'): echo 'class="active"'; endif;?> >Fale Conosco</a></li>

            <li>
                <a href="<?=$config['instagram'];?>" class="d-inline-block" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
                </a>

                <a href="<?=$config['facebook'];?>" class="d-inline-block" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg>
                </a>
            </li>
          </ul>
        </nav>
</header>


