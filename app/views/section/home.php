<?php if(!$this->input->is_ajax_request()) $this->load->view('common/header') ?>
<section class="app-section section-home">

	<div class="container">

		 <div class="swiper-container slide-home" id="slide-home">
			<div class="swiper-wrapper">
			    <div class="swiper-slide">
			    	<div class="picture" style="background-image:url(<?= layout('img/photos/home-slider.png') ?>)"></div>
			    </div>
			    <div class="swiper-slide">
			    	<div class="picture" style="background-image:url(<?= layout('img/photos/home-slider.png') ?>)"></div>
			    </div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
		
		<div class="in-container">
			
			<article class="combinedbox">
				<div class="text left">
					<h1 class="title">Nombre</h1>
					<p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="picture right">
					<img src="<?= layout('img/photos/home-coleccion-1.png') ?>" alt="">
				</div>
			</article>
			
			<article class="combinedbox">
				<div class="text right">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				<div class="picture left">
					<img src="<?= layout('img/photos/home-coleccion-2.png') ?>" alt="">
				</div>
			</article>

			<div class="divider">
				<span><?= $this->lang->line('Colecciones anteriores') ?></span>
			</div>

			<article class="combinedbox2">
				<div class="row">
					
					<div class="picture">
						<img src="<?= layout('img/photos/home-look-1.png') ?>" alt="">
					</div>
					<div class="text">
						<h1 class="title">Nombre</h1>
						<p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<button class="btn btn-secondary-outline"><?= $this->lang->line('Ver look') ?></button>
					</div>

				</div>
			</article>	

			<article class="combinedbox2 picture-right negative">
				<div class="row">
					
					<div class="picture">
						<img src="<?= layout('img/photos/home-look-2.png') ?>" alt="">
					</div>
					<div class="text">
						<h1 class="title">Nombre</h1>
						<p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<button class="btn btn-secondary-outline"><?= $this->lang->line('Ver look') ?></button>
					</div>

				</div>
			</article>	



			<div class="divider">
				<span><?= $this->lang->line('Ver más looks') ?></span>
			</div>

			<? $this->load->view('components/carousel-products',array('title'=> $this->lang->line('Productos selecionados'), 'products'=> $this->Data->Products()) ) ?>
			<? $this->load->view('components/follow-box') ?>

		</div>
	</div>

</section>
<?php $this->load->view('common/footer') ?>