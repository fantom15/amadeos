<?php
$user_info = $this->session->userdata('user_info');
?>
<div class="container">
	<div class="col-md-12 col-lg-10 offset-md-1 glass-background profile-membership">
		<div class="row" style="padding-left: 15px">
			<div class="col-md-12 col-sm-12 col-12 col-lg-4 p-2 membership-text user-titles" style="color: #6371F1;">
				<img src="assets/img/svg/Profile/task-square.svg" class="icon-size">
				<?= $this->lang->line('membership'); ?>
			</div>

			<div class="col-md-6 col-sm-6 col-6 col-lg-4 mt-4" style="padding-left: 15px; padding-right: 15px">
				<p style="font-size: 0.8rem; margin-bottom: 10px"><?= $user_info->full_name ?></p>
				<p style="font-size: 0.8rem; margin-bottom: 10px">
					<img src="assets/img/svg/Profile/wallet-2.svg" class="width: 18px">
					156 <?= $this->lang->line('days_left'); ?>
				</p>
				<div style="width: 100%; height: 2px; border-radius: 5px; background: #fff">
					<div id="progress-bar-pink"></div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-6 col-lg-4 mt-4 text-center" style="padding-left: 15px; padding-right: 15px;">
				<p class="pink-color" style="font-size: 0.8rem; margin-bottom: 0">
					€ 10 <?= $this->lang->line('per_month'); ?>
				</p>
				<p class="pink-color" style="font-size: 0.8rem; margin-bottom: 10px">
					<?= $this->lang->line('quarterly_payment'); ?>
				</p>

				<div style="text-align: center; font-size: 12px; margin-top: 10px;">
					<a class="btn-pink" style="width: 100px; position: relative; text-decoration: none; padding-top: 5px; height: 30px; display: inline-block;">
						<?= $this->lang->line('top_up'); ?> <img src="assets/img/svg/Profile/import.svg" style="width: 14px; position: absolute; right: 5px; top: 7px">
					</a>
				</div>
			</div>
		</div>

	</div>
	<div class="col-md-12 col-lg-10 offset-md-1 mt-3 pb-3" style="background: #FBFBFB;box-shadow: 0px 4px 13px rgba(0, 0, 0, 0.05);border-radius: 20px;">
		<div class="col-md-12 p-3 gray-color user-titles">
			<img src="assets/img/svg/Profile/user-square.svg" class="icon-size">
			<?= $this->lang->line('personal_info'); ?>
		</div>

		<form action="user/profile/insert" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-12 text-center">
					<img id="image-profile" src="assets/img/user/<?= $user_data->image ?>" style="width: 100px; height: 100px; border-radius: 50px">
					<br>
					<label for="image-input" class="form-label" style="color: #0d6efd; cursor: pointer;"><?= $this->lang->line('change_profile_photo'); ?></label>
					<input type="file" name="image_input" class="form-control" onchange="read_url(this);" id="image-input" style="opacity: 0">
				</div>
				<div class="col-md-6 col-sm-12 col-12 form-profile">
					<div class="col-12 col-sm-12 col-md-8 offset-md-3">
						<div class="mb-3">
							<label for="full_name" class="form-label gray-color font-13"><?= $this->lang->line('full_name'); ?></label>
							<input type="text" name="full_name" value="<?= $user_data->full_name ?>" id="full_name" class="form-control border-gray input-height">
						</div>
						<div class="mb-3">
							<label for="" class="form-label gray-color font-13"><?= $this->lang->line('gender'); ?></label>
							<select class="form-select input-height" name="gender" aria-label="Default select example">
								<option value="0"> --- <?= $this->lang->line('gender'); ?> --- </option>
								<option value="female" <?= ($user_data->gender == 'female') ? 'selected' : '' ?>> <?= $this->lang->line('female'); ?> </option>
								<option value="male" <?= ($user_data->gender == 'male') ? 'selected' : '' ?>><?= $this->lang->line('male'); ?></option>
							</select>
						</div>
						<div class="mb-3">
							<label for="phone" class="form-label gray-color font-13"><?= $this->lang->line('phone'); ?></label>
							<input type="text" name="phone" value="<?= $user_data->phone ?>" class="form-control border-gray input-height" id="phone">
						</div>
						<div class="mb-3">
							<label for="" class="form-label gray-color font-13"><?= $this->lang->line('site_language'); ?></label>
							<select class="form-select input-height" name="user_language" aria-label="Default select example">
								<?php foreach ($languages->result_array() as $lang) : ?>
									<option value="<?= $lang['id'] ?>"><?= $lang['language_name'] ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-12 form-profile" style="padding: 0 15px">
					<div class="col-12 col-sm-12 col-md-8 offset-md-1">
						<div class="mb-3">
							<label for="date_of_birth" class="form-label gray-color font-13"><?= $this->lang->line('date_of_birth'); ?></label>
							<?php $birth_date_timestamp = strtotime($user_data->birth_date); ?>
							<input type="date" name="birth_date" value="<?= date('Y-m-d', $birth_date_timestamp) ?>" class="form-control border-gray input-height" id="date_of_birth">
						</div>
						<div class="mb-3">
							<label for="email" class="form-label gray-color font-13"><?= $this->lang->line('email'); ?></label>
							<input type="email" name="email" value="<?= $user_data->email ?>" class="form-control border-gray input-height" id="email">
						</div>
						<div class="mb-3">
							<label for="address" class="form-label gray-color font-13"><?= $this->lang->line('address'); ?></label>
							<input type="text" name="address" value="<?= $user_data->address ?>" class="form-control border-gray input-height" id="address">
						</div>

					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-12 text-center">
					<button style="padding: 10px 50px; text-decoration: none; margin-top: 20px; display: inline-block;" class="btn-pink"><?= $this->lang->line('save'); ?></button>
				</div>
			</div>

		</form>

		<div class="col-12">
			<?php if ($this->session->flashdata('error_profile')) : ?>
				<div class="alert alert-danger">
					<?= $this->session->flashdata('update_profile'); ?>
				</div>
			<?php endif; ?>
			<?php if ($this->session->flashdata('update_profile_successfully')) : ?>
				<div class="alert alert-success">
					<?= $this->session->flashdata('update_profile_successfully'); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>



<script>
	$(document).ready(function() {})

	function read_url(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('#image-profile').attr('src', e.target.result);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}
</script>