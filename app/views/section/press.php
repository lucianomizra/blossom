<?php if(!$this->input->is_ajax_request()) $this->load->view('common/header') ?>

<? $data = $this->Data->Press(); ?>
<section class="app-section section-prensa">
<div class="bg"></div>
	<?php $this->load->view('common/brand') ?>

	<div class="container">
		
		<div class="main bigmain">
			<header>
				<div class="hidden-md hidden-lg">
					<?php $this->load->view('common/change-lang') ?>
				</div>
				<h1><i class="ico ico-prensa"></i> <?= $this->lang->line('Prensa') ?></h1>
			</header>

			<div class="content-press content">
				<div class="custom-scrollbar">
					<? foreach ($data as $key => $obj) : ?>
						<article>
							<a href="<?= $obj->link ?>" target="_blank">
								<h1 class="title"><?= $obj->title ?></h1>
							</a>
								<h2 class="text"><?= $obj->text ?></h2>
								<h3 class="caption"><?= $obj->caption ?></h3>
						</article>
					<? endforeach ?>
				</div>
			</div>


		</div>
	</div>
</section>
<?php $this->load->view('common/footer') ?>