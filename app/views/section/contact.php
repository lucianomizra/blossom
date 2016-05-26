<?php if(!$this->input->is_ajax_request()) $this->load->view('common/header') ?>
<section class="app-section section-contacto">
<div class="bg"></div>
	<?php $this->load->view('common/brand') ?>

	<div class="container">
		
		<div class="main bigmain">
			<header>
				<div class="hidden-md hidden-lg">
					<?php $this->load->view('common/change-lang') ?>
				</div>
				<h1><i class="ico ico-contacto"></i> <?= $this->lang->line('Contacto') ?></h1>
			</header>					
				<div class="form">						
					<div class="form-box">
						<? if(isset($formSOK)): ?>
						<div class="result"><?= $this->lang->line('Su mensaje se envió correctamente') ?></div>
						<script type="text/javascript">
							ga('send', 'event','Contact','Enviar Formulario');
						</script>
						<? else: ?>
						<div class="input">
							<input name="name" value="<?= $this->input->post('name') ?>" placeholder="<?= $this->lang->line('Nombre') ?>*" class="post">
						</div>
						<div class="input">
							<input name="mail" value="<?= $this->input->post('mail') ?>" placeholder="<?= $this->lang->line('E-mail') ?>*" class="post">
						</div>
						<div class="input">
							<input name="subject" value="<?= $this->input->post('subject') ?>" placeholder="<?= $this->lang->line('Asunto') ?>*" class="post">
						</div>
						<div class="textarea">
							<textarea name="comments" placeholder="<?= $this->lang->line('Mensaje') ?>*"><?= $this->input->post('comments') ?></textarea>
							<div class="send">
								<butrton class="send-button"><?= $this->lang->line('Enviar') ?></butrton>
								<div class="clearfix"></div>
							</div>
						</div>
						<? if(isset($error)): ?>
						<div class="error"><?= $error ?></div>
						<? endif ?>
						<? endif ?>
					</div>
				</div>		
				<div class="contact-social">
					<a target="_blank" href="https://www.facebook.com/<?= $afaceb ?>"><i class="fa fa-facebook"></i><span class="hidden-xs"><span class="white">facebook.com</span>/<?= $afaceb ?></span></a>
					<a target="_blank" href="https://twitter.com/<?= $atwit  ?>"><i class="fa fa-twitter"></i><span class="hidden-xs">@<?= $atwit  ?></span></a>
					<a target="_blank" href="https://www.instagram.com/<?= $ainsta ?>"><i class="fa fa-instagram"></i><span class="hidden-xs">@<?= $ainsta ?></span></a>
					<a target="_blank" href="https://www.youtube.com/user/<?= $ayoutu ?>"><i class="fa fa-youtube"></i><span class="hidden-xs"><span class="white">youtube.com</span>/<?= $ayoutu ?></span></a>
				</div>		
				<div class="data">						
					<p>+34 697 25 15 06</p>
					<p class="link_mail"></p>
					<p><?= $this->lang->line('Barcelona, España') ?></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function() {

	// Esto es para evitar spammers
	$('.link_mail').html('<a target="_blank" href="#mail">info@joseantoniodemone.com</a>').click(function() {
		window.location.href = 'mailto:info@joseantoniodemone.com';
		return false;
	});

	$(window).resize(function(){

	}).resize();
	
	$('.send-button').click(function(){
		if($(this).hasClass('sent')) return;
		$(this).addClass('sent');		
		var data = {};
		data.name = $(".form input[name='name']").val();
		data.subject = $(".form input[name='subject']").val();
		data.mail = $(".form input[name='mail']").val();
		data.comments = $(".form textarea[name='comments']").val();
    $.ajax({
      type: "POST",
      cache: true,
      url: '<?= base_url() ?>contact',
      data: data,
      dataType: "html",
      processData: true
    }).done(function(html) {
			$('#content').animate({
	      'opacity': 0},
	      300, function() {        
	      $('#content').html(html);
	      ParseContent($('#content'));
	      $('#content').css({'opacity': 0}).animate({
	      'opacity': 1},300);
	      $(window).resize();
	    });
    });
	});
});
</script>
<?php $this->load->view('common/footer') ?>