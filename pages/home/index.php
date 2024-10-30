<?php 

$title_page = "";
include dirname(__FILE__). '/../includes/header.php'; ?>


<main class="main mb-0">
<section class="painel mb-2" data-animate="fade" data-delay="3">
	<!-- Slider main container -->
	<div class="swiper swiper1">
	  <!-- Additional required wrapper -->
	  <div class="swiper-wrapper">

      	<div class="swiper-slide">
	    	<a href="#">
	    		<picture>
		    		<source srcset="assets/img/painel/01.jpg" media="(min-width: 700px)">
		    		<img src="assets/img/painel/mobile01.jpg" class="w-100" alt="">
		    	</picture>
		    </a>
	    </div>

      	<div class="swiper-slide">
	    	<a href="#">
	    		<picture>
		    		<source srcset="assets/img/painel/02.jpg" media="(min-width: 700px)">
		    		<img src="assets/img/painel/mobile02.jpg" class="w-100" alt="">
		    	</picture>
		    </a>
	    </div>

      	<div class="swiper-slide">
	    	<a href="#">
	    		<picture>
		    		<source srcset="assets/img/painel/03.jpg" media="(min-width: 700px)">
		    		<img src="assets/img/painel/mobile03.jpg" class="w-100" alt="">
		    	</picture>
		    </a>
	    </div>

      	<div class="swiper-slide">
	    	<a href="#">
	    		<picture>
		    		<source srcset="assets/img/painel/04.jpg" media="(min-width: 700px)">
		    		<img src="assets/img/painel/mobile04.jpg" class="w-100" alt="">
		    	</picture>
		    </a>
	    </div>

	  </div>

	  <!-- If we need navigation buttons -->
	  <div class="swiper-button-prev swiper-button-prev1"></div>
	  <div class="swiper-button-next swiper-button-next1"></div>

	  <!-- If we need scrollbar -->
	  <!-- <div class="swiper-scrollbar"></div> -->
	</div>

	<!-- If we need pagination -->
	<div class="swiper-pagination swiper-pagination1"></div>
</section>


<section class="pt-5 pb-2" data-animate="top" data-delay="3">
	<div class="container">
		<div class="row"> 

			<div class="col-lg-9 offset-lg-2 text-center mb-5">
				<h3 class="topic2">QUEM SOMOS</h3>
				<h2 class="topic mb-4">Excelência em cuidados cardiológicos</h2>

				<p>
					Seja bem-vindo a <strong>Clinic+</strong>. Somos um time multidisciplinar de excelência técnica, pronto para garantir um melhor atendimento, com seguraça e acolhimento no tratamento de doeças cardiológicas.<br>
					Somos uma equipe gabaritada, de alto padrão técnico.

				</p>
			</div>

		</div><!-- row -->

		<div class="row justify-content-center"> 
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
	</div> <!-- container -->
</section>

 
<section class="bg1 py-5" data-animate="top" data-delay="3">
	<div class="container">
		<div class="row"> 

			<div class="col-lg-5 pt-lg-5">

				<h2 class="topic text-white mb-4">
					Agende seu check-up cardiológico hoje 
				</h2>

				<p>
					Faça um compromisso consigo mesmo hoje: agende seu check-up cardiológico e dê um passo em direção a uma vida mais saudável e plena. Seu coração agradece!
				</p>
				<br>

				<a href="<?=$config['whatsapp']?>" target="_blank" class="btn btn-1 pl-3">
					QUERO AGENDAR MEU EXAME
					<img src="assets/img/icones/ico-whatsapp.png" alt="whatsapp" />
				</a>
			</div>
 
		</div> <!-- row -->
	</div> <!-- container -->
</section>
 
