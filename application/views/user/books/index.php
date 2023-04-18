<?php $lang = $this->session->userdata('site_lang'); ?>
<style>
	.point-circle>svg {
		width: 50px !important;
	}
</style>
<div class="container">
	<div class="col-md-12" id="smart-booster-ebook" style="background: #6371F1; height: 100px; border-radius: 20px;">
		<div class="col-md-12 p-3" style="color: #fff; font-size: 1rem; font-weight: 700">
			<img src="assets/img/svg/Book/star.svg" style="width: 18px">
			<?= $this->lang->line('smart_booster'); ?>

			<p style="font-size: 8px; margin-bottom: 0; margin-left: 20px"><?= $this->lang->line('recommends'); ?></p>
			<p style="font-size: 8px; margin-bottom: 0; margin-left: 20px"><?= $this->lang->line('new_method_of_reading'); ?></p>

			<div style="position: relative">
				<img src="assets/img/svg/Book/book1.svg" style="width: 62px; position: absolute; right: 10px; top: -45px">
			</div>
		</div>

	</div>

	<div class="col-md-12 col-lg-10 offset-md-1 topics-list border-radius-20">
		<div class="col-md-12 p-3 gray-color user-titles topics-list-title">
			<img src="assets/img/svg/Book/book.svg" class="icon-size">
			<?= $this->lang->line('title'); ?>
		</div>
		<div class="row">
			<?php
			$i = 1;
			foreach ($ebooks->result_array() as $ebook) :
			?>

				<?php if ($ebook['id'] % 2 == 0) : ?>
					<div class="col-12 col-sm-12 col-md-6 odd">
						<a href="user/books/read/<?= $ebook['id'] ?>" style="text-decoration: none">
							<div class="col-12 p-3 mt-2" style="background: #fff;box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.03);border-radius: 13px;">
								<div class="row">
									<div class="col-3">
										<img src="<?= $ebook['icon'] ?>" style="width: 50px">
									</div>
									<div class="col-6">
										<p class="gray-color" style="margin-bottom: 5px"><?= $ebook['title'] ?></p>
									</div>
									<div class="col-3" style="border-<?= ($lang == 'arabic') ? 'right':'left' ?>: 1px solid #E5E4E9">
										<div class="point-circle" id="circle<?= $i ?>" style="fill: #000;padding: 0"></div>

										<script>
											circliful.newCircle({
												percent: 50,
												id: '<?= 'circle' . $i ?>',
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
								</div>
							</div>
						</a>
					</div>
				<?php else : ?>
					<div class="col-12 col-sm-12 col-md-6 even">
						<a href="user/books/read/<?= $ebook['id'] ?>" style="text-decoration: none">
							<div class="col-12 p-3 mt-2" style="background: #fff;box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.03);border-radius: 13px;">
								<div class="row">
									<div class="col-3">
										<img src="<?= $ebook['icon'] ?>" style="width: 50px">
									</div>
									<div class="col-6">
										<p class="gray-color" style="margin-bottom: 5px"><?= $ebook['title'] ?></p>
									</div>
									<div class="col-3" style="border-<?= ($lang == 'arabic') ? 'right':'left' ?>: 1px solid #E5E4E9">
										<div class="point-circle" id="circle<?= $i ?>" style="fill: #000;padding: 0"></div>

										<script>
											circliful.newCircle({
												percent: 50,
												id: '<?= 'circle' . $i ?>',
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
								</div>
							</div>
						</a>
					</div>
				<?php endif; ?>

			<?php
				$i++;
			endforeach;
			?>
		</div>
	</div>

</div>