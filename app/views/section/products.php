<? if(!$this->input->is_ajax_request()) $this->load->view('common/header') ?>
<section class="app-section section-products">

	<div class="container">

		<div class="in-container">
			
			
			<? $this->load->view('components/products-menu') ?>

			<? $products = $this->Data->Products() ?>
			<div class="row">
				<? foreach ($products as $i => $product) : ?>
				    <div class="col-md-6">
				    	<? $this->load->view('components/product-box',array('product'=>$product)) ?>
				    </div>
				<? endforeach ?>
			</div>

			<div class="text-center spacer-y">
				<i class="icon icon-more"></i>
			</div>
		</div>
	</div>

</section>
<? $this->load->view('common/footer') ?>