<section class="py-5 pt-lg-3" data-animate="top" data-delay="3">
	<div class="container">
		<div class="row"> 

			<div class="col-lg-12 text-center mb-4">

				<h3 class="topic2">
					Métodos de Diagnóstico
				</h3>
				<h2 class="topic">
					Sua saúde cardiológica em boas mãos
				</h2>

				<p>
					Oferecemos exames de diagnóstico cardiológicos e vasculares, utilizando tecnologia de ponta. Estamos equipados<br>
					 para detectar qualquer anomalia com rapidez e precisão, permitindo um tratamento eficaz e direcionado.
				</p>
			</div>


			<div class="col-lg-4 col-md-6 text-center mb-5">
				<h4 class="topic3">Ecocardiograma Bidimensional com Doppler Colorido</h4>
				<div class="zoom_image">
					<img src="assets/img/metodos/1.jpg" alt="Ecocardiograma Bidimensional" />
				</div>
			</div> <!-- col-lg-4 -->

			<div class="col-lg-4 col-md-6 text-center mb-5">
				<h4 class="topic3">Eletrocardiograma</h4>
				<div class="zoom_image">
					<img src="assets/img/metodos/2.jpg" alt="Eletrocardiograma" />
				</div>
			</div> <!-- col-lg-4 -->

			<div class="col-lg-4 col-md-6 text-center mb-5">
				<h4 class="topic3">Monitorização Residencial da Pressão Arterial (MRPA)</h4>
				<div class="zoom_image">
					<img src="assets/img/metodos/3.jpg" alt="MRPA" />
				</div>
			</div> <!-- col-lg-4 -->

			<div class="col-lg-4 col-md-6 text-center mb-5">
				<h4 class="topic3">Holter 24 horas</h4>
				<div class="zoom_image">
					<img src="assets/img/metodos/4.jpg" alt="Holter 24 horas" />
				</div>
			</div> <!-- col-lg-4 -->

			<div class="col-lg-4 col-md-6 text-center mb-5">
				<h4 class="topic3">Teste Cardiopulmonar/ Ergoespirometria</h4>
				<div class="zoom_image">
					<img src="assets/img/metodos/5.jpg" alt="Cardiopulmonar" />
				</div>
			</div> <!-- col-lg-4 -->

			<div class="col-lg-4 col-md-6 text-center mb-5">
				<h4 class="topic3">Teste Ergométrico</h4>
				<div class="zoom_image">
					<img src="assets/img/metodos/6.jpg" alt="Teste Ergométrico" />
				</div>
			</div> <!-- col-lg-4 -->

			<div class="col-lg-12 text-center">
				<a href="<?=$config['whatsapp']?>" target="_blank" class="btn btn-1 pl-3">
					DÚVIDAS?  FALE CONOSCO
					<img src="assets/img/icones/ico-whatsapp.png" alt="whatsapp" />
				</a>
			</div>
 
		</div> <!-- row -->
	</div> <!-- container -->
</section>
 

<section class="py-5 bg2" data-animate="zoom" data-delay="3">
	<div class="container">
		<div class="row">

			<div class="col-lg-8 offset-lg-2 px-lg-0 text-center mb-4">
				<h3 class="topic2">EQUIPE MÉDICA</h3>
				<h2 class="topic text-white">Profissionais dedicados com a sua saúde</h2>

				<p class="text-white">
					Contamos com uma equipe médica altamente qualificada, composta por especialistas em cardiologia e medicina vascular, dedicados a oferecer o melhor cuidado para a sua saúde.
				</p>
			</div>


			<div class="col-lg-10 offset-lg-1 text-center mb-4">

					<!-- Slider main container -->
					<div class="swiper swiper2">
					  <!-- Additional required wrapper -->
					  <div class="swiper-wrapper">

					    <div class="swiper-slide">
					      <div class="equipe_box text-center">
					  		<img src="assets/img/equipe/1.jpg" alt="">

					  			<h3 class="tt">Dr. Felipe Andrade da Silva</h3>

					  			<p>
					  				Dr. Felipe Andrade da Silva
					  			</p>
					      </div> <!-- dicas__item -->
					    </div><!-- swiper-slide --> 

					    <div class="swiper-slide">
					      <div class="equipe_box text-center">
					  		<img src="assets/img/equipe/2.jpg" alt="">

					  			<h3 class="tt">Dr. Felipe Andrade da Silva</h3>

					  			<p>
					  				Dr. Felipe Andrade da Silva
					  			</p>
					      </div> <!-- dicas__item -->
					    </div><!-- swiper-slide --> 

					    <div class="swiper-slide">
					      <div class="equipe_box text-center">
					  		<img src="assets/img/equipe/3.jpg" alt="">

					  			<h3 class="tt">Dr. Felipe Andrade da Silva</h3>

					  			<p>
					  				Dr. Felipe Andrade da Silva
					  			</p>
					      </div> <!-- dicas__item -->
					    </div><!-- swiper-slide --> 

					  </div><!-- swiper-wrapper -->
					</div><!-- swiper2 -->

					  <!-- If we need navigation buttons -->
					  <div class="swiper-button-prev swiper-button-prev2"></div>
					  <div class="swiper-button-next swiper-button-next2"></div>

			</div><!-- col-12 -->

			<div class="col-12 text-center mt-3">
				<a href="medicos" class="btn btn-1">CONHEÇA TODA A EQUIPE MÉDICA</a>
			</div>


		</div> <!-- row  --> 
	</div><!-- container  --> 
