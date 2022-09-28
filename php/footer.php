<?php defined('BLUDIT') or die('Unauthorized access!');?>
<div class="container pt-5 pb-5 text-center">
	<div class="row">
		<small class="text-secondary">
			<p class="pb-0 mb-0">Copyright &copy; <?= date('Y'); ?> <a href="<?= $site->url(); ?>" class="fw-bold footer-link" title="<?= $site->title(); ?>" tabindex="-1"><?= $site->title(); ?></a><br /><?= $site->footer(); ?></p>
			<p class="fs-5">
				<?php foreach ( Theme::socialNetworks() as $key => $label ): ?>
				<a class="text-secondary td-none social-link me-1" href="<?= $site->{ $key }(); ?>" title="<?= $label; ?>" target="_blank">
					<img class="d-inline nav-svg-icon" src="<?= DOMAIN_THEME . 'img/' . $key . '.svg' ?>" alt="<?= $label ?>" width="16" height="16" loading="lazy">
				</a>
                <?php endforeach; ?>
                <?php if ( Theme::rssUrl() ): ?>
					<a class="text-secondary td-none social-link me-1" href="<?= Theme::rssUrl() ?>" title="<?= $L->g('RSS feed');?>" target="_blank">
						<img class="d-inline nav-svg-icon" src="<?= DOMAIN_THEME . 'img/rss.png'; ?>" alt="RSS" width="16" height="16" loading="lazy">
					</a>
				<?php endif; ?>
			</p>
		</small>
	</div>
</div>
