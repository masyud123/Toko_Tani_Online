<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('welcome') ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-store-alt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">TOKO TANI</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
 
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('welcome') ?>">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                KATEGORI
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/pupuk') ?>">
                   <i class="fas fa-gift"></i>
                    <span>Pupuk Tanaman</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/obat_hama') ?>">
                    <i class="fas fa-gift"></i>
                    <span>Obat Hama</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/obat_gulma') ?>">
                    <i class="fas fa-gift"></i>
                    <span>Obat Gulma</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/alat_pertanian') ?>">
                    <i class="fas fa-tools"></i>
                    <span>Alat Pertanian</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Heading -->
            <div class="sidebar-heading">
                LANJUTAN
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('lanjutan/bayar') ?>">
                    <i class="fas fa-money-bill-wave"></i>
                    <span>Bukti Pembayaran</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('lanjutan/riwayat_belanja') ?>">
                    <i class="fas fa-history"></i>
                    <span>Riwayat Belanja</span></a>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        action="<?php echo base_url('dashboard/search') ?>" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-3 small" placeholder="Cari..."
                                aria-label="Search" aria-describedby="basic-addon2" name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" name="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        

                        <div class="navbar"> 

                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <?php 
                                    $pesan = '<i class="fas fa-envelope"></i> '.' Pesan' 
                                    ?>

                                    <?php echo anchor('dashboard/chating', $pesan)  ?>
                                </li>
                            </ul>

                            <ul class="nav navbar-nav navbar-right ml-3">
                                <li>
                                    <?php 
                                    $keranjang = '<i class="fas fa-shopping-cart"></i> '.$this->cart->total_items().' Items' 
                                    ?>

                                    <?php echo anchor('dashboard/detail_keranjang', $keranjang)  ?>
                                </li>
                            </ul>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <ul class="na navbar-nav navbar-right">
                                <?php if($this->session->userdata('username')) { ?>
                                    <div class="row">
                                        <span class="ml-2"><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div></span>
                                        <span class="ml-3"><?php echo anchor('auth/logout','<i class="fas fa-sign-out-alt"></i>') ?></span>
                                    </div>
                                <?php } else { ?>
                                    <li><?php echo anchor('auth/login','Login'); ?></li>

                                <?php } ?>

                            </ul>
                        </div>    

                    </ul>
                </nav> 
            
    