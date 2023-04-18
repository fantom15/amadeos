<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-12 bg-grey mt-5 px-4 py-5" style="min-height: 50vh; border-radius: 20px">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <h3 style="font-weight: bolder;">Admins</h3>
                        </div>
                        <div class="col-6" style="text-align: right;">
                            <a href="admin/admin_users/insert" class="border-radius-50 btn-pink" style="padding: 5px 20px; display: inline-block; text-align: center; text-decoration: none;">+ Add new user</a>
                        </div>
                    </div>

                </div>
                <div class="col-12 mt-4">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Access</th>
                                <th>Status</th>
                                <th>Edit</th>
                            </tr>
                            <?php foreach ($admins->result_array() as $admin) : ?>
                                <tr class="tr-body">
                                    <td style="border-right: 1px solid #E5E4E9; text-align: center">
                                        <img src="<?= 'assets/img/admin_img/' . $admin['image'] ?>" style="width: 50px;">
                                    </td>
                                    <td class="pt-3"><?= $admin['full_name'] ?></td>
                                    <td class="pt-3"><?= $admin['phone'] ?></td>
                                    <td class="pt-3"><?= $admin['email'] ?></td>
                                    <td class="pt-3">
                                        <?php $menus = $this->Permission_model->menu_access($admin['id']); ?>
                                        <?php if ($menus) : ?>
                                            <?php foreach ($menus as $menu) : ?>
                                                <span class="label-span access-span"><?= $menu['title'] ?></span>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if ($admin['status'] == 'active') : ?>
                                            <span class="label-span active-span mt-2">Active</span>
                                        <?php endif; ?>

                                        <?php if ($admin['status'] == 'inactive') : ?>
                                            <span class="label-span inactive-span">Inactive</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="pt-3 text-center">
                                        <a href="admin/admin_users/update/<?= $admin['id'] ?>" class="border-radius-50 btn-pink label-span" style="display: inline-block; padding: 5px 20px">Edit</a>
                                        <a href="admin/admin_users/delete/<?= $admin['id'] ?>" class="border-radius-50 btn-danger label-span" style="display: inline-block; padding: 5px 20px; background: #f00;">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>