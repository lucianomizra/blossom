<? $this->load->view('common/html') ?>
<header class="header">
	<div class="container">
	  <div class="row">
	    <nav class="col-md-4 siteNav">
	      <span class="siteNav__toggle a"><i class="icon icon-bars"></i></span>
	      <div class="siteNav__lang">
	      	<span><a href="<?= $this->Data->lang_link('es') ?>" <? if($lang=='es'): ?>class="active"<? endif ?>>ES</a></span>
	      	<span><a href="<?= $this->Data->lang_link('en') ?>" <? if($lang=='en'): ?>class="active"<? endif ?>>EN</a></span>
	      </div>
	      <div class="siteNav__search">
	      	<input type="text" class="siteNav__search__input">
	      	<button class="siteNav__search__button icon icon-search"></button>
	      </div>
	    </nav>

	    <div class="col-md-4 branding">
	    	<a href="<?= base_url() ?>">
		    	<figure>
		    		<img src="<?= layout('img/logo.png') ?>" alt="la petite blossom">
		    		<figcaption><h1>la petite blossom</h1></figcaption>
		    	</figure>
	    	</a>
	    </div>

	    <nav class="col-md-4 userNav">
	    	<span class="a userNav_myAccount userNav__toggle"><i class="icon icon-user"></i> <?= $this->lang->line('Mi cuenta') ?></span>
	    	<span class="a userNav_Items userNav__toggle"><i class="icon icon-cart"></i> <span class="items">2</span> <?= $this->lang->line('Items') ?></span>
	    </nav>
	  </div>
	</div>

	<nav class="slideSiteNav">

		<div class="slideSiteNav__container">
			
			<div class="slideSiteNav__close a">
				<i class="icon icon-close big"></i>
			</div>
			<div class="slideSiteNav__cloneSearch">
			</div>

			<?
			 $this->load->view('components/accordion', array('id'=>'slideSiteNav__menu','items'=> array(
			 	array('title'=>$this->lang->line('Ropa'),'content'=> array(
			 		array('title'=>'Blusas','href'=>base_url().'ropa/blusas'),
			 		array('title'=>'Camisas','href'=>base_url().'ropa/camsias'),
			 		array('title'=>'Polos','href'=>base_url().'ropa/polos'),
			 	)),
			 	array('title'=>$this->lang->line('Accesorios'),'href'=>'#','content'=>array()),
			 	array('title'=>$this->lang->line('Edades'),'href'=>'#','content'=>array()),
			 	array('title'=>$this->lang->line('Looks'),'href'=>'#'),
			 	array('title'=>$this->lang->line('Outlet'),'href'=>'#'),
			 	array('title'=>$this->lang->line('Sobre nosotros'),'href'=>'#'),
			 )));
			?>

		</div>

	</nav>

	<nav class="slideUserNav">

		<div class="slideUserNav__container">
			
			<div class="slideUserNav__cloneNav">
			</div>
			
			<div class="slideUserNav__close a">
				<i class="icon icon-close big"></i>
			</div>

			
			<div class="slideUserNav__MyAccount">
				
				<? if($user===false) : ?>
				<form action="">
					<p class="title"><?= $this->lang->line('Identifícate') ?></p>
					<p><?= $this->lang->line('Si ya eres cliente de esta web.') ?></p>
					<input type="text" class="input-control" placeholder="<?= $this->lang->line('Email') ?>">
					<input type="text" class="input-control" placeholder="<?= $this->lang->line('Contraseña') ?>">
					<a href="" class="forgot"><?= $this->lang->line('Olvidé mi contraseña') ?></a>
					<button class="btn btn-ok"><?= $this->lang->line('OK') ?></button>
				</form>

				<form action="">
					<p class="title"><?= $this->lang->line('Crea tu cuenta') ?></p>
					<p><?= $this->lang->line('Si eres cliente nuevo.') ?></p>
					<input type="text" class="input-control" placeholder="<?= $this->lang->line('Nombre') ?>">
					<input type="text" class="input-control" placeholder="<?= $this->lang->line('Email') ?>">
					<input type="text" class="input-control" placeholder="<?= $this->lang->line('Contraseña') ?>">
					<input type="text" class="input-control" placeholder="<?= $this->lang->line('Repetir Contraseña') ?>">
					<button class="btn btn-ok"><?= $this->lang->line('OK') ?></button>
					<p><?= $this->lang->line('Acceder con una cuenta de red social es más rápido que hacerlo con una de email.') ?></p>
				</form>

				<? else: ?>

					<p class="title"><?= $this->lang->line('Mi cuenta') ?></p>
					<p><?= $this->lang->line('¡Bienvenid@') ?>, <b>Anna</b>!</p>
					
					
					<?
					 $this->load->view('components/accordion', array('id'=>'slideUserNav__Items__accordion','items'=> array(
					 	array('title'=>$this->lang->line('Cambiar contraseña'),'content'=>'content'),
					 	array('title'=>$this->lang->line('Modificar datos personales'),'content'=>'content'),
					 	array('title'=>$this->lang->line('Gestionar pedidos'),'content'=>'content'),
					 )));
					?>
				<? endif ?>

			</div>
			
			<div class="slideUserNav__Items">
				<?
				 $this->load->view('components/simpleCartItems', array('items'=> array(
				 	array('photo'=>layout('img/photos/home-seleccionado-1.png'),'product'=>'Vestido Rosa','stock'=>'Disponible','price'=>'30,00'),
				 	array('photo'=>layout('img/photos/home-seleccionado-1.png'),'product'=>'Vestido Rosa','stock'=>'Disponible','price'=>'30,00'),
				 	array('photo'=>layout('img/photos/home-seleccionado-1.png'),'product'=>'Vestido Rosa','stock'=>'Disponible','price'=>'30,00'),
				 )));
				?>
			</div>

		</div>

	</nav>
</header>
<div class="header-spacer"></div>