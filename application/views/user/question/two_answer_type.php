<?php $lang = $this->session->userdata('site_lang'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12" style="height: 70px; padding-top: 30px; background: #eee">
			<div class="row">
				<div class="col-4" style="text-align: left"><a href="user/home" class="pink-color" style="text-decoration: none"> <img src="assets/img/svg/20/arrow-right-1.svg" style="width: 20px"> Back</a></div>
				<div class="col-4 text-center">1 / 22</div>
				<div class="col-4" style="text-align: right"><img src="assets/img/star.svg"></div>
			</div>
		</div>
		<div class="col-md-12" style="height: 100px;">
			<div class="row">
				<div class="col-1 text-center"><strong style="font-size: 20px">3.</strong></div>
				<div class="col-11 px-3" style="text-align: <?= ($lang == 'arabic') ? 'right' : 'left' ?>">
					<p style="font-size: 1rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc velit cursus convallis amet. </p>
				</div>
			</div>
		</div>
		<div class="col-md-12" style="padding: 0">
			<img src="assets/img/questions/question-test.png" style="width: 100%">
		</div>
		<div class="col-md-12">
			<div class="answers">
				<div class="row">
					<div class="col-2 text-center">a</div>
					<div class="col-10 px-3" style="text-align: <?= ($lang == 'arabic') ? 'right' : 'left' ?>">
						<p style="font-size: 0.8rem; margin: 5px 0">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porta purus.
						</p>
					</div>
				</div>
			</div>

			<div class="answers">
				<div class="row">
					<div class="col-2 text-center">b</div>
					<div class="col-10 px-3" style="text-align: <?= ($lang == 'arabic') ? 'right' : 'left' ?>">
						<p style="font-size: 0.8rem; margin: 5px 0">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porta purus.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12 pt-3 px-3" style="display: none; text-align: <?= ($lang == 'arabic') ? 'right' : 'left' ?>">
			<p style="font-size: 0.8rem">
				<span style="color: #f00; font-size: 18px">Remember!</span> The green symbol indicates a low beam. The blue symbol stands for the main beam. The yellow symbol indicates the rear fog light and the two green arrows indicate the direction indicator.
			</p>
		</div>
		<div class="col-md-12 text-center" style="padding-top: 30px">
			<button class="btn-pink" style="padding: 15px 80px; position: relative">Next <img src="assets/img/svg/20/arrow-right.svg" style="width: 16px; position: absolute; right: 15px; top: 20px"></button>
		</div>
	</div>
</div>