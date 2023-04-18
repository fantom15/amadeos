<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<?php
$user_info = $this->session->userdata('user_info');
?>
<style>
	.apexcharts-toolbar {
		display: none !important;
	}
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-1 user-image">
					<img src="assets/img/user/<?= (!empty($user_info->image)) ? $user_info->image : 'user.png' ?>">
				</div>
				<div class="col-3 user-profile-link">
					<p style="margin-bottom: 0"><?= $user_info->full_name ?></p>
					<a class="pink-color" style="text-decoration: none" href="user/profile"><?= $this->lang->line('edit_profile'); ?></a>
				</div>
			</div>
		</div>
		<div class="col-md-7 desktop-sections">
			<div class="col-12 bg-grey main-box">
				<div class="col-12 p-3">
					<div class="row">
						<div class="col-md-6">
							<h3 class="gray-color">
								<img src="assets/img/svg/24/message-question.svg" style="width: 30px"> <?= $this->lang->line('question_themes'); ?>
							</h3>
						</div>
						<div class="col-md-6" style="position: reletive; text-align: right;">
							<a id="btn-yellow-last-point"><?= $this->lang->line('latest_point'); ?> <img src="assets/img/svg/24/play.svg" style="width: 9px"></a>
						</div>
					</div>
				</div>
				<div class="col-12 container">
					<div class="row">
						<?php for ($i = 1; $i < 9; $i++) : ?>
							<div class="col-md-3 circle-box-chart">
								<div class="col-12 question-themes text-center">
									<div id="circle<?= $i ?>"></div>
									<p class="gray-color"><?= $this->lang->line('user_menu')['home']; ?></p>
								</div>
							</div>
						<?php endfor; ?>
					</div>
				</div>
			</div>
			<div class="col-12 bg-grey main-box">
				<div class="col-12 p-3">
					<h3 class="gray-color"><?= $this->lang->line('user_menu')['progress']; ?></h3>
					<div id="container" style="width:100%; height:400px;"></div>
				</div>
			</div>
		</div>
		<div class="col-md-5 desktop-sections">
			<div id="smart-booster">
				<div class="col-12 main-box smart-booster">
					<img src="assets/img/svg/24/star.svg" style="width: 30px;position: absolute; top: 20px; left: 30px">
					<h4 style="color: #6371F1; position: absolute; top: 20px; left: 70px"><?= $this->lang->line('smart_booster'); ?></h4>
					<div class="col-12 text-center">
						<p id="smart-booster-btn">
							<img src="assets/img/svg/24/book.svg" style="width: 32px; margin-top:20px">
						</p>
						<p><?= $this->lang->line('recommend'); ?></p>
						<p><?= $this->lang->line('new_method_of_reading'); ?></p>
					</div>
				</div>
			</div>
			<div class="col-12 bg-grey main-box muck-section pb-3 position-relative">
				<img class="position-absolute gray-color" src="assets/img/svg/24/task-square.svg" style="width: 30px; top: 20px; left: 30px">
				<h4 class="position-absolute gray-color" style="top: 20px; left: 70px"><?= $this->lang->line('muck'); ?></h4>
				<div class="col-12 text-center px-4">
					<p style="font-size: 25px; font-weight: 700;">
						<?= $this->lang->line('ready_for_final_exam'); ?>
					</p>
				</div>
				<div class="col-6 offset-3" style="height: 1px; background: #aaa;"></div>
				<div class="col-12 text-center pt-4">
					<p style="font-size: 10px;"><?= $this->lang->line('level_of_preparation'); ?></p>
					<a style="padding: 10px 30px; text-decoration: none; margin-top: 20px; display: inline-block;" class="btn-pink"><?= $this->lang->line('lets_go'); ?>!</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-12" style="padding: 15px!important;">
	<div class="row">
		<div class="col-6 mobile-sections" style="padding: 5px">
			<div class="muck-mobile">
				<div class="gray-color" style="font-size: 1rem; font-weight: 700; position: absolute; top: 12px; left: 12px; right: 12px">
					<img src="assets/img/svg/24/task-square.svg" style="width: 18px"> <?= $this->lang->line('muck'); ?>

					<div style="text-align: center; color: #46444E; font-size: 0.6rem; margin-top: 15px;">
						<?= $this->lang->line('ready_for_final_exam'); ?>
					</div>
					<div style="text-align: center; height: 1px; background: #E5E4E9; margin-top: 10px;"></div>
					<div style="text-align: center; font-size: 0.3rem; margin-top: 10px;">
						<?= $this->lang->line('level_of_preparation'); ?>
					</div>
					<div style="text-align: center; font-size: 0.4rem; margin-top: 10px;">
						<a class="btn-pink" style="width: 70px; text-decoration: none; padding-top: 5px; height: 20px; display: inline-block;">Lets Go <img src="assets/img/svg/24/play.svg" style="width: 9px"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 mobile-sections" style="padding: 5px; position: relative">
			<div class="col-11" style="position: absolute; font-size: 10px; top: -30px; text-align: right">
				<img src="assets/img/svg/24/info-circle.svg" style="width: 18px">
				<img src="assets/img/svg/24/task-square.svg" style="width: 18px">
				156 <?= $this->lang->line('days_left'); ?>
			</div>
			<div class="smart-mobile">
				<div class="gray-color" style="font-size: 1rem; font-weight: 700; position: absolute; top: 12px; left: 12px; right: 12px">
					<img src="assets/img/svg/24/star.svg" style="width: 18px"> <span class="pink-color"><?= $this->lang->line('smart booster'); ?></span>
					<a href="user/books">
						<div class="mt-4 square-pink">
							<img src="assets/img/svg/24/book.svg" style="position: absolute; top: 30%; left: 30%; width: 25px; height: 25px">
						</div>
						<div style="position: fixed; bottom: 5%; text-align: center; left: 15%">
							<p style="font-size: 0.7rem; margin: 0; color: #65636D"><?= $this->lang->line('recommend'); ?></p>
							<p class="gray-color" style="font-size: 0.6rem; margin: 0"><?= $this->lang->line('new_method_of_reading'); ?></p>
						</div>
					</a>

				</div>
			</div>
		</div>
		<div class="col-12 mobile-sections">
			<div class="col-12 mt-3">
				<div class="gray-color" style="font-size: 16px;">
					<img src="assets/img/svg/24/message-question.svg" style="width: 18px">
					<?= $this->lang->line('question_themes'); ?>
				</div>
				<div style="position: absolute;text-align: center; right: 15px; margin-top: -25px; width: 122px;height: 30px;background: #F6C142;border-radius: 21.5px;">
					<a style="display: inline-block; font-size: 12px; color: #fff; text-decoration: none"><?= $this->lang->line('latest_point'); ?> <img src="assets/img/svg/24/play.svg" style="width: 9px"></a>
				</div>

			</div>
			<div class="col-12 mt-3 point-slick">
				<?php for ($i = 1; $i < 9; $i++) : ?>
					<div class="point-sections">
						<div class="point-circle" id="point-circle<?= $i ?>" style="fill: #000"></div>
						<img class="mt-2" src="assets/img/svg/23/XMLID_<?= $i ?>.svg" style="width: 53px; display: inline-block">
					</div>
				<?php endfor; ?>
			</div>
		</div>
		<div class="col-12 mobile-sections">
			<div class="col-12 progress-section">
				<div style="font-size: 13px;">
					<img src="assets/img/svg/24/graph.svg" style="width: 18px">
					<?= $this->lang->line('user_menu')['progress']; ?>
					<div class="col-5 offset-6" style="border-left: 1px solid #B8B7BE; padding-left: 5px">
						<a class="pink-color" href="#"><?= $this->lang->line('click_here'); ?> <img src="assets/img/svg/24/arrow-right.svg" style="width: 9px"></a><br>
						<p class="gray-color" style="font-size: 0.7rem"><?= $this->lang->line('improvement_of_each_section'); ?></p>
					</div>
					<div class="ct-chart ct-perfect-fourth"></div>

				</div>
			</div>
		</div>
	</div>
