<div class="row">
    <div class="col-lg-12 col-md-5">
        <div class="card animated fadeInDown">
            <div class="card-body">
                <div class="row ">
                    <div class="col-lg-2 offset-lg-10">
                        <a href="<?php echo base_url('versi/create') ?>" class="btn btn-block text-white" style="background-color: #f1c40f">Add <i class="fa fa-plus"></i></a>
                    </div>
                    <div class="col-lg-12">
                        <table class="table table-striped table-hover text-center" id="tableversi">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th width="7%">Nama versi</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function del(id) {
        swal({
            title: 'Ingin Menghapus??',
            text: "Data Akan Terhapus Permanent!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "<?php echo base_url('delete-versi/') ?>" + id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data) {
                        if (data.stat == true) {
                            swal({
                                type: 'success',
                                title: 'Success',
                                text: 'Data Successfully Deleted !!'
                            }).then(function() {
                                document.location.href = "<?php echo base_url('versi') ?>";
                            })
                        } else {
                            swal({
                                type: 'error',
                                title: 'Oops...',
                                text: 'Kesalahan Saat Menghapus Data!'
                            }).then(function() {
                                document.location.href = "<?php echo base_url('versi') ?>";
                            })
                        }
                    }
                })
            }
        })
    }
</script>