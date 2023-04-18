<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-12 bg-grey mt-5 px-4 py-5" style="min-height: 50vh; border-radius: 20px">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <h3 style="font-weight: bolder;">User message</h3>
                        </div>
                    </div>

                </div>
                <div class="col-12 mt-1">
                    <div class="col-8 offset-2 bg-white" style=" border-top-left-radius: 20px;border-top-right-radius: 20px;">
                        <div class="col-md-12 p-5" id="message-box" style="height: 65vh; overflow-y: scroll;">
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
                    </div>

                    <div class="col-8 offset-2">
                        <div class="col-12" style="border-top: 1px solid #aaa;">
                            <form method="POST">
                                <div class="input-group mb-3">
                                    <input type="hidden" name="user_id" value="<?= $user_id ?>">
                                    <input type="text" required name="text_message" class="form-control input-height" style="border: 0;">
                                    <button class="btn btn-outline-secondary" style="border: 0" type="submit" id="button-addon2">Send</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-12">
                            <form action="admin/messages/close" method="POST">
                                <input type="hidden" name="user_id" value="<?= $user_id ?>">
                                <button class="btn btn-primary" type="submit">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        <?php if ($this->session->flashdata('message_sesion')) : ?>
            var msg = '<?= $this->session->flashdata('message_sesion'); ?>'
            alert(msg);
        <?php endif; ?>
    })
</script>