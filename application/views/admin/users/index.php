<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-12 bg-grey mt-5 px-4 py-5" style="min-height: 50vh; border-radius: 20px">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <h3 style="font-weight: bolder;">Users</h3>
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
                                <th>Gender</th>
                                <th>Birth Date</th>
                                <th>Address</th>
                                <th>Messages</th>
                            </tr>
                            <?php foreach ($users->result_array() as $user) : ?>
                                <tr class="tr-body">
                                    <td style="border-right: 1px solid #E5E4E9; text-align: center">
                                        <img src="<?= 'assets/img/user/' . $user['image'] ?>" style="width: 50px; border-radius: 50%;">
                                    </td>
                                    <td class="pt-3"><?= $user['full_name'] ?></td>
                                    <td class="pt-3"><?= $user['phone'] ?></td>
                                    <td class="pt-3"><?= $user['email'] ?></td>
                                    <td class="pt-3"><?= $user['gender'] ?></td>
                                    <td class="pt-3"><?= $user['birth_date'] ?></td>
                                    <td class="pt-3"><?= $user['address'] ?></td>
                                    <td class="pt-3"><a href="admin/messages/user/<?= $user['id'] ?>" class="btn btn-primary"><img src="assets/img/svg/sms.svg" style="width: 18px"></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                        <p><?= $links; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>