<link rel="icon" type="image/jpg" href="<?php echo base_url('assets/img/softex.jpg') ?>"/>
<header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light" style="background-color:#228B22">
                <div class="navbar-header" style="background: transparent;" role="navigation">
                    <!--Logo Indosat-->
					<a class="" href="#" style="padding-top:2%">
                            <img width="30%" style="margin-top: -5%;background-color: transparent;" src="<?php echo base_url('assets/img/softex.jpg') ?>" alt="">
                     </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- Navbar Slide -->
                      <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                      <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url('assets/images/users.png') ?>" alt="user" class="profile-pic" /> <?php echo @$_SESSION['name'] ?></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li><a href="<?php echo base_url('LoginController/logout') ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
