<?php $lang = $this->session->userdata('site_lang'); ?>
<div class="col-12">
	<div class="col-md-12 question-image">
		<img src="assets/img/questions/question-test.png">
	</div>
	<div class="col-md-12 p-3">
		<div class="row">
			<div class="col-1 text-center"><strong style="font-size: 20px">3.</strong></div>
			<div class="col-11 px-3" style="text-align: <?= ($lang == 'arabic') ? 'right' : 'left' ?>">
				<p style="font-size: 1rem"><?= $question->question ?> </p>
			</div>
		</div>
	</div>
	<div class="col-md-12 px-3">
		<?php if ($question->question_type == 'three_answer') : ?>
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

			<div class="answers">
				<div class="row">
					<div class="col-2 text-center">c</div>
					<div class="col-10 px-3" style="text-align: <?= ($lang == 'arabic') ? 'right' : 'left' ?>">
						<p style="font-size: 0.8rem; margin: 5px 0">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porta purus.
						</p>
					</div>
				</div>
			</div>
		<?php elseif ($question->question_type == 'abc') : ?>

		<?php endif ?>
	</div>
	<div class="col-md-12 pt-3 px-3" style="display: none;text-align: <?= ($lang == 'arabic') ? 'right' : 'left' ?>">
		<p style="font-size: 0.8rem">
			<span style="color: #f00; font-size: 18px">Remember!</span> The green symbol indicates a low beam. The blue symbol stands for the main beam. The yellow symbol indicates the rear fog light and the two green arrows indicate the direction indicator.
		</p>
	</div>
	<div class="col-md-12 text-center" style="padding-top: 30px">
		<button class="btn-pink" style="padding: 15px 80px; position: relative">Next <img src="assets/img/svg/20/arrow-right.svg" style="width: 16px; position: absolute; right: 15px; top: 20px"></button>
	</div>
</div>