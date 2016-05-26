<article class="product-box">
  <a href="<?= base_url().'product/'.$product->id ?>">
    <figure class="product-box__picture"><img src="<?= $product->picture ?>" alt="<?= $product->title ?>"></figure>
    <h1 class="product-box__title"><?= $product->title ?></h1>
    <? if( isset($product->sale) ): ?>
      <p class="product-box__price"><span class="product-box__price--old"><?= $product->price ?></span><span class="product-box__price--new"><?= $product->sale ?></span></p>
    <? else: ?>
      <p class="product-box__price"><?= $product->price ?></p>
    <? endif ?>
  </a>
</article>