<?php defined('BLUDIT') or die('Unauthorized access!');?>
<!doctype html>
<html lang="<?= Theme::lang() ?>">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include( THEME_DIR_PHP . 'head.php' ); ?>
	</head>
	<body class="text-secondary">
		<div class="container" style="padding-top:110px;">
		<?php
		Theme::plugins( 'siteBodyBegin' );
		include( THEME_DIR_PHP . 'topbar.php' );

		if ( $WHERE_AM_I == 'page' )
		{
			if ( $page->slug() == 'error' )
			{
				include ( THEME_DIR_PHP . 'error.php' );
			} elseif ( $page->template() )
			{
				include ( THEME_DIR_PHP . $page->template() . '.php' );
			}else{
				include ( THEME_DIR_PHP . 'page.php' );
			}
		} else {

			include ( THEME_DIR_PHP . 'home.php' );
		}
		include ( THEME_DIR_PHP . 'footer.php' );
		?>
		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/js/bootstrap.min.js" integrity="sha512-vyRAVI0IEm6LI/fVSv/Wq/d0KUfrg3hJq2Qz5FlfER69sf3ZHlOrsLriNm49FxnpUGmhx+TaJKwJ+ByTLKT+Yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script defer src="https://cdn.jsdelivr.net/npm/jquery-gotop@2.0.0/src/jquery.gotop.min.js" integrity="sha256-JVizKyAZlNd42va0G2pjhaoMhe8P2MtD65jOv8hp1yU=" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script defer src="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js" integrity="sha256-P93G0oq6PBPWTP1IR8Mz/0jHHUpaWL0aBJTKauisG7Q=" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="<?= DOMAIN_THEME_JS . 'script.js?v=' . ELTHEME3_VERSION;?>"></script>
		<?php Theme::plugins('siteBodyEnd');?>
		</div>
		<div id="goTop"></div>
	</body>
</html>
