<?php 

$title_page = "Exames | ";
include dirname(__FILE__). '/../includes/header.php'; ?>


<main class="main mb-0" data-animate="top" data-delay="3">
	 
<header class="page-header" >
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>
					<span>Exames</span>
				</h1>
			</div>
		</div>
	</div>
</header>

<section class=" mb-4">
	<div class="container">

		<div class="row mb-3">

			<div class="col-md-4 text-center flex-lg-last mb-4" data-animate="left" data-delay="3">
				<img src="assets/img/exames/ecocardiograma.jpg" alt="Ecocardiograma Bidimensional com Doppler Colorido" class="w-100" />
			</div><!-- col-lg-6  -->

			<div class="col-md-8 mb-4">
				<h2 class="topic4">Ecocardiograma Bidimensional com Doppler Colorido</h2>
				<p>
					O Ecocardiograma Bidimensional com Doppler Colorido é um exame de imagem não invasivo que utiliza ultrassom para avaliar a estrutura e o funcionamento do coração. Ele é fundamental no diagnóstico de diversas doenças cardíacas, permitindo que os médicos obtenham informações detalhadas sobre as câmaras cardíacas, válvulas, fluxo sanguíneo e movimento do músculo cardíaco.
				</p>
			</div>
 
		</div> <!-- row  -->

		<div class="row mb-3">

			<div class="col-md-4 text-center flex-lg-last mb-4" data-animate="left" data-delay="3">
				<img src="assets/img/exames/eletrocardiograma.jpg" alt="Eletrocardiograma" class="w-100" />
			</div><!-- col-lg-6  -->

			<div class="col-md-8 mb-4">
				<h2 class="topic4">Eletrocardiograma</h2>
				<p>
					O Eletrocardiograma (ECG) é um exame simples e não invasivo que registra a atividade elétrica do coração. Ele ajuda a detectar arritmias, bloqueios cardíacos, isquemias e outras condições que afetam o ritmo e o funcionamento cardíaco. Durante o exame, eletrodos são colocados no corpo do paciente para captar os sinais elétricos, que são traduzidos em um gráfico. O ECG é rápido, indolor e amplamente utilizado para monitorar a saúde do coração e diagnosticar problemas cardíacos.
				</p>
			</div>

		</div> <!-- row  -->

		<div class="row mb-3">

			<div class="col-md-4 text-center flex-lg-last mb-4" data-animate="left" data-delay="3">
				<img src="assets/img/exames/monitorizacao.jpg" alt="Monitorização Residencial da Pressão Arterial (MRPA)" class="w-100" />
			</div><!-- col-lg-6  -->

			<div class="col-md-8 mb-4">
				<h2 class="topic4">Monitorização Residencial da Pressão Arterial (MRPA)</h2>
				<p>
					A Monitorização Residencial da Pressão Arterial (MRPA) é um exame que registra a pressão arterial do paciente em casa ao longo de vários dias, geralmente em diferentes horários. Esse método permite uma avaliação mais precisa das variações de pressão, ajudando a diagnosticar hipertensão e monitorar a eficácia do tratamento. A MRPA é indicada para evitar o efeito do "jaleco branco" (elevação temporária da pressão em consultórios) e oferece um panorama mais realista da pressão arterial no cotidiano do paciente.
				</p>
			</div>

		</div> <!-- row  -->

		<div class="row mb-3">

			<div class="col-md-4 text-center flex-lg-last mb-4" data-animate="left" data-delay="3">
				<img src="assets/img/exames/holter.jpg" alt="Holter 24 horas" class="w-100" />
			</div><!-- col-lg-6  -->

			<div class="col-md-8 mb-4">
				<h2 class="topic4">Holter 24 horas</h2>
				<p>
					O Holter 24 horas é um exame que monitora continuamente a atividade elétrica do coração durante 24 horas, por meio de um aparelho portátil conectado ao paciente. Ele registra o ritmo e a frequência cardíaca ao longo do dia, permitindo a detecção de arritmias, palpitações e outras anormalidades que podem não ser captadas em exames de curta duração, como o eletrocardiograma. 
				</p>
			</div>

		</div> <!-- row  -->
 

		<div class="row mb-3">

			<div class="col-md-4 text-center flex-lg-last mb-4" data-animate="left" data-delay="3">
				<img src="assets/img/exames/cardiopulmonar.jpg" alt="Teste Cardiopulmonar/ Ergoespirometria" class="w-100" />
			</div><!-- col-lg-6  -->

			<div class="col-md-8 mb-4">
				<h2 class="topic4">Teste Cardiopulmonar/ Ergoespirometria</h2>
				<p>
					O Teste Cardiopulmonar, também conhecido como Ergoespirometria, é um exame que avalia simultaneamente o desempenho do coração, pulmões e músculos durante o exercício físico. O paciente realiza atividades em uma esteira ou bicicleta ergométrica, enquanto são monitoradas a respiração, o consumo de oxigênio e a frequência cardíaca. O exame é essencial para diagnosticar limitações cardiorrespiratórias, medir a capacidade física e auxiliar no planejamento de tratamentos ou treinos esportivos. 
				</p>
			</div>

		</div> <!-- row  -->

		<div class="row mb-3">

			<div class="col-md-4 text-center flex-lg-last mb-4" data-animate="left" data-delay="3">
				<img src="assets/img/exames/ergometrico.jpg" alt="Teste Ergométrico" class="w-100" />
			</div><!-- col-lg-6  -->

			<div class="col-md-8 mb-4">
				<h2 class="topic4">Teste Ergométrico</h2>
				<p>
					O Teste Ergométrico, ou teste de esforço, avalia o funcionamento do coração durante a prática de exercício físico controlado, geralmente em uma esteira ou bicicleta ergométrica. Enquanto o paciente se exercita, são monitorados a frequência cardíaca, pressão arterial e o eletrocardiograma. O objetivo é identificar arritmias, isquemias ou outras alterações cardíacas que possam ocorrer apenas com o aumento da demanda física.
				</p>
			</div>

		</div> <!-- row  -->

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