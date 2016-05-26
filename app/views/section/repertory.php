<?php if(!$this->input->is_ajax_request()) $this->load->view('common/header') ?>

<? $data = $this->Data->Repertory($type); ?>
<section class="app-section section-repertorio">
<div class="bg"></div>
	<?php $this->load->view('common/brand') ?>

	<div class="container">
		
		<div class="main">
			<header>
				<div class="change-song">
					<div class="prev inactive"></div>
					<div class="next"></div>
				</div>
				<h1><i class="ico ico-repertorio"></i> <?= $this->lang->line('Repertorio') ?></h1>
			</header>
			<div class="relative">
			
				<div class="nav-menu-left">
					<ul class="menu-repertorio">
						<li><a href="<?= base_url() ?>repertory" <?= ($type == 0) ? 'class="active"' : '' ?>><?= $this->lang->line('Todo') ?></a></li>
						<li><a href="<?= base_url() ?>repertory/concerts" <?= ($type == 1) ? 'class="active"' : '' ?>><?= $this->lang->line('Solista y conciertos') ?></a></li>
						<li><a href="<?= base_url() ?>repertory/chamber" <?= ($type == 2) ? 'class="active"' : '' ?>><?= $this->lang->line('Música<br> de cámara') ?></a></li>
					</ul>
				</div>
				<div>
					<div class="content-repertory content">
						<div class="custom-scrollbar">
							<? foreach ($data as $key => $obj) : ?>
								<article>
									<h1 class="title"><?= $obj->title ?></h1>
									<h2 class="subtitle"><?= $obj->subtitle ?></h2>
									<? if($obj->file): ?>
										<div class="content-player">
											<div class="player" data-file="<?= $obj->file ?>" data-index="<?= $key+1 ?>"></div>
										</div>
									<? endif ?>
								</article>
							<? endforeach ?>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
</section>
<?php $this->load->view('common/footer') ?>