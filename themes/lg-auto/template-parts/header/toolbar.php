<div class="toolbar-occasion">
		<div class="container-visible">
			<?php if( wp_is_mobile() ) : ?>
				<h3 class="title-toolbar" ><?= __('occasion'); ?></h3>
			<?php else : ?>
				<div class="icon-wheel icons"></div>
				<h3 class="title-toolbar" ><?= __('Véhicules '); ?><span><?= __('d\'occasions'); ?></span></h3>
			<?php endif; ?>
        </div>
        <div class="container-hidden">
            <div class="container-icon">
				<a href="<?= site_url('#'); ?>">
					<div class="icon-car icons-tool icons"></div>
					<span><?= __('Voitures'); ?></span>
				</a>
            </div>
            <div class="container-icon">
				<a href="<?= site_url('#'); ?>">
                	<div class="icon-moto icons-tool icons"></div>
                	<span><?= __('Motos'); ?></span>
				</a>
            </div>
            <div class="container-icon">
				<a href="<?= site_url('#'); ?>">
                	<div class="icon-scooter icons-tool icons"></div>
                	<span><?= __('Scooters'); ?></span>
				</a>
            </div>
            <div class="container-icon">
				<a href="<?= site_url('#'); ?>">
                	<div class="icon-quad icons-tool icons"></div>
                	<span><?= __('Quads'); ?></span>
				</a>
            </div>
            <div class="container-icon">
				<a href="<?= site_url('#'); ?>">
                	<div class="icon-vans icons-tool icons"></div>
                	<span><?= __('Utilitaires'); ?></span>
				</a>
            </div>
            <div class="container-icon">
				<a href="<?= site_url('#'); ?>">
                	<div class="icon-truck icons-tool icons"></div>
                	<span><?= __('Camions'); ?></span>
				</a>
            </div>
        </div>
	</div>
