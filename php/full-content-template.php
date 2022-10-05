<?php defined('BLUDIT') or die( 'Unauthorized access!' );?>
<?php Theme::plugins( 'pageBegin' ); ?>
    <div class="container pb-1">
        <div class="row">
            <div class="col-sm-12">
				<?php if ( $page->coverImage() ): ?>
					<img src="<?= $page->coverImage(); ?>" class="img-fluid rounded-top" alt="" width="2048" height="2048">
                <?php endif ?>
                <h1 class="h2 fw-bold mt-4 pb-2 text-center" id="post"><?= $page->title(); ?></h1>
            </div>

            <div class="col-sm-12 col-lg-6 offset-lg-3">
                <p class="text-secondary"><?= $page->content(); ?></p>
                <?php Theme::plugins( 'pageEnd' ); ?>
				<p class="clearfix"></p>
            </div>

        </div>
    </div>
