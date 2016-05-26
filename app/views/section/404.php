<?php if(!$this->input->is_ajax_request()) $this->load->view('common/header') ?>
<section class="app-section section-home">

	<div class="container">
		
		<div class="title">
			<div class="first-line">
				<figure>

				</figure>
			</div>
			<div class="second-line">
				<h2><?= $this->lang->line('Error 404') ?></h2>
				<h3><?= $this->lang->line('La pagina es inexistente') ?>.</h3>
			</div>
		</div>
		
	</div>

</section>
<?php $this->load->view('common/footer') ?>