</div>
</div>


<script>
	circliful.newCircle({
		percent: 50,
		id: 'circle1',
		type: 'simple',
		backgroundCircleWidth: 10,
		foregroundCircleWidth: 10,
		progressColors: [{
			percent: 1,
			color: '#5850DA'
		}]
	});

	circliful.newCircle({
		percent: 34,
		id: 'circle2',
		type: 'simple',
		backgroundCircleWidth: 10,
		foregroundCircleWidth: 10,
		progressColors: [{
			percent: 1,
			color: '#5850DA'
		}]
	});

	circliful.newCircle({
		percent: 87,
		id: 'circle3',
		type: 'simple',
		backgroundCircleWidth: 10,
		foregroundCircleWidth: 10,
		progressColors: [{
			percent: 1,
			color: '#5850DA'
		}]
	});

	circliful.newCircle({
		percent: 74,
		id: 'circle4',
		type: 'simple',
		backgroundCircleWidth: 10,
		foregroundCircleWidth: 10,
		progressColors: [{
			percent: 1,
			color: '#5850DA'
		}]
	});

	circliful.newCircle({
		percent: 23,
		id: 'circle5',
		type: 'simple',
		backgroundCircleWidth: 10,
		foregroundCircleWidth: 10,
		progressColors: [{
			percent: 1,
			color: '#5850DA'
		}]
	});

	circliful.newCircle({
		percent: 65,
		id: 'circle6',
		type: 'simple',
		backgroundCircleWidth: 10,
		foregroundCircleWidth: 10,
		progressColors: [{
			percent: 1,
			color: '#5850DA'
		}]
	});

	circliful.newCircle({
		percent: 90,
		id: 'circle7',
		type: 'simple',
		backgroundCircleWidth: 10,
		foregroundCircleWidth: 10,
		progressColors: [{
			percent: 1,
			color: '#5850DA'
		}]
	});

	circliful.newCircle({
		percent: 13,
		id: 'circle8',
		type: 'simple',
		backgroundCircleWidth: 10,
		foregroundCircleWidth: 10,
		progressColors: [{
			percent: 1,
			color: '#5850DA'
		}]
	});