</section>

<section class="py-5" data-animate="zoom" data-delay="3">
	<div class="container">
		<div class="row">

			<div class="col-lg-12 text-center mb-4">
				<h3 class="topic2">CONVÊNIOS</h3>
				<h2 class="topic">Contamos com uma variedade de convênios</h2>

				<p>
					Conheça os convênios da Clinic+ e agende agora seu atendimento conosco
				</p>
			</div>

			<div class="col-lg-12 text-center mb-4">

					<!-- Slider main container -->
					<div class="swiper swiper3">
					  <!-- Additional required wrapper -->
					  <div class="swiper-wrapper">

					  	<?php for ($i=1; $i <=16 ; $i++) {  ?>
					  		
					    <div class="swiper-slide">
					    	<div class="marcas">
					    		<img src="assets/img/marcas/<?=$i;?>.jpg" alt="" />
					    	</div>
					    </div><!-- swiper-slide --> 
					  	<?php } ?>

					  </div><!-- swiper-wrapper -->
					</div><!-- swiper2 -->

					  <!-- If we need navigation buttons -->
					  <div class="swiper-button-prev swiper-button-prev3"></div>
					  <div class="swiper-button-next swiper-button-next3"></div>

			</div><!-- col-12 -->
 
			
			<div class="col-12 text-center mt-3">
				<a href="convenios" class="btn btn-1">TODOS OS NOSSOS CONVÊNIOS</a>
			</div>


		</div> <!-- row  --> 
	</div><!-- container  --> 
</section>
		
<section class="bg3 py-5" data-animate="top" data-delay="3">
	<div class="container">
		<div class="row">


			<div class="col-lg-12 text-center mb-4">
				<h3 class="topic2">BLOG</h3>
				<h2 class="topic">Notícias e dicas importantes</h2>
			</div>

			<div class="col-lg-4">
				<div class="blog_home">
					<a href="blog/detalhe" class="zoom_image">
						<img src="assets/img/blog1.jpg" alt="">
					</a>

					<a href="blog/detalhe" class="chamada">
						<h2 class="tt mb-3">Doenças do coração matam quase um terço dos brasileiros</h2>

						<p>
							Atualmente, cerca de 14 milhões de pessoas têm alguma enfermidade cardiovascular no Brasil. Apesar da importância da prevenção, 23% dos brasileiros nunca foram ao cardiologista.
						</p>	
					</a>
					
				</div>
			</div> <!-- col-lg-3  -->

			<div class="col-lg-8">
				<div class="row mb-3">
					<div class="col-md-4">
						<a href="blog/detalhe" class="mr-3 zoom_image mb-3">
							<img src="assets/img/blog2.jpg" alt="" />
						</a>
					</div>
					<div class="col-md-8">
						<a href="blog/detalhe" class="chamada2 d-block">
							<h3 class="tt mb-3">Exames Cardiológicos para avaliar a saúde do coração</h3>
							<p>
								Exames de cardiologia podem ajudar a identificar o risco de doenças cardíacas de uma forma melhor e mais assertiva que os exames tradicionais.
							</p>
						</a>
					</div>
				</div> <!-- row -->

				<div class="row mb-3">
					<div class="col-md-4">
						<a href="blog/detalhe" class="mr-3 zoom_image mb-3">
							<img src="assets/img/blog3.jpg" alt="" />
						</a>
					</div>
					<div class="col-md-8">
						<a href="blog/detalhe" class="chamada2 d-block">
							<h3 class="tt mb-3">Sociedade Brasileira de Cardiologia lança novas orientações para o diagnóstico de hipertensão</h3>
							<p>
								De cada dez adultos, três têm pressão alta. O acompanhamento médico, remédios e uma vida regrada são algumas ações que garantem o controle a hipertensão.
							</p>
						</a>
					</div>
				</div> <!-- row -->

				<div class="row mb-3">
					<div class="col-md-4">
						<a href="blog/detalhe" class="mr-3 zoom_image mb-3">
							<img src="assets/img/blog4.jpg" alt="" />
						</a>
					</div>
					<div class="col-md-8">
						<a href="blog/detalhe" class="chamada2 d-block">
							<h3 class="tt mb-3">Medicina nuclear auxilia no diagnóstico precoce de isquemia</h3>
							<p>
								Dia Mundial do Coração, celebrado no dia 29 de setembro, alerta para a importância da prevenção de doenças cardiovasculares
							</p>
						</a>
					</div>
				</div> <!-- row -->

			</div> <!-- col-lg-8 -->

			<div class="col-12 text-center mt-3 mb-lg-4">
				<a href="blog/" class="btn btn-2">MAIS NOTÍCIAS E DICAS</a>
			</div>

		</div> <!-- row  -->
	</div> <!-- container  -->
