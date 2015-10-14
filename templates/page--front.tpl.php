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
<slider>
	<?php if ($page['slider']): ?>
		<?php print render($page['slider']); ?>
	<?php endif; ?>
</slider>
<section class="why">
	<div class="container">	
			<div class="col-lg-3 col-md-3 col-sm-12">
				<div class="awasome"><i class="fa fa-hourglass-end"></i></div>
					<?php if ($page['why_1']): ?>
						<?php print render($page['why_1']); ?>
					<?php endif; ?>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12">
				<div class="awasome"><i class="fa fa-television"></i></div>
					<?php if ($page['why_1']): ?>
						<?php print render($page['why_1']); ?>
					<?php endif; ?>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12">
				<div class="awasome"><i class="fa fa-money"></i></div>
					<?php if ($page['why_1']): ?>
						<?php print render($page['why_1']); ?>
					<?php endif; ?>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12">
				<div class="awasome"><i class="fa fa-file-image-o"></i></div>
					<?php if ($page['why_1']): ?>
						<?php print render($page['why_1']); ?>
					<?php endif; ?>
			</div>
	</div>
</section>
<section class="add_ons">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-12">
			<div class="laptop"><img src="http://3dmodeltasarim.com/sites/all/themes/ilhan/images/laptop.jpg" /></div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 addons">
			<?php if ($page['addons']): ?>
				<?php print render($page['addons']); ?>
			<?php endif; ?>			
		</div>
	</div>	
</section>
<section class="white_info">
	<div class="container">
	<?php if ($page['testim']): ?>
		<?php print render($page['testim']); ?>
	<?php endif; ?>			
	</div>
</section>
<section class="news">
	<h2 class="header"></h2>
	<div class="container">
	<?php if ($page['news']): ?>
		<?php print render($page['news']); ?>
	<?php endif; ?>		
	</div>
</section>
<section class="white">
	
</section>
<map>
	<h2 class="header">Bir Soruları var mı?</h2>
	<?php if ($page['map']): ?>
		<?php print render($page['map']); ?>
	<?php endif; ?>	
	<div class="map_after"></div>
</map>
<contact>
	<h2 class="sec">İletişim</h2>
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