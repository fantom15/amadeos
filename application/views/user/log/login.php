<div class="container pt-5 pb-5">
	<div class="col-8 col-sm-8 offset-2 col-md-2 offset-sm-5">
		<img src="assets/img/svg/Profile-1/Group.svg" style="width: 100%">
	</div>
	<div class="col-12 col-sm-12 col-md-6 offset-md-3 gray-box gray-color p-2" style=" font-size: 1rem; font-weight: 700">
		<img src="assets/img/svg/Profile-1/user-square.svg" style="width: 18px">
		Login

		<div class="col-10 offset-1" style="margin-top: 50px">
			<form method="POST">
				<div class="mb-3">
					<label for="email" class="form-label gray-color font-13">Email</label>
					<input type="email" name="email" class="form-control border-gary" id="email">
				</div>
				<div class="mb-3">
					<label for="password" class="form-label gray-color font-13">Password</label>
					<input type="password" name="password" class="form-control border-gary" id="password">
				</div>
				<div class="mb-3">
					<a href="#" style="font-size: 13px; color: #1C202A; text-decoration: none">Forget Password?</a>
				</div>

				<div class="mb-3 text-center">
					<button type="submit" class="btn-pink-2" style=" position: relative;">Login
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
				<a href="user/sign_up" class="pink-color" style="font-size: 13px; font-weight: 600;">Create Account</a>
			</div>

		</div>
	</div>

</div>