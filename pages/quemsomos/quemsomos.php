<?php 

$title_page = "Quem somos | ";
include dirname(__FILE__). '/../includes/header.php'; ?>


<main class="main mb-0" data-animate="top" data-delay="3">

<header class="page-header" >
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>
					<span>Quem somos</span>
				</h1>
			</div>
		</div>
	</div>
</header>

<section class=" mb-4">
	<div class="container">
		<div class="row">

		<div class="col-lg-6 mb-5">

			<p>
				A Clinic+ Diagnóstico é uma empresa dedicada a oferecer serviços especializados em saúde, com foco em diagnósticos precisos e consultas cardiológicas. A clínica atua com uma equipe altamente qualificada de profissionais médicos, comprometidos em fornecer atendimento de excelência, pautado em segurança, tecnologia de ponta e um cuidado personalizado para cada paciente.
			</p>

			<p>
				Com uma infraestrutura moderna, a Clinic+ Diagnóstico oferece uma ampla gama de exames de diagnóstico que auxiliam na detecção precoce de doenças, permitindo um tratamento mais eficaz e eficiente. Entre os exames realizados estão o eletrocardiograma, ecocardiograma, teste de esforço, Holter, e exames laboratoriais, todos fundamentais para monitorar a saúde cardíaca e de outros sistemas do corpo.
			</p>

			<h4 class="topic ">
				Oferecemos excelência em 
				cuidados cardiológicos. <br/>
				Agende seu check-up cardiológico.
			</h4>

			<a href="<?=$config['whatsapp']?>" target="_blank" class="btn btn-1 pl-3">
				QUERO AGENDAR MEU EXAME
				<img src="assets/img/icones/ico-whatsapp.png" alt="whatsapp">
			</a>
		</div><!-- col-lg-6  -->

		<div class="col-lg-6 text-center  mb-5" data-animate="left" data-delay="3">
			<img src="assets/img/quemsomos.jpg" alt="" class="img-fluid" />
		</div><!-- col-lg-6  -->
 
		</div><!-- row -->

		<div class="row justify-content-center mt-3"> 
			<div class="col-lg-55 col-md-6 text-center mb-5">
				<div class="boxe_home">

					<div class="icone">
						<img src="assets/img/icones/ico-1.png" alt="" />
					</div>

					<h4 class="tt">Prevenção</h4>

					<p>
						Com equipamentos modernos e uma equipe altamente capacitada, garantimos resultados rápidos e precisos para sua saúde cardíaca.
					</p>
				</div><!-- boxe_home -->
			</div><!-- col-lg-3 -->

			<div class="col-lg-55 col-md-6 text-center mb-5">
				<div class="boxe_home">

					<div class="icone">
						<img src="assets/img/icones/ico-2.png" alt="" />
					</div>

					<h4 class="tt">Exames com precisão</h4>

					<p>
						Oferecemos consultas cardiológicas, além de exames de diagnóstico, para prevenir e tratar doenças cardiovasculares. 
					</p>
				</div><!-- boxe_home -->
			</div><!-- col-lg-3 -->

			<div class="col-lg-55 col-md-6 text-center mb-5">
				<div class="boxe_home">

					<div class="icone">
						<img src="assets/img/icones/ico-3.png" alt="" />
					</div>

					<h4 class="tt">Diagnóstico Seguro</h4>

					<p>
						Oferecemos consultas detalhadas e exames de diagnóstico que ajudam a identificar e tratar problemas circulatórios. 
					</p>
				</div><!-- boxe_home -->
			</div><!-- col-lg-3 -->

			<div class="col-lg-55 col-md-6 text-center mb-5">
				<div class="boxe_home">

					<div class="icone">
						<img src="assets/img/icones/ico-4.png" alt="" />
					</div>

					<h4 class="tt">Check-up Cardiológico</h4>

					<p>
						Nossa clínica está equipada para fornecer um diagnóstico completo e confiável, ajudando você a manter seu coração saudável.
					</p>
				</div><!-- boxe_home -->
			</div><!-- col-lg-3 -->

			<div class="col-lg-55 col-md-6 text-center mb-5">
				<div class="boxe_home">

					<div class="icone">
						<img src="assets/img/icones/ico-05.png" alt="" />
					</div>

					<h4 class="tt">Cardiologia do Esporte</h4>

					<p>
						Se você é um corredor de fim de semana, um amante do fitness ou simplesmente alguém que pratica exercícios regularmente.
					</p>
				</div><!-- boxe_home -->
			</div><!-- col-lg-3 -->
 
		</div> <!-- row -->
	</div> <!-- container  -->
</section>


<aside>
<?php
	$banner = rand(1,6);
?>
	<a href="<?=$config['whatsapp'];?>" target="_blank">
		<img src="assets/img/banner/0<?=$banner;?>.png" class="d-none d-md-block w-100">
		<img src="assets/img/banner/mobile0<?=$banner;?>.jpg" class="d-block d-md-none w-100">
	</a>
</aside>

</main>


<?php 

include dirname(__FILE__). '/../includes/footer.php';

?>