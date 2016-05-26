<div class="<?= $id ?>" id="<?= $id ?>">
<div class="accordion">
  <ul>
    <? foreach ($items as $key => $item) : ?>
    <li class="accordion__item">
      <div class="accordion__item__title<? if( isset($item['content']) ): ?> has-items<? endif ?>">

        <? if(isset($item['href'])): ?>
          <a href="<?= $item['href'] ?>"><? if( isset($item['content']) ): ?><span class="has-more"></span><? endif ?><?= isset($item['title']) ? $item['title'] : '' ?></a>
        <? else: ?>
          <p><? if( isset($item['content']) ): ?><span class="has-more"></span><? endif ?><?= isset($item['title']) ? $item['title'] : '' ?></p>
        <? endif ?>
          
      </div>
      <div class="accordion__item__content">
        <div class="accordion__item__content__container">
          <? if(isset($item['content']) && is_array($item['content'])) : ?>
            <ul class="accordion__item__content__submenu">
              <? foreach ($item['content'] as $k => $i) : ?>
                <li class="accordion__item__content__item">
                    <? if(isset($i['href'])): ?>
                      <a href="<?= $i['href'] ?>"><? if( isset($i['content']) ): ?><span class="has-more"></span><? endif ?><?= isset($i['title']) ? $i['title'] : '' ?></a>
                    <? else: ?>
                      <p><? if( isset($i['content']) ): ?><span class="has-more"></span><? endif ?><?= isset($i['title']) ? $i['title'] : '' ?></p>
                    <? endif ?>
          
                </li>
              <? endforeach ?>
            </ul>
          <? elseif( isset($item['content']) ) : ?>
              <?= $item['content'] ?>
          <? endif ?>
        </div>
      </div>
    </li>
    <? endforeach ?>
  </ul>
</div></div>