</section>

<section class="bg4 py-5" data-animate="top" data-delay="3">
	<div class="container">
		<div class="row">

			<div class="col-lg-6 offset-lg-6 pt-lg-5 pl-lg-5">

				<h2 class="topic text-white">
					Cuide da sua saúde e de quem você ama na Clinic+ 
				</h2>

				<p class="text-white">
					Estamos aqui para oferecer todas as alternativas para diagnóstico e tratamento com humanização. Buscando o que há de melhor para a sua saúde. Acreditamos que quanto mais perto estamos dos nossos pacientes mais chances de um cuidado positivo e com sucesso.
				</p>

				<a href="<?=$config['whatsapp'];?>" class="btn btn-1">Marque sua consulta! <img src="assets/img/icones/ico-whatsapp.png" alt="" /></a>

			</div> <!-- col-lg-6  -->

		</div> <!-- row  -->
	</div> <!-- container  -->
</section>

<section class="py-5" data-animate="top" data-delay="3">
	<div class="container">
		<div class="row">

			<div class="col-lg-12 text-center">
				<h3 class="topic2">LOCALIZAÇÃO</h3>
				<h2 class="topic mb-4">Estamos bem localizados no centro de Recife</h2>	

				<p>
					Localizada no coração do bairro das Graças, a Clinic+ tem rápido acesso e fácil locomoção.
				</p>
			</div> <!-- col-lg-12 -->
			
			<div class="col-lg-12 text-center mb-4">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15802.219269958374!2d-34.89911!3d-8.044747!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18fb3c77df73%3A0xccb229b243f21fa9!2sClinic%2B%20Diagn%C3%B3stico!5e0!3m2!1spt-BR!2sbr!4v1725032944225!5m2!1spt-BR!2sbr" width="100%" height="315" style="border:0; display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div> <!-- col-lg-12 -->

			<div class="col-lg-4">
				<div class="media">
					<div class="icone mt-0">
						<img src="assets/img/icones/ico-5.png" alt="" />
					</div>
					<div class="media-body pl-3">
						<h6 class="tt">Endereço</h6>
						<p>
							<small>
							R. Amélia, 430 - Graças, <br>
							Recife - PE, 52011-050
							</small>
						</p>
					</div>
				</div>
			</div>
			<!-- col-lg-4 -->

			<div class="col-lg-4">
				<div class="media">
					<div class="icone mt-0">
						<img src="assets/img/icones/ico-6.png" alt="" />
					</div>
					<div class="media-body pl-3">
						<h6 class="tt">Horário de funcionamento</h6>
						<p>
							<small>
							Segunda a Sexta: 07:30h às 17:30h
							</small>
						</p>
					</div>
				</div>
			</div>
			<!-- col-lg-4 -->

			<div class="col-lg-4">
				<div class="media">
					<div class="icone mt-0">
						<img src="assets/img/icones/ico-7.png" alt="" />
					</div>
					<div class="media-body pl-3">
						<h6 class="tt">Agendamento</h6>
						<p>
							<small>
							(81) 99853-2900<br/>
							(81) 3048-3074
							</small>
						</p>
					</div>
				</div>
			</div>
			<!-- col-lg-4 -->

		</div> <!-- row  -->
	</div> <!-- container  -->
