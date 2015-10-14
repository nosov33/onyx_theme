<header>
	<div class="container">
		<div class="col-lg-4 col-md-6 col-sm-12 logo">
			<?php if ($logo): ?>
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
		        	<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
		        </a>
		    <?php endif; ?>			
		</div>
		<div class="col-lg-8 col-md-6 col-sm-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('nav', 'navbar-nav'), ), 'heading' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'), ), )); ?>
				</div>
			</nav>	
		</div>
	</div>
</header>
<section class="promo">
	<div class="container">
		<div class="col-lg-12 col-md-12">
			<h2><?php print $title; ?></h2>
			<?php if ($tabs):?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
			<!-- EOF: #tabs -->
			<?php if (isset($page['content'])) { print render($page['content']); } ?>
		</div>
	</div>		
</section>



<contact>
	<h2 class="sec">Iletisim</h2>
	<div class="container">
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="contact_details">
				<?php if ($page['contact_details']): ?>
					<?php print render($page['contact_details']); ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-lg-8 col-md-6 col-sm-12">
			<?php if ($page['contact']): ?>
				<?php print render($page['contact']); ?>
			<?php endif; ?>			
		</div>
	</div>	
</contact>
<footer>
	<div class="container">
		<div class="col-lg-10 col-md-8 col-sm-12">
			<div class="copy">
				<?php if ($page['footer_rights']): ?>
		        	<?php print render($page['footer_rights']); ?>
		        <?php endif; ?>
			</div>
		</div>
		<div class="col-lg-2 col-md-4 col-sm-12">
			<a href="http://drupaldeveloper.ru/" target="_blank" alt="Site developed by Ivan Nosov"><div class="nosovlogo"></div></a>
		</div>
	</div>
</footer>