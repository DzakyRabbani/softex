        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-info animated fadeInDown">
                    <div class="card-header bg-warning mb-3">
                        <h4 class="m-b-0 text-white"><?php echo $title ?> </h4>
                    </div>
                    <div class="card-body">
                        <?php if (@$edit == false) { ?>
                            <form id="sticker_form" action="<?php echo base_url('versi/insert') ?>" method="post" enctype="multipart/form-data">
                            <?php } else { ?>
                                <form id="sticker_update" action="<?php echo base_url('versi/update/') . @$data['id_versi'] ?>" method="post" enctype="multipart/form-data">
                                <?php } ?>
                                <div class="form-body">
                                    <h3 class="card-title"><?php echo $pagetitle ?></h3>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Nama Show</label>
                                                <input type="text" name="nama_versi" id="nama_versi" class="form-control" value="<?php echo @$data['nama_versi'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->
                                    <div class="form-actions">
                                        <?php if ($edit == false) : ?>
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Simpan</button>
                                        <?php else : ?>
                                            <button type="submit" id="btna" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
                                        <?php endif ?>

                                        <a href="<?php echo base_url('versi') ?>" class="btn btn-inverse">Cancel</a>


                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->


        <script>
            $(document).ready(function() {

                $('#versi').addClass('active');

                $('#sticker_form').submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: "<?php echo base_url('versi/insert') ?>",
                        type: "post",
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: "JSON",
                        async: false,
                        success: function(data) {
                            if (data.stat == true) {
                                swal({
                                    type: 'success',
                                    title: 'Berhasil Menyimpan',
                                    text: 'Success'
                                }).then(function() {

                                    document.location.href = "<?php echo base_url('versi') ?>";
                                })
                            } else {
                                swal({
                                    type: 'error',
                                    title: 'Gagal Menyimpan',
                                    text: 'Ada Kesalahan (' + data.error + ')'
                                }).then(function() {

                                    document.location.href = "<?php echo base_url('versi/create') ?>";
                                })
                            }
                        }
                    });
                });

                $('#sticker_update').submit(function(e) {
                    e.preventDefault();

                    swal({
                        title: 'Ingin Mengupdate??',
                        text: "Data Akan Terubah!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, update it!'
                    }).then((result) => {
                        if (result.value) {

                            $.ajax({
                                url: "<?php echo base_url('versi/update/') . @$data['id_versi'] ?>",
                                type: "post",
                                data: new FormData(this),
                                processData: false,
                                contentType: false,
                                cache: false,
                                dataType: "JSON",
                                async: false,
                                success: function(data) {
                                    if (data.stat == true) {
                                        swal({
                                            type: 'success',
                                            title: 'Berhasil Mengupdate',
                                            text: 'Success'
                                        }).then(function() {

                                            document.location.href = "<?php echo base_url("versi") ?>";
                                        })
                                    } else {
                                        swal({
                                            type: 'error',
                                            title: 'Gagal Mengupdate',
                                            text: 'Ada Kesalahan (' + data + ')'
                                        }).then(function() {

                                            document.location.href = "<?php echo base_url("versi/view/" . @$data['id_versi']) ?>";
                                        })
                                    }
                                }
                            });

                        }
                    })


                });

            })
        </script>