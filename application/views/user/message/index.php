<div class="container">
	<div class="col-12 col-sm-12 bg-grey border-radius-20 message-box col-md-10 offset-md-1" style="height: 85vh; box-shadow: 0px 4px 13px rgba(0, 0, 0, 0.05);">
		<div class="col-md-12 p-3 gray-color user-titles">
			<img src="assets/img/svg/direct-inbox.svg" class="icon-size">
			<?= $this->lang->line('inbox'); ?>
		</div>
		<div class="message-mobile">
			<div class="row" style="padding: 15px; height: 500px; overflow-y: scroll;">
				<?php if (!empty($messages)) : ?>
					<?php foreach ($messages->result_array() as $user_message) : ?>

						<?php if (empty($user_message['admin_id'])) : ?>
							<div class="col-3 mb-2"></div>
							<div class="col-9 mb-2 pt-2" style="background: #E5E4E9;border-radius: 18px 18px 0px 18px;font-size: 14px">
								<p><?= $user_message['text_message'] ?></p>
							</div>
						<?php endif; ?>

						<?php if (!empty($user_message['admin_id'])) : ?>
							<div class="col-9 mb-2 pt-2" style="background: rgba(91, 190, 183, 0.3); font-size: 14px; border-radius: 18px 18px 18px 0px;">
								<p><?= $user_message['text_message'] ?></p>
							</div>
							<div class="col-3 mb-2"></div>
						<?php endif; ?>

						<div class="py-2"></div>

					<?php endforeach; ?>
				<?php endif; ?>
			</div>
			<div class="col-md-11 pt-3" style="position: fixed; width: 94%; bottom: 5vh; border-top: 1px solid #aaa; padding-left: 5%">
				<form action="user/message/insert" method="POST">
					<div class="input-group mb-3">
						<input type="text" required name="text_message" class="form-control" style="border: 0;">
						<button class="btn btn-outline-secondary" style="border: 0" type="submit" id="button-addon2">Send</button>
					</div>
				</form>
				<div class="col-12">
					<?php if ($this->session->flashdata('error_session')) : ?>
						<div class="alert alert-danger">
							<?= $this->session->flashdata('message_sesion'); ?>
						</div>
					<?php endif; ?>
					<?php if ($this->session->flashdata('send_message')) : ?>
						<div class="alert alert-success">
							<?= $this->session->flashdata('message_sesion'); ?>
						</div>
					<?php endif; ?>

				</div>
			</div>
		</div>
		<div class="col-8 offset-2 message-desktop bg-white border-radius-20" style=" border: 1px solid #666;">
			<div class="col-md-12 p-5" style="height: 65vh; overflow-y: scroll;">
				<div class="row">
					<?php if (!empty($messages)) : ?>
						<?php foreach ($messages->result_array() as $user_message) : ?>

							<?php if (empty($user_message['admin_id'])) : ?>
								<div class="col-3 mb-2"></div>
								<div class="col-9 mb-2 pt-2" style="background: #E5E4E9;border-radius: 18px 18px 0px 18px;font-size: 14px">
									<p><?= $user_message['text_message'] ?></p>
								</div>
							<?php endif; ?>

							<?php if (!empty($user_message['admin_id'])) : ?>
								<div class="col-9 mb-2 pt-2" style="background: rgba(91, 190, 183, 0.3); font-size: 14px; border-radius: 18px 18px 18px 0px;">
									<p><?= $user_message['text_message'] ?></p>
								</div>
								<div class="col-3 mb-2"></div>
							<?php endif; ?>

							<div class="py-2"></div>

						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>

			<div class="col-md-12">
				<div class="col-10 offset-1" style="border-top: 1px solid #aaa;">
					<form action="user/message/insert" method="POST">
						<div class="input-group mb-3">
							<input type="text" required name="text_message" class="form-control input-height" style="border: 0;">
							<button class="btn btn-outline-secondary" style="border: 0" type="submit" id="button-addon2"><?= $this->lang->line('send'); ?></button>
						</div>
					</form>
					<div class="col-12">
						<?php if ($this->session->flashdata('error_session')) : ?>
							<div class="alert alert-danger">
								<?= $this->session->flashdata('message_sesion'); ?>
							</div>
						<?php endif; ?>
						<?php if ($this->session->flashdata('send_message')) : ?>
							<div class="alert alert-success">
								<?= $this->session->flashdata('message_sesion'); ?>
							</div>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>