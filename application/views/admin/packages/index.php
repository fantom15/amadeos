<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 20px;
        height: 49px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 18px;
        width: 18px;
        top: 2px;
        left: 1px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #6371F1;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #6371F1;
    }

    input:checked+.slider:before {
        -webkit-transform: translateY(26px);
        -ms-transform: translateY(26px);
        transform: translateY(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

    label {
        font-size: 13px;
    }

    .form-check-input:checked {
        background-color: #6371F1 !important;

    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12 pb-3">
            <div class="row">
                <div class="col-8 mt-5">
                    <div class="col-12 pb-5 pt-3 bg-grey box-gray border-radius-20" style="min-height: 50vh;">
                        <div class="col-10 offset-1">
                            <h3 class="gray-color h3-title">Packages</h3>
                        </div>
                        <form method="POST">
                            <?php foreach ($packages->result_array() as $pack) : ?>
                                <input type="hidden" name="id[]" value="<?= $pack['id'] ?>">
                                <div class="col-10 pt-3 offset-1 border-radius-20 bg-white mt-5" style="border: 1px solid #E5E4E9; height: 100px;">
                                    <div class="row">
                                        <div class="col-2 text-center" style="margin-left: 30px;">
                                            <p class="package-title gray-color">Period / Month</p>
                                            <input type="text" name="period[<?= $pack['id'] ?>]" value="<?= $pack['period'] ?>" class="form-control border-radius-20 p-1 text-center package-value">
                                        </div>
                                        <div class="col-2 text-center">
                                            <p class="package-title gray-color">Price / €</p>
                                            <input type="text" name="price[<?= $pack['id'] ?>]" value="<?= $pack['price'] ?>" class="form-control border-radius-20 p-1 text-center package-value">
                                        </div>
                                        <div class="col-3 text-center">
                                            <p class="package-title gray-color">After discount / €</p>
                                            <input type="text" name="discount[<?= $pack['id'] ?>]" value="<?= $pack['discount'] ?>" class="form-control border-radius-20 p-1 text-center package-value">
                                        </div>
                                        <div class="col-2 text-center">
                                            <p class="package-title gray-color">Days</p>
                                            <input type="text" name="days[<?= $pack['id'] ?>]" value="<?= $pack['days'] ?>" class="form-control border-radius-20 p-1 text-center package-value">
                                        </div>
                                        <div class="col-2 text-center" style="padding-left: 50px">
                                            <p style="margin: 0; font-size: 10px;">Deactive</p>
                                            <label class="switch">
                                                <input type="checkbox" value="active" name="status[<?= $pack['id'] ?>]" <?= ($pack['status'] == 'active') ? 'checked' : '' ?>>
                                                <span class="slider round"></span>
                                            </label>
                                            <p style="margin: 0; font-size: 10px;">Active</p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="col-12 text-center pt-5">
                                <button class="btn-pink px-5 py-2">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-4 mt-5">
                    <div class="col-12 pb-5 pt-3 bg-grey box-gray border-radius-20">
                        <div class="col-10 offset-1">
                            <h3 class="gray-color h3-title">Discount</h3>
                        </div>
                        <div class="col-10 offset-1">
                            <form action="admin/packages/insert_discount_code" method="POST">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="mb-3 position-relative">
                                            <label class="form-label">Code</label>
                                            <input type="text" name="code" id="discount-code" class="form-control border-radius-20" required>
                                            <button id="btn-generator" class="btn btn-group-sm position-absolute btn-secondary border-radius-20" style="font-size: 10px; top: 36px; right: 5px" type="button">Randome</button>
                                        </div>
                                    </div>
                                    <div class="col-3 text-center">
                                        <p style="margin: 0; font-size: 14px;">One time</p>
                                        <label class="switch">
                                            <input type="checkbox" name="one_time" <?= ($pack['status'] == 'active') ? 'checked' : '' ?>>
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3 position-relative">
                                            <label class="form-label">Percentage</label>
                                            <input type="text" name="percentage" class="form-control border-radius-20" required>
                                            <button class="btn position-absolute border-radius-20" style="font-size: 14px; top: 33px; right: 5px" type="button">%</button>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3 position-relative">
                                            <label class="form-label">Expire date</label>
                                            <input type="date" name="expire_date" class="form-control border-radius-20">
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn-pink" style="font-size: 12px; padding: 10px 20px">Generate</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-10 offset-1 mt-5">
                            <h3 class="gray-color h3-title">History</h3>
                        </div>

                        <div class="col-10 offset-1">
                            <div class="table-responsive" style="max-height: 200px; overflow-y: scroll;">
                                <table class="table" style="font-size: 10px">
                                    <tr>
                                        <th>Code</th>
                                        <th>Prcentage</th>
                                        <th>Expire date</th>
                                        <th>Status</th>
                                    </tr>
                                    <?php foreach ($discounts->result_array() as $discount) : ?>
                                        <tr>
                                            <td><?= $discount['code'] ?></td>
                                            <td style="text-align: center;"><?= $discount['percentage'] ?>%</td>
                                            <?php $date =  ($discount['expire_date']) ? explode(' ', $discount['expire_date']) : '-';  ?>
                                            <td class="text-center"><?= (is_array($date)) ? $date[0] : (($discount['private_code']) ? $discount['private_code'] : $date ) ?></td>
                                            <td style="text-align: center;">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" onclick="change_status(<?= $discount['id'] ?>)" type="checkbox" <?= ($discount['status'] == 'active') ? 'checked':'' ?> role="switch" id="code-statsu" >
                                                </div>
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
    </div>
</div>


<script>
    <?php if (!empty($error_message)) : ?>
        alert('<?= $error_message ?>');
    <?php endif ?>

    <?php if ($this->session->flashdata('message_sesion')) : ?>
        alert('<?= $this->session->flashdata('message_sesion'); ?>');
    <?php endif; ?>


    $(document).ready(function() {
        $('#btn-generator').on('click', function() {
            $.post('admin/packages/genereate_discount_code', {
                    'test': 'test'
                },
                function(result) {
                    $('#discount-code').val(result)
                }
            )
        })

        change_status = function (id)
        {
            $.post('admin/packages/change_status', {
                    'id': id
                },
                function(result) {
                    var json = $.parseJSON(result);
                    alert(json.message);
                }
            )
        }

    })
</script>