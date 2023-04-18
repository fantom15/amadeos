<style>
	#sign-in-image {
		width: 100%;
	}

	@media (min-width: 991px) {
		#sign-in-image {
			width: 50%;
		}
	}
</style>
<div class="container pt-5 pb-5">
	<div class="col-4 col-sm-4 offset-4 col-md-2 offset-sm-5 text-center">
		<img id="sign-in-image" src="assets/img/svg/Profile-2/Group.svg">
	</div>
	<div class="col-12 col-sm-12 col-md-6 offset-md-3 gray-box gray-color p-2" style=" font-size: 1rem; font-weight: 700">
		<img src="assets/img/svg/Profile-1/user-square.svg" style="width: 18px">
		Sign up

		<div class="col-10 offset-1" style="margin-top: 30px">
			<form method="POST">
				<div class="mb-3">
					<label for="name" class="gray-color font-13">Full Name</label>
					<input type="text" name="full_name" value="<?= (isset($full_name_session)) ? $full_name_session : '' ?>" class="form-control border-gray" id="name">
				</div>
				<div class="mb-3">
					<label for="email" class="gray-color font-13">Email</label>
					<input type="email" name="email" value="<?= (isset($email_session)) ? $email_session : '' ?>" class="form-control border-gray" id="email">
				</div>
				<div class="mb-3">
					<label for="phone" class="gray-color font-13">Phone</label>
					<input type="text" name="phone" value="<?= (isset($phone_session)) ? $phone_session : '' ?>" class="form-control border-gray" id="phone">
				</div>
				<div class="mb-3">
					<label for="password" class="gray-color font-13">Password</label>
					<input type="password" name="password" class="form-control border-gray" id="password">
				</div>
				<div class="mb-3">
					<label for="confirm-password" class="gray-color font-13">Confirm Password</label>
					<input type="password" name="confirm_password" class="form-control border-gray" id="confirm-password">
				</div>
				<div class="mb-3">
					<label for="user_language" class="gray-color font-13">Site Language</label>
					<?php $languages_list = $this->Language_model->get_language(); ?>

					<select class="form-select input-height" name="user_language" aria-label="Default select example">
						<?php foreach ($languages_list->result_array() as $lang) : ?>
							<option value="<?= $lang['id'] ?>"><?= $lang['language_name'] ?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="mb-3 text-center">
					<button type="submit" class="btn-pink-2" style="position: relative;">Sign up
						<img src="assets/img/svg/Profile-1/save-2.svg" style="width: 15px; position: absolute; right: 15px; top: 15px">
					</button>
				</div>
				<?php if ($error) : ?>
					<div class="mb-3 text-center">
						<div class="alert alert-danger"><?= (!empty($message)) ? $message : ''; ?></div>
					</div>
				<?php endif; ?>
			</form>

			<div class="mb-3 text-center">
				<a href="user/login" class="pink-color font-13" style="font-weight: 600;">I have registered already.</a>
			</div>

		</div>
	</div>

</div>