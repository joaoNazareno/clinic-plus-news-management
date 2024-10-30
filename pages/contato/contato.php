<?php 

$title_page = "Fale conosco | ";
include dirname(__FILE__). '/../includes/header.php'; ?>


<main class="main mb-0" data-animate="top" data-delay="3">
	 
<header class="page-header" >
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>
					<span>Fale conosco</span>
				</h1>
			</div>
		</div>
	</div>
</header>

<section class=" mb-4">
	<div class="container">
		<div class="row">

		<div class="col-lg-6 mb-4">

			<form method="post" action="https://www.locawebsite.com/freeform.php" role="form" id="form">
				<input type="hidden" name="redirect" value="back">
				<input type="hidden" name="titulo" value="">
				<input type="hidden" name="assunto" value="Contato Site - CLINC+">
				<input type="hidden" name="charset" value="utf-8">
				<input type="hidden" name="to" value="<?=$config['email'];?>">

		        <div class="row ">
			        <div class="col-md-12">
			        	<div class="form-group">
			        		<label for="nome">NOME</label>
			        		<input type="text" id="nome" name="nome" class="form-control" required="required"  />
			        	</div>
			        </div>
			       
			        <div class="col-md-7 pr-md-2">
			        	<div class="form-group">
			        		<label for="email">E-MAIL</label>
			          		<input type="email" id="email" name="from" class="form-control" required="required" />
			        	</div>
			        </div>

			        <div class="col-md-5 pl-md-2">
			        	<div class="form-group">
			        		<label for="telefone">TELEFONE</label>
			          		<input type="tel" id="telefone" name="Telefone" class="form-control" />
			        	</div>
			        </div> 

			        <div class="col-md-12">
			        	<div class="form-group">
			        		<label for="assunto">ASSUNTO</label>
			          		<input type="text" id="assunto" name="Ass" class="form-control" />
			        	</div>
			        </div>

			        <div class="col-md-12">
			        	<div class="form-group">
			        		<label for="mensagem">MENSAGEM</label>
			          		<textarea rows="5" id="mensagem" name="Mensagem" class="form-control" required="required" ></textarea>
			        	</div>
			        </div>
			        
			        <div class="col-md-12">
			            <div class="form-group">
			              <label for="termos-privacidade">
			              <input type="checkbox" name="termos-privacidade" id="termos-privacidade" required="">
			               <a href="termos-de-privacidade" target="_blank"><u>Concordo com os termos de privacidade</u></a></label>
			            </div>
			        </div>
 

			        <div class="col-md-4">
			        	<input type="submit" value="ENVIAR" class="btn btn-1 px-4" />
			        </div>

	      		</div><!-- row -->
	      </form>

		</div><!-- col-lg-6  -->

		<div class="col-lg-6 " data-animate="left" data-delay="3">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.55426785639!2d-34.89911130000001!3d-8.044803400000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18fb3d1010dd%3A0x13a04d7caf2f9527!2sR.%20Am%C3%A9lia%2C%20430%20-%20Gra%C3%A7as%2C%20Recife%20-%20PE%2C%2052011-050!5e0!3m2!1spt-BR!2sbr!4v1728477338320!5m2!1spt-BR!2sbr" width="100%" height="250" style="border:0; display: block; margin-bottom: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

			<address class="media mb-3">
				<img src="assets/img/icones/pin.png" class="mr-2" alt="" />
				<div class="media-body">
					R. Amélia, 430 - Graças, Recife - PE, 52011-050
				</div>
			</address>

			<div class="row">
				<div class="col-lg-4 col-md-5 mb-4">
					<div class="media">
						<img src="assets/img/icones/tel1.png" class="mt-1 mr-2" alt="" />
						<div class="media-body">
							<h5 class="tit">Agendamentos</h5>
							<p>
								(81) 99853-2900<br/>
								(81) 3048-3074
							</p>
						</div><!-- media-body -->
					</div><!-- media -->

				</div><!-- col-md-6 -->

				<div class="col-lg-8 col-md-7 mb-4">
					<div class="media">
						<img src="assets/img/icones/clock.png" class="mt-1 mr-2" alt="" />
						<div class="media-body">
							<h5 class="tit">Horário de funcionamento</h5>
							<p>
								Segunda a Sexta das 07:30h às 17:30h <br>
								Sábado: fechado
							</p>
						</div><!-- media-body -->
					</div><!-- media -->

				</div><!-- col-md-6 -->
			</div>

		</div><!-- col-lg-6  -->
 

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