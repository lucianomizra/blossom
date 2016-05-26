<article class="product-box">
    <figure class="product-box__picture">
        <img src="<?= $product->picture ?>" alt="<?= $product->title ?>">
        <div class="product-box__picture__more">
          <div class="product-box__picture__more__mouseover">
            <div class="product-box__picture__more__mouseover__content">
              <button class="btn btn-white-outline btn-fast-buy btn-block btn-lg"><?= $this->lang->line('Comppra rápida') ?></button>
            </div>
            <div class="fast-buy">
              <div class="fast-buy__content">
                <div class="fast-buy__content__close btn-fast-buy pointer">
                  <i class="icon icon-close"></i>
                </div>
                <div class="fast-buy__content__bottom">
                  <button class="btn btn-white-outline btn-block btn-lg btn-fast-buy">
                     <?= $this->lang->line('Añadir al carrito') ?>
                  </button>
                </div>
                <div class="fast-buy__content__element select">
                  <select class="btn btn-white-outline btn-block btn-lg">
                    <option value="0" disabled="disabled" selected="selected"><?= $this->lang->line('Talla') ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </div>
                <div class="fast-buy__content__element">
                  <input type="number" class="btn btn-white-outline btn-block btn-lg" value="1">
                </div>
              </div>
            </div>
          </div>
        </div>
     
    </figure>
    
    <h1 class="product-box__title"><a href="<?= base_url().'product/'.$product->id ?>"><?= $product->title ?></a></h1>
  
    <? if( isset($product->sale) ): ?>
      <p class="product-box__price"><span class="product-box__price--old"><?= $product->price ?></span><span class="product-box__price--new"><?= $product->sale ?></span></p>
    <? else: ?>
      <p class="product-box__price"><?= $product->price ?></p>
    <? endif ?>
    
</article>