<?php defined('BLUDIT') or die('Unauthorized access!');?>
<div class="container pb-1">
	<div class="row">
		<?php
		if ( empty( $content ) ) {
			$L->p('No pages found');
		}
		?>
		<?php if ( $WHERE_AM_I == 'category' ):
			$categoryKey = $url->slug();
			$category = new Category( $categoryKey );
		?>
			<div class="col-sm-12">
				<h2 class=" h3 pb-3" style="font-weight:300!important"><i class="bi bi-info-square-fill pe-2" style="color:#FFA500;"></i><?= $L->g('All posts from category');?> <span class="text-white"><?= $category->name();?></span></h3>
			</div>
		<?php elseif( $WHERE_AM_I=='tag' ):
			$tagKey = $url->slug();
			$tag = new Tag( $tagKey );
		?>
			<div class="col-sm-12">
				<h2 class="h3 pb-3" style="font-weight:300!important"><i class="bi bi-info-square-fill pe-2" style="color:#FFA500;"></i><?= $L->g('All posts with tag');?> <span class="text-white"><?= $tag->name();?></span></h3>
			</div>
		<?php endif;?>

		<?php foreach ($content as $page): ?>
			<div class="col-sm-12 col-md-6 col-lg-4 mb-3">

		        <div class="card  bg-dark shadow h-100">
					<a class="text-white" href="<?= $page->permalink(); ?>" title="<?= $page->title(); ?>" tabindex="0">
						<img src="<?php echo ( $page->coverImage() ? $page->coverImage() : Theme::src('img/noimage.png') ) ?>" class="card-img-top" alt="" />
					</a>
					<div class="card-body">

						<h3 class="h4 card-title pb-1">
							<a class="text-white" href="<?= $page->permalink(); ?>" title="<?= $page->title(); ?>">
								<?= $page->title(); ?>
							</a>
						</h3>

						<p class="card-text text-secondary">
						<?php if( function_exists('eltheme3_excerpt') ): ?>
							<?= eltheme3_excerpt( $page->content(), 200, '...'); ?>
						<?php else: ?>
							<?= $page->description(); ?>
						<?php endif; ?>
						</p>
					</div>
					<div class="card-footer">
						<div class="text-secondary small">
							<p class="pe-3 pb-1 mb-1"><span class="float-start"><i class="bi bi-folder text-secondary"></i><a href="<?= $page->categoryPermalink();?>" rel="follow, noindex" title="<?= $page->category(); ?>"><?= $page->category(); ?></a></span>
							<span class="float-end small"><i class="bi bi-clock text-secondary"></i><?= $page->date(); ?></span></p>
						</div>
					</div>
		        </div>

			</div>
		<?php endforeach; ?>
	</div>

    <?php if ( Paginator::numberOfPages() > 1 ): ?>
    <div class="container py-5 text-center">
		<div class="btn-group rounded-pill" role="group" aria-label="<?= $L->g('Next or previous post');?>">
		<?php if ( Paginator::showPrev() ): ?>
			<a class="btn text-dark fw-bold px-5" style="background-color: #7F7F7F;opacity:0.8;" href="<?= Paginator::previousPageUrl(); ?>" role="button" title="<?php $L->p('Previous');?>" rel="noindex, follow"><i class="bi bi-arrow-left"></i><?php $L->p('Previous');?></a>
		<?php endif ?>
		<?php if ( Paginator::showNext() ): ?>
			<a class="btn text-dark fw-bold px-5" style="background-color: #7F7F7F;opacity:0.8;" href="<?= Paginator::nextPageUrl(); ?>" role="button" title="<?php $L->p('Next');?>" rel="noindex, follow"><?php $L->p('Next');?> <i class="bi bi-arrow-right"></i></a>
		<?php endif ?>
		</div>
    </div>
    <?php endif; ?>
