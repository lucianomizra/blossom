<nav class="products-menu-nav">
  <div class="products-menu">
    <div class="products-menu__items">
      <div><?= $this->lang->line('Edades') ?></div>
      <div><?= $this->lang->line('Productos') ?></div>
      <div><?= $this->lang->line('Precio') ?></div>
    </div>
    <div class="products-menu__panel">
      <div>
        <ul class="products-menu__panel__list">
         <li>
            <a href="#3month">3 meses</a>
         </li>
         <li class="active">
            <a href="#6month">6 meses</a>
         </li>
         <li>
            <a href="#9month">9 meses</a>
         </li>
         <li>
            <a href="#12month">12 meses</a>
         </li>
         <li>
            <a href="#18month">18 meses</a>
         </li>
         <li>
            <a href="#24month">24 meses</a>
         </li>
         <li>
            <a href="#3year">3 años</a>
         </li>
         <li>
            <a href="#4year">4 años</a>
         </li>
         <li>
            <a href="#5year">5 años</a>
         </li>
         <li>
            <a href="#6year">6 años</a>
         </li>
         <li>
            <a href="#8year">8 años</a>
         </li>
         <li>
            <a href="#none">Ninguna </a>
         </li>
        </ul>
      </div>
      <div>
        <ul class="products-menu__panel__list">
           <li>
              <a href="/blossom/#">Blusas</a>
           </li>
           <li>
              <a href="/blossom/#">Camisas</a>
           </li>
           <li>
              <a href="/blossom/#">Pololos</a>
           </li>
           <li>
              <a href="/blossom/#">Vestidos</a>
           </li>
           <li>
              <a href="/blossom/#">Faldas</a>
           </li>
           <li>
              <a href="/blossom/#">Pantalones/shorts</a>
           </li>
           <li>
              <a href="/blossom/#">Capotas</a>
           </li>
           <li>
              <a href="/blossom/#">Ranitas</a>
           </li>
           <li>
              <a href="/blossom/#">Petos/Monos</a>
           </li>
           <li>
              <a href="/blossom/#">Chaquetas y abrigos</a>
           </li>
           <li>
              <a href="/blossom/#">Ninguna</a>
           </li>
        </ul>
      </div>
      <div>
        <div class="box-filter-price">
          <div>
            <span><?= $this->lang->line('De') ?>:</span>
            <input type="text" class="box-filter-price__input" value="0">
          </div>
          <div>
            <span><?= $this->lang->line('A') ?>:</span>
            <input type="text" class="box-filter-price__input" value="30">
          </div>
        </div>
      </div>
      <div class="products-menu__panel__options">
        <button class="btn btn-black-outline"><?= $this->lang->line('Filtrar') ?></button>
        <button class="btn btn-black-outline"><?= $this->lang->line('Reiniciar') ?></button>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</nav>