<?php if(!$this->input->is_ajax_request()) $this->load->view('common/header') ?>

<? $data = $this->Data->Section(1) ?>
<section class="app-section section-biografia">
<div class="bg"></div>
	<?php $this->load->view('common/brand') ?>

	<div class="container">
		
		<div class="main bigmain">
			<header>
				<div class="hidden-md hidden-lg">
					<?php $this->load->view('common/change-lang') ?>
				</div>
				<h1><i class="ico ico-biografia"></i> <?= $this->lang->line($data->title) ?></h1>
			</header>
			<article>
				<div class="content-dio content content-scrollbar">
					<div class="custom-scrollbar">
						
						<?= $data->text ?>
					</div>
				</div>


			</article>
		</div>
	</div>
</section>
<?php $this->load->view('common/footer') ?>