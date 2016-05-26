<section class="carousel-products">
	<h1 class="h3"><?= $title ?></h1>
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<? foreach ($products as $i => $product) : ?>
			    <div class="swiper-slide">
			    	<figure class="picture" style="background-image:url(<?= $product->picture ?>)"></figure>
			    	<h1 class="title"><?= $product->title ?></h1>
			    	<p class="price"><?= $product->price ?></p>
			    </div>
			<? endforeach ?>
		</div>
   </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</section>
