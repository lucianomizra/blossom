<?php if(!$this->input->is_ajax_request()) $this->load->view('common/header') ?>

<section class="app-section section-galeria section-galeria-<?= $subsection ?>">
<div class="bg"></div>
	<?php $this->load->view('common/brand') ?>

	<div class="container">
		
		<? if( !isset($type) ) : ?>
			<div class="main">
				<header class="hidden-lg hidden-md">
					<h1><i class="ico ico-galeria"></i> <?= $this->lang->line('Galeria') ?></h1>
				</header>

				<div class="content-gallery content">
					<div class="nav-menu-left">
						<!-- <div class="row"> -->
							<ul class="menu-galeria">
								<li><?= $this->lang->line('Galeria') ?></li>
								<li><a target="_blank" href="https://www.instagram.com/<?= $ainsta ?>">Instagram</a></li>
								<li><a href="<?= base_url() ?>gallery/photos"><?= $this->lang->line('Fotos') ?></a></li>
								<li><a href="<?= base_url() ?>gallery/videos"><?= $this->lang->line('Videos') ?></a></li>
							</ul>
						<!-- </div> -->
					</div>

					<div class="mini-galeria">
					</div>
					<div class="mini-galeri-buttons">
						<div class="btn-videos">
							<a href="<?= base_url() ?>gallery/videos">
								<span class="text"><?= $this->lang->line('Videos') ?></span>
								<i class="ico ico-videos"></i>
							</a>
						</div>
						<div class="btn-photos">
							<a href="<?= base_url() ?>gallery/photos">
								<span class="text"><?= $this->lang->line('Fotos') ?></span>
								<i class="ico ico-videos"></i>
							</a>
						</div>
						<div class="btn-instagram">
							<div>
								
							<a target="_blank" href="https://www.instagram.com/<?= $ainsta ?>">
								<span class="text">instagram</span>
								<i class="ico ico-videos"></i>
							</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		<? 
		elseif ($type == 1) :
			$data = $this->Data->Gallery(2);
		?>
			<div class="main fullmain">
				<div class="bg-dark"></div>
				<div class="content-gallery-photos content">
					<header>
						<div class="show-gallery"><a href="<?= base_url('gallery') ?>" class="app-loader"><i class="ico ico-galeria"></i></a></div>
						<div class="clearfix"></div>
					</header>

					<div id="slider" class="flexslider">
					  <ul class="slides">
					  <? foreach ($data as $i => $item) : ?>
						<li><img src="<?= base_url($this->config->item('uploads', 'app').$item->file) ?>"></li>
					  <? endforeach ?>
					  </ul>
					</div>
					<div class="content-carousel">
						<div id="carousel" class="flexslider">
						  <ul class="slides">
						  <? foreach ($data as $i => $item) : ?>
							<li><img src="<?= base_url($this->config->item('uploads', 'app').$item->file) ?>"></li>
						  <? endforeach ?>
						  </ul>
						</div>
					</div>
				</div>
			</div>
		<? 
		elseif ($type == 2) :
			$data = $this->Data->Videos(1);
		?>
			<div class="main fullmain">
				<div class="bg-dark"></div>
				<div class="content-gallery-video content">
					<header>
						<div class="show-gallery"><a href="<?= base_url('gallery') ?>" class="app-loader"><i class="ico ico-galeria"></i></a></div>
						<div class="clearfix"></div>
					</header>

					<div id="slider" class="flexslider">
					  <ul class="slides">
					  <? foreach ($data as $i => $item) : ?>
						<li>
							<article>
								<h2><?= $item->subtitle ?></h2>
								<div class="video-content">
									<?= $item->embed ?>
								</div>
								<h1><?= $item->title ?></h1>
							</article>
						</li>
					  <? endforeach ?>
					  </ul>
					</div>
					<div class="content-carousel">
						<div id="carousel" class="flexslider">
						  <ul class="slides">
						  <? foreach ($data as $i => $item) : ?>
							<li>
								<img src="<?= base_url($this->config->item('uploads', 'app').$item->file) ?>">
								<p><?= $item->title ?></p>
							</li>
							<li>
								<img src="<?= base_url($this->config->item('uploads', 'app').$item->file) ?>">
								<p><?= $item->title ?></p>
							</li>
							<li>
								<img src="<?= base_url($this->config->item('uploads', 'app').$item->file) ?>">
								<p><?= $item->title ?></p>
							</li>
						  <? endforeach ?>
						  </ul>
						</div>
					</div>
				</div>
			</div>
		<? endif ?>

	</div>
</section>
<script src="<?= layout('js/jquery.flexslider-min.js') ?>"></script>
<?php $this->load->view('common/footer') ?>