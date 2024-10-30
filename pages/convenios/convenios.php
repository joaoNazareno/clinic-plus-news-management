<?php 

$title_page = "Convênios | ";
include dirname(__FILE__). '/../includes/header.php'; ?>


<main data-filter="filtro1" class="filter-link main mb-0" data-animate="top" data-delay="3">
	 
<header data-filter="filtro1" class="filter-link page-header" >
	<div data-filter="filtro1" class="filter-link container">
		<div data-filter="filtro1" class="filter-link row">
			<div data-filter="filtro1" class="filter-link col-12">
				<h1>
					<span>Convênios</span>
				</h1>
			</div>
		</div>
	</div>
</header>

<section data-filter="filtro1" class="filter-link  mb-4">
	<div data-filter="filtro1" class="filter-link container">

		<div data-filter="filtro1" class="filter-link row mb-3">

			<div data-filter="filtro1" class="filter-link col-12 mb-4">
				
 				<nav aria-label="Paginação">
				  <ul class="pagination justify-content-center">
				    <li data-filter="all" class="filter-link page-item active"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">#</a></li>
				    <li data-filter="a" class="filter-link page-item "><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">A</a></li>
				    <li data-filter="b" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">B</a></li>
				    <li data-filter="c" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">C</a></li>
				    <li data-filter="d" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">D</a></li>
				    <li data-filter="e" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">E</a></li>
				    <li data-filter="f" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">F</a></li>
				    <li data-filter="g" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">G</a></li>
				    <li data-filter="h" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">H</a></li>
				    <li data-filter="i" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">I</a></li>
				    <li data-filter="j" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">J</a></li>
				    <li data-filter="l" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">L</a></li>
				    <li data-filter="m" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">M</a></li>
				    <li data-filter="n" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">N</a></li>
				    <li data-filter="o" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">O</a></li>
				    <li data-filter="p" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">P</a></li>
				    <li data-filter="q" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">Q</a></li>
				    <li data-filter="r" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">R</a></li>
				    <li data-filter="s" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">S</a></li>
				    <li data-filter="t" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">T</a></li>
				    <li data-filter="u" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">U</a></li>
				    <li data-filter="v" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">V</a></li>
				    <li data-filter="x" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">X</a></li>
				    <li data-filter="z" class="filter-link page-item"><a data-filter="filtro1" class="filter-link page-link" href="javascript:;">Z</a></li>
				  
				  </ul>
				</nav>
			</div>

			<?php for ($i=1; $i <=16 ; $i++) { ?> 
	 			<div class="col-6 col-lg-3 col-md-4 filter-div" data-filtro="a">
	 				<div class="marcas">
	 					<img src="assets/img/marcas/<?=$i;?>.jpg" alt="">
	 				</div>
	 			</div><!-- col-6 -->
			<?php } ?>
				 
		</div> <!-- row  --> 


  
 

	</div> <!-- container  -->
</section>

<aside>
<?php
	$banner = rand(1,6);
?>
	<a href="<?=$config['whatsapp'];?>" target="_blank">
		<img src="assets/img/banner/0<?=$banner;?>.png" data-filter="filtro1" class="filter-link d-none d-md-block w-100">
		<img src="assets/img/banner/mobile0<?=$banner;?>.jpg" data-filter="filtro1" class="filter-link d-block d-md-none w-100">
	</a>
</aside>

</main>


<?php 

include dirname(__FILE__). '/../includes/footer.php';

?>