</section>

<section class="bg3 py-5" data-animate="top" data-delay="3">
	<div class="container">
		<div class="row">

			<div class="col-lg-12 text-center">
				<h3 class="topic2">COMENTÁRIOS</h3>
				<h2 class="topic mb-4">Depoimentos de nossos pacientes</h2>	

				<p>
					Deixe sua avaliação da nossa Clínica no Google!<br/>
					Seu comentário é muito importante pra nós.
				</p>
			</div>
			<!-- col-lg-4 -->

			<div class="col-lg-12 text-center mb-4">

					<!-- Slider main container -->
					<div class="swiper swiper4">
					  <!-- Additional required wrapper -->
					  <div class="swiper-wrapper">
					  		
					    <div class="swiper-slide">
					    	<div class="depoimento">
					    		<figure>
					    			<img src="assets/img/depoimentos/1.png" alt="" />
					    		</figure>

					    		<h5 class="tt">Antônio Souza</h5>

					    		<p>
					    			Equipe muito atenciosa e de rápida resposta
					    		</p>

					    		<a href="" class="leia">Leia mais</a>
					    	</div>
					    </div><!-- swiper-slide --> 
					  		
					    <div class="swiper-slide">
					    	<div class="depoimento">
					    		<figure>
					    			<img src="assets/img/depoimentos/2.png" alt="" />
					    		</figure>

					    		<h5 class="tt">Paula Cristina</h5>

					    		<p>
					    			Equipe muito atenciosa e de rápida resposta
					    		</p>

					    		<a href="" class="leia">Leia mais</a>
					    	</div>
					    </div><!-- swiper-slide --> 

					    <div class="swiper-slide">
					    	<div class="depoimento">
					    		<figure>
					    			<img src="assets/img/depoimentos/3.png" alt="" />
					    		</figure>

					    		<h5 class="tt">Júlia Andrade</h5>

					    		<p>
					    			Equipe muito atenciosa e de rápida resposta
					    		</p>

					    		<a href="" class="leia">Leia mais</a>
					    	</div>
					    </div><!-- swiper-slide --> 

					    <div class="swiper-slide">
					    	<div class="depoimento">
					    		<figure>
					    			<img src="assets/img/depoimentos/4.png" alt="" />
					    		</figure>

					    		<h5 class="tt">Bruno Bezerra</h5>

					    		<p>
					    			Equipe muito atenciosa e de rápida resposta
					    		</p>

					    		<a href="" class="leia">Leia mais</a>
					    	</div>
					    </div><!-- swiper-slide --> 

					  </div><!-- swiper-wrapper -->
					</div><!-- swiper2 -->

					  <!-- If we need navigation buttons -->
					  <div class="swiper-button-prev swiper-button-prev4"></div>
					  <div class="swiper-button-next swiper-button-next4"></div>

				<!-- If we need pagination -->
				<div class="swiper-pagination swiper-pagination4"></div>
			</div><!-- col-12 -->

		</div> <!-- row  -->
	</div> <!-- container  -->
</section>

<section class="bg5 py-5" data-animate="top" data-delay="3">
	<div class="container">
		<div class="row">

			<div class="col-lg-5 pt-lg-5 mt-lg-3">
				<h2 class="topic text-white">
					Seu coração merece
					o melhor cuidado!<br>
					Vem pra Clinic+
				</h2>
				<p class="text-white">
					É fundamental está com a saúde do seu coração em dia. Agende sua consulta e faça seus exames!
				</p>
				<br>
				<a href="<?=$config['whatsapp']?>" target="_blank" class="btn btn-1 pl-3">FALE COM NOSSA EQUIPE <img src="assets/img/icones/ico-whatsapp.png" alt="" /></a>
			</div>
			<!-- col-lg-4 -->

		</div> <!-- row  -->
	</div> <!-- container  -->
</section>

</main>


<?php 

include dirname(__FILE__). '/../includes/footer.php';

?>