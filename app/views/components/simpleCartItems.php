<div class="simpleCartItems">
	<p class="title"><?= $this->lang->line('Tu carrito') ?></p>
	<p><?= $this->lang->line('Tienes') ?> <span class="items">2</span> <?= $this->lang->line('items') ?></p>
	
	<? foreach ($items as $key => $item) : ?>
		<div class="item">
		  <div class="item__left">
		    <a href="#">
		      <img class="media-object img-circle" src="<?= isset($item['photo']) ? $item['photo'] : '' ?>">
		    </a>
		  </div>
		  <div class="item__body">
			<p class="product"><?= isset($item['product']) ? $item['product'] : '' ?></p>
			<p class="stock"><?= isset($item['stock']) ? $item['stock'] : '' ?></p>
			<p class="price"><?= isset($item['price']) ? $item['price'] : '' ?> <?= $currency ?></p>
		  </div>
		  <div class="clearfix"></div>
		</div>
	<? endforeach ?>
	<hr>
	<div class="total"><?= $this->lang->line('Total') ?>: 60.00 <?= $currency ?></div>

	<button class="input-control"><?= $this->lang->line('¿Tienes algun código de descuento?') ?></button>
	<button class="input-control"><?= $this->lang->line('Comprar') ?></button>
</div>