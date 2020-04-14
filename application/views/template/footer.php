<?php  ?>

<div class="right-sidebar">
    <div class="slimscrollright">
        <div class="rpanel-title"> Service <span><i class="ti-close right-side-toggle"></i></span> </div>
        <div class="r-panel-body">

            <ul class="m-t-20 chatonline">
                <li><b>Member</b></li>
                <li>
                    <a href="javascript:void(0)"><img src="<?php echo base_url('assets/images/user.png') ?>" alt="user-img" class="img-circle"> <span> <?php echo $_SESSION['name'] ?><small class="text-success">online</small></span></a>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer">
    <!-- © <?php echo date('Y') ?> WIR GROUP --> AR&CO </footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->


<!-- <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js') ?>"></script> -->
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url('assets/plugins/popper/popper.min.js') ?>."></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url('assets/js/jquery.slimscroll.js') ?>"></script>
<!--Wave Effects -->
<script src="<?php echo base_url('assets/js/waves.js') ?>"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url('assets/js/sidebarmenu.js') ?>"></script>
<!--stickey kit -->
<script src="<?php echo base_url('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/sparkline/jquery.sparkline.min.js') ?>"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url('assets/js/custom.min.js') ?>"></script>

<!-- <script type="text/javascript" src="<?php echo base_url('assets/datatables/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/datatables/datatables.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/datatables/lib/js/dataTables.bootstrap.min.js') ?>"></script> -->

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<!-- DataTables Button Report -->
<!--  <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script> -->
<script type="text/javascript" src="<?php echo base_url('assets/js/custom.js') ?>"></script>
<script>
    $(document).on('show.bs.modal', '.modal', function() {
        $(this).appendTo('body');
    });

    $(document).ready(function() {
        
        $('#form_edition1').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?php echo base_url('') . "/insert" ?>',
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    alert('berhasil')
                }
            });

        });
        $('#example2').DataTable({
            "scrollX": true,
            "ordering": false
        });
        $('#example').DataTable({
            "scrollX": true,
            "ordering": false
        });

    });
</script>
<script>
        $(document).ready( function () {
          $('#softex').DataTable();
      } );
      </script>

</body>

</html>