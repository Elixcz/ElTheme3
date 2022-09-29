<?php defined('BLUDIT') or die('Unauthorized access!');?>
<?php Theme::plugins('pageBegin'); ?>
		<style type="text/css">
		@media (min-width: 768px) {
			.text{
				text-align: left !important;
				padding-top: 4rem !important;
				text-shadow: 1px 1px 2px #1A1A1A;
			}
			.icon{
				float:right !important;
				padding-right: 1rem !important;
				padding-top: 2rem;
				text-shadow: 1px 1px 2px #1A1A1A;
			}
		}
		</style>
    <div class="container pb-1">
        <div class="row">
            <div class="col-sm-12 col-lg-5 text-center">
				<i class="icon bi bi-exclamation-triangle-fill text-warning" style="font-size:7rem"></i>
			</div>
			<div class="col-sm-12 col-lg-7 text-center">
				<p class="text text-secondary fw-bold" style="font-size:200%">ERROR 404<br />PAGE NOT FOUND!</p>
			</div>
        </div>
    </div>
<?php Theme::plugins('pageEnd'); ?>
