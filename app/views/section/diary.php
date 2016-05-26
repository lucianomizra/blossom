<?php if(!$this->input->is_ajax_request()) $this->load->view('common/header') ?>

<? $data = $this->Data->Diary(); ?>
<section class="app-section section-agenda">
<div class="bg"></div>
	<?php $this->load->view('common/brand') ?>

	<div class="container">
		
		<div class="main bigmain">
			<header>
				<h1><i class="ico ico-agenda"></i> <?= $this->lang->line('Agenda') ?></h1>
			</header>

			<div class="content-diary content content-scrollbar">
				<div class="custom-scrollbar">
					<? foreach ($data as $key => $obj) : ?>
						<article>
							<a href="<?= $obj->link ?>">
								<i class="ico ico-mas"></i>
							</a>
							<p class="title"><?= $obj->title ?></p>
							<h2 class="type"><?= $obj->type ?></h2>
							<h3 class="place"><i class="ico ico-marcador"></i> <?= $obj->place ?></h3>
							<h1 class="text"><?= $obj->text ?></h1>
						</article>
					<? endforeach ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('common/footer') ?>