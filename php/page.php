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

            <div class="col-sm-3 text-secondary pb-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item bg-dark text-secondary"><i class="bi bi-folder text-secondary"></i>&nbsp;<a href="<?= $page->categoryPermalink() ?>" title="<?= $page->category() ?>" rel="follow, noindex"><?= $page->category() ?></a></li>
                  <li class="list-group-item bg-dark text-secondary border-secondary small"><i class="bi bi-clock text-secondary"></i>&nbsp;<?= $page->date(); ?></li>
                </ul>
            </div>

            <div class="col-sm-9">
                <p class="text-secondary"><?= $page->content(); ?></p>
				<p class="clearfix"></p>
				<div class="row mt-5">

					<div class="col-md-12 col-lg-7">
						<h3 class="h4 mt-3"><?= $L->g('Related posts');?></h3>
		                <?php
						$sort = array();
						$relatedPages = $page->related();
						if( !empty( $relatedPages ) )
						{
							foreach ( $relatedPages as $pageKey )
							{
								$tmp = new Page( $pageKey );
								$sort[ $tmp->date[ 'U' ] ] = new Page( $pageKey );
							}
							krsort($sort);
							?>
							<ul class="list-group list-group-flush mb-3">
							<?php foreach ( $sort as $related ): ?>
								<li class="list-group-item bg-dark"><a href="<?= $related->permalink();?>" title="<?= $related->title();?>"><i class="bi bi-journal-text pe-2"></i><?= $related->title();?></a></li>
							<?php endforeach; ?>
							</ul>
						<?php
						}else{
							echo'<p style="color:#FFC354;"><i class="bi bi-exclamation-triangle-fill pe-1"></i>' . $L->g('No related posts found!') . '</p>';
						} ?>
					</div>

					<div class="col-md-12 col-lg-5">
						<?php if ( !empty( $page->tags( true ) ) ): ?>
		                <h3 class="h4 mt-3"><?= $L->g( 'Tags' );?></h3>
		                <p class="">
		                    <?php foreach ( $page->tags( true ) as $tagKey => $tagName ): ?>
		                    <a href="<?= DOMAIN_TAGS . $tagKey; ?>" title="<?= $L->g('Tag');?> <?= $tagName; ?>" rel="noindex, follow" class="me-1"><span class="badge rounded bg-secondary text-dark"><?= $tagName; ?></span></a>
		                    <?php endforeach ?>
		                </p>
		                <?php endif; ?>
					</div>

				</div>
				<p class="clearfix"></p>
				<?php Theme::plugins( 'pageEnd' ); ?>
            </div>

        </div>
    </div>
