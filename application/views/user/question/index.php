<?php 
$questions_count = $this->session->userdata('questions_count');
$next = array_search($question_id, $questions_count) + 1;
$topic = $this->session->userdata('topic_id');
?>
<div>
	<div class="question-section">
		<div class="question-body">
			<div class="col-md-12 question-header-mobile bg-grey">
				<div class="row">
					<div class="col-4" style="text-align: left"><a href="user/questions/<?= $topic ?>/<?= $next-1 ?>" class="pink-color" style="text-decoration: none"> <img src="assets/img/svg/20/arrow-right-1.svg" style="width: 20px"> <?= $this->lang->line('back'); ?></a></div>
					<div class="col-4 text-center">
						<?= array_search($question_id, $questions_count) + 1 ?> / <?= count($questions_count) ?>
					</div>
					<div class="col-4" style="text-align: right"><img src="assets/img/star.svg"></div>

				</div>
			</div>
			<div id="mobile-header" class="bg-white position-relative" style="float:left;width:100%;height:4px;">

			</div>
			<div class="question-header-dessktop text-center">
				<div class="text-center pt-3 pb-3">
					<?= $next ?> / <?= count($questions_count) ?>
					<div class="bg-white position-relative" style="float:left;width:500px;height:4px;">
						<?php for ($i = 0; $i < count($questions_count); $i++) : ?>
							<div class="<?= ($i <= array_search($question_id, $questions_count)) ? 'bg-pink' : '' ?>" style="width: <?= 500 / count($questions_count) . 'px'; ?>; height: 4px; float: left"></div>
						<?php endfor; ?>
					</div>
				</div>
			</div>

			<?= $question_page ?>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		var $width = $(window).width();
		var $count = '<?= count($questions_count) ?>';
		var $question_id = '<?= array_search($question_id, $questions_count) ?>';
		for ($i = 0; $i < parseInt($count); $i++) {
			var bg = $i <= $question_id ? 'bg-pink' : '';
			$('#mobile-header').append(
				'<div class="' + bg + '" style="width: ' + $width / $count + 'px;height: 4px; float: left"></div>'
			);
		}

	})
</script>