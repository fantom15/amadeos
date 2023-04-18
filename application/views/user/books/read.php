<style>
	@media (max-width: 991px) {
		.point-circle>svg {
			width: 50px !important;
		}
	}

	.point-circle>svg {
		width: 100px;
	}

	.point-circle {
		text-align: right;
	}


	.div-content img {
		max-width: 100% !important;
	}
</style>
<div class="container">
	<div class="col-md-12 col-lg-10 offset-md-1 p-3 gray-box reading-box">
		<div class="row">
			<div class="col-3 col-sm-3 col-md-2">
				<img class="topic-icons" src="<?= $ebook->row()->icon ?>">
			</div>
			<div class="col-6 col-sm-6 col-md-6 topic-title" style="color: #46444E">
				<p style="margin-bottom: 5px;"><?= $ebook->row()->title ?></p>
			</div>
			<div class="col-3 col-sm-3 col-md-4">
				<div class="point-circle" id="circle1" style="fill: #000;padding: 0"></div>
				<script>
					var id = 'circle1'
					circliful.newCircle({
						percent: 50,
						id: id,
						type: 'simple',
						backgroundCircleWidth: 5,
						foregroundCircleWidth: 5,
						progressColors: [{
							percent: 1,
							color: '#5850DA'
						}]
					});
				</script>
			</div>
			<?php if ($first_question) : ?>
				<div class="col-12 col-sm-12 col-md-12 topic-take-test">
					<a href="user/questions/<?= $ebook->row()->id ?>/<?= $first_question ?>" class="btn-pink-2 mt-2" style=" position: relative; text-decoration: none; width: 126px; height: 32px; padding-top: 5px; padding-left: 15px">
						<span style="<?= ($this->session->userdata('site_lang') == 'arabic') ? 'margin-right: 45px' : '' ?>"><?= $this->lang->line('take_a_test'); ?></span>
						<img src="assets/img/svg/Book-2/task-square.svg" style="width: 15px; position: absolute; right: 15px; top: 7px">
					</a>
				</div>
			<?php endif; ?>
			<div class="clearfix"></div>
			<div class="col-10 col-sm-10 col-md-12 offset-1 offset-md-0 mt-3 mb-2" style="height: 1px; border-top: 1px solid #E5E4E9"></div>
			<div class="col-12 mt-3 div-content">
				<?= $ebook->row()->content ?>
			</div>
		</div>
	</div>
</div>