<?php date_default_timezone_set('Asia/Jakarta'); ?>

<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->

        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <li class="white-text alert text-center" style="background-color:	#228B22;">
                    <h4 style="color: Black"><?php echo date("M, d Y | D"); ?></h4>
                </li>
                <li style="background: 	#228B22"><a href="<?php echo base_url('dashboard') ?>"><span class=""></span> Dashboard </a></li>
                <li style="background: 	#228B22"><a href="<?php echo base_url('result') ?>"><span class=""></span> Hasil </a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <!-- <div class="sidebar-footer">
                <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <a href="<?php echo base_url('LoginController/logout') ?>" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div> -->
    <!-- End Bottom points-->
</aside>