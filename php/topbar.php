<?php defined('BLUDIT') or die('Unauthorized access!');?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-3 pb-3 shadow fixed-top">
    <div class="container">
		<a class="navbar-brand fw-bolder fs-4" href="<?= $site->url(); ?>" title="<?= $site->title(); ?>">
			<?php if( $site->logo() ):?>
			<img src="<?= $site->logo(); ?>" alt="" width="30" height="30" class="d-inline-block align-text-top">
			<?php endif; ?>
			<?= $site->title(); ?>
		</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#openNavbar" aria-controls="openNavbar" aria-expanded="false" aria-label="<?= $L->g('Toogle navigation');?>">
			<span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="openNavbar">
			<ul class="navbar-nav ms-2 me-auto mb-2 mb-lg-0">
				<?php foreach ( $categories->db as $key => $fields ):
				if( $fields[ 'list' ] ):
					if( $key == 'general') continue;
				?>
				<li class="nav-item ms-2">
					<a class="nav-link" aria-current="page" href="<?= DOMAIN_CATEGORIES . $key; ?>" title="<?= $L->g('All posts from category');?> <?= $fields['name']; ?>" rel="noindex, follow"><i class="bi bi-chevron-compact-right me-2 cat-icon"></i><?= $fields['name']; ?></a>
				</li>
				<?php
				endif;
				endforeach;
				?>
			</ul>
			<div class="fs-5 d-inline align-end">
				<div class="social-icons">
				<?php foreach ( Theme::socialNetworks() as $key => $label ): ?>

					<a class="text-secondary td-none social-link me-3" href="<?= $site->{ $key }(); ?>" title="<?= $label; ?>" target="_blank">
						<img class="d-inline nav-svg-icon" src="<?= DOMAIN_THEME . 'img/' . $key . '.svg' ?>" alt="<?= $label ?>" width="22" height="22">
					</a>

                <?php endforeach; ?>
                <?php if ( Theme::rssUrl() ): ?>

					<a class="text-secondary td-none social-link me-1" href="<?= Theme::rssUrl() ?>" title="<?= $L->g('RSS feed');?>" target="_blank">
						<img class="d-inline nav-svg-icon" src="<?= DOMAIN_THEME . 'img/rss.png'; ?>" alt="RSS" width="22" height="22">
					</a>

				<?php endif; ?>
				</div>
			</div>
        </div>
    </div>
</nav>