</script>
<script>
	circliful.newCircle({
		percent: 50,
		id: 'point-circle1',
		type: 'simple',
		backgroundCircleWidth: 6,
		foregroundCircleWidth: 6,
		progressColors: [{
			percent: 1,
			color: '#5850DA'
		}]
	});

	circliful.newCircle({
		percent: 50,
		id: 'point-circle2',
		type: 'simple',
		backgroundCircleWidth: 6,
		foregroundCircleWidth: 6,
		progressColors: [{
			percent: 1,
			color: '#5850DA'
		}]
	});

	circliful.newCircle({
		percent: 50,
		id: 'point-circle3',
		type: 'simple',
		backgroundCircleWidth: 6,
		foregroundCircleWidth: 6,
		progressColors: [{
			percent: 1,
			color: '#5850DA'
		}]
	});

	circliful.newCircle({
		percent: 50,
		id: 'point-circle4',
		type: 'simple',
		backgroundCircleWidth: 6,
		foregroundCircleWidth: 6,
		progressColors: [{
			percent: 1,
			color: '#5850DA'
		}]
	});

	circliful.newCircle({
		percent: 50,
		id: 'point-circle5',
		type: 'simple',
		backgroundCircleWidth: 6,
		foregroundCircleWidth: 6,
		progressColors: [{
			percent: 1,
			color: '#5850DA'
		}]
	});

	circliful.newCircle({
		percent: 50,
		id: 'point-circle6',
		type: 'simple',
		backgroundCircleWidth: 6,
		foregroundCircleWidth: 6,
		progressColors: [{
			percent: 1,
			color: '#5850DA'
		}]
	});

	circliful.newCircle({
		percent: 50,
		id: 'point-circle7',
		type: 'simple',
		backgroundCircleWidth: 6,
		foregroundCircleWidth: 6,
		progressColors: [{
			percent: 1,
			color: '#5850DA'
		}]
	});

	circliful.newCircle({
		percent: 50,
		id: 'point-circle8',
		type: 'simple',
		backgroundCircleWidth: 6,
		foregroundCircleWidth: 6,
		progressColors: [{
			percent: 1,
			color: '#5850DA'
		}]
	});
</script>
<script>
	$('.point-slick').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 2,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 3000,
	});
</script>

<script>
	new Chartist.Line('.ct-chart', {
		labels: ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'],
		series: [
			[5, 9, 7, 8, 5, 3, 5, 4]
		]
	}, {
		low: 0,
		showArea: true,
		showLine: true,
		showPoint: false,
		fullWidth: true,
		axisX: {
			showLabel: false,
			showGrid: false
		}
	});
</script>

<script>
	var options = {
		series: [{
			name: 'series1',
			data: [31, 40, 28, 51, 70, 28, 22, 61, 51, 42, 54, 37]
		}],
		chart: {
			height: 350,
			type: 'area',
			color: '#ff0000'
		},
		dataLabels: {
			enabled: false
		},
		stroke: {
			curve: 'smooth'
		},
		xaxis: {
			categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
		},

		colors: ['#6371F1'],


	};


	var chart = new ApexCharts(document.querySelector("#container"), options);

	chart.render();
</script>