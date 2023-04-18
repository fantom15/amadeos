<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-2">
            <div class="col-12 bg-grey mt-5 px-4 py-5" style="min-height: 50vh; border-radius: 20px">
                <div class="col-6">
                    <h3 style="font-weight: bolder;">Edit Admin</h1>
                </div>
                <div class="col-6"></div>
                <div class="col-12">
                    <form method="post" action="">

                        <div class="row">
                            <input type="hidden" name="id" value="<?= $admin->row()->id ?>">
                            <div class="col-md-6 col-xxl-4 offset-xxl-2">
                                <div class="col-md-10 offset-md-1">
                                    <div class="mb-3">
                                        <label for="full_name" class="form-label">Full name</label>
                                        <input type="text" name="full_name" class="form-control" value="<?= $admin->row()->full_name ?>" id="full_name">
                                    </div>
                                </div>
                                <div class="col-md-10 offset-md-1">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" name="phone" value="<?= $admin->row()->phone ?>" class="form-control" id="phone">
                                    </div>
                                </div>
                                <div class="col-md-10 offset-md-1">
                                    <div class="mb-3">
                                        <label class="form-label">Access</label>
                                        <br>
                                        <?php foreach ($all_menu as $menu) : ?>
                                            <span class="btn btn-light mt-2">
                                                <?= $menu['title'] ?> <input type="checkbox" name="access[]" <?php if (in_array($menu['id'], $permissions)) echo 'checked' ?> value="<?= $menu['id'] ?>">
                                            </span>
                                        <?php endforeach; ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="col-md-10 offset-md-1">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" name="email" value="<?= $admin->row()->email ?>" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="col-md-10 offset-md-1">
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <br>
                                        <input type="radio" name="status" <?php if ($admin->row()->status == 'active') echo 'checked' ?> value="active"> Active
                                        <input style="margin-left:50px" <?php if ($admin->row()->status == 'inactive') echo 'checked' ?> type="radio" name="status" value="inactive"> Inactive
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4 pt-3" style="border-top: 1px solid #eee;">
                                <div class="col-md-10 offset-md-1">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Change password</label>
                                        <input type="text" name="password" value="" class="form-control" id="password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xxl-12">
                                <div class="col-md-10 offset-md-1 text-center">
                                    <input type="submit" style="width: 196px; height: 45px;" class="btn-pink" value="Save">
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php if (!empty($message)) : ?>
                        <?php if ($error) : ?>
                            <p class="alert alert-danger mt-3"><?= $message ?></p>
                        <?php else : ?>
                            <p class="alert alert-success mt-3"><?= $message ?></p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>