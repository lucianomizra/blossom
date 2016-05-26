<footer class="footer">
	<div class="footer__line-1">
		<div class="container">
			<div class="in-container">
				<div class="footer__line-1__subscribe-box">
					<span class="footer__line-1__subscribe-box__text"><?= $this->lang->line('¡Suscríbite a nuestra newsletter!') ?></span>
					<input type="text" class="footer__line-1__subscribe-box__input" placeholder="<?= $this->lang->line('Escribir email') ?>">
					<button class="footer__line-1__subscribe-box__btn"><?= $this->lang->line('Enviar') ?></button>
				</div>
				<button class="footer__line-1__btn-outlet btn-primary btn pull-right"><?= $this->lang->line('Outlet') ?></button>
			</div>
		</div>
	</div>
	<div class="footer__line-2">

		<div class="container">
			<div class="in-container">

				<div class="row">
					<div class="col-md-4 footer__line-2__col1">
						<h1>La petite blossom</h1>
						<p><?= $this->lang->line('lorem') ?></p>
						<a href="#"><?= $this->lang->line('Leer más') ?></a>
					</div>
					<div class="col-md-4 text-center footer__line-2__col2">
						<ul class="list-unstyled">
							<li><a href=""><?= $this->lang->line('Mi cuenta') ?></a></li>
							<li><a href=""><?= $this->lang->line('Política de privacidad') ?></a></li>
							<li><a href=""><?= $this->lang->line('Cambios y devoluciones') ?></a></li>
							<li><a href=""><?= $this->lang->line('Información legal') ?></a></li>
							<li><a href=""><?= $this->lang->line('Descuentos y promociones') ?></a></li>
						</ul>
					</div>
					<div class="col-md-4 footer__line-2__col3">
						<div class="text-right">
							<a href="<?= $fblink ?>" taget="_blank"><i class="icon icon-facebook"></i></a>
							<a href="<?= $iglink ?>" taget="_blank"><i class="icon icon-instagram"></i></a>
							<p><?= $this->lang->line('Tel') ?>: +34 1232 456 789</p>
							<p><?= $this->lang->line('E-mail') ?>: info@lapetiteblossom.com</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="footer__line-3">
		<div class="container">
			<div>
				<div class="footer__line-3__left">
					La Petite Blossom. All rights reserved.
				</div>
				<div class="footer__line-3__right">	
					<a href="http://weareidentty.com" target="_blank">Designed and developed by <img src="<?= layout('img/ico/footer-identty.png') ?>" alt="identty"></a>
				</div>
			</div>
		</div>
	</div>

</footer>

<script>App.Init({ 'url': '<?= base_url() ?>', 'layout': '<?= layout() ?>', 'section': '<?= $section; ?>' });</script>
</body>
</html>