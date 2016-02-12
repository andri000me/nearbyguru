<!DOCTYPE html>
<html>
    <head>
        <link rel='stylesheet' href='<?= $this->config->base_url('/assets/css/style.css') ?>' />
        <link rel="stylesheet" href='<?= $this->config->base_url("assets/css/bootstrap.css") ?>' />
        <link rel="stylesheet" href='<?= $this->config->base_url("assets/css/datepicker.css") ?>' />
        <link rel="stylesheet" type="text/css" href='<?= $this->config->base_url("assets/js/gritter/css/jquery.gritter.css") ?>' />
        <link rel="stylesheet" type="text/css" href='<?= $this->config->base_url("assets/lineicons/style.css") ?>' />
        <link href='<?= $this->config->base_url("assets/css/style-responsive.css") ?>' rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href='<?= $this->config->base_url("assets/font-awesome/css/font-awesome.css") ?>' />
        <link rel="stylesheet" href="<?= $this->config->base_url() ?>/assets/css/jquery-ui.min.css"'/>
        <script src='<?= $this->config->base_url("assets/js/chart-master/Chart.js") ?>'></script>
    </head>
    <body>
        <section id="container" >
            <!-- **********************************************************************************************************************************************************
            TOP BAR CONTENT & NOTIFICATIONS
            *********************************************************************************************************************************************************** -->
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <!--logo start-->
                <a href="<?= $this->config->base_url('/index.php/') ?>" class="logo"><i class="fa fa-graduation-cap"></i> PROJEK NEARBY GURU</a>
                <!--logo end-->
                <div class="nav notify-row" id="top_menu">

                </div>
                <!-- <div class="top-menu">
                     <ul class="nav pull-right top-menu">
                         <li><a class="logout" href="<?= $this->config->base_url('/index.php/login') ?>">Logout</a></li>
                     </ul>
                 </div>-->
            </header>
            <!--header end-->

            <!-- **********************************************************************************************************************************************************
            MAIN SIDEBAR MENU
            *********************************************************************************************************************************************************** -->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">

                        <p class="centered"><a href=""><img src='<?= $this->config->base_url("assets/img/ui-sam.jpg") ?>' class="img-circle" width="60"></a></p>
                        <h5 class="centered">Admin</h5>

                        <li class="mt">
                            <a <?php
                            if (!isset($asal)) {
                                echo "class='active'";
                            }
                            ?> href="<?= $this->config->base_url('/index.php/admin/dashboard') ?>">
                                <i class="fa fa-dashboard"></i>
                                <span>Beranda</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a <?php
                            if (isset($asal) AND $asal == "data") {
                                echo "class='active'";
                            }
                            ?> href="javascript:;" >
                                <i class="fa fa-book"></i>
                                <span>Data Master</span>
                            </a>
                            <ul class="sub">
                                <li><a   href="<?= $this->config->base_url('/index.php/admin/student') ?>">Siswa</a></li>
                                <li><a  href="<?= $this->config->base_url('/index.php/admin/mentor') ?>">Mentor</a></li>
                                <li><a  href="<?= $this->config->base_url('/index.php/admin/mapel') ?>">Mata Pelajaran</a></li>
                            </ul>
                        </li>
                        <!----------------------------------------------------------------------------------------------->
                        <li class="sub-menu">
                            <a <?php
                            if (isset($asal) AND $asal == "kelas") {
                                echo "class='active'";
                            }
                            ?> href="javascript:;" >
                                <i class="fa fa-building-o"></i>
                                <span>Kelas</span>
                            </a>
                            <ul class="sub">  
                                <li><a   href="<?= $this->config->base_url('/index.php/admin/harga') ?>">Harga Kelas</a></li>
                                <li><a   href="<?= $this->config->base_url('/index.php/admin/kelas') ?>">Kelas Aktif</a></li>
                            </ul>
                        </li>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                         <li class="sub-menu">
                            <a <?php
                            if (isset($asal) AND $asal == "coba") {
                                echo "class='active'";
                            }
                            ?> href="javascript:;" >
                                <i class="fa fa-desktop"></i>
                                <span>COBA</span>
                            </a>
                            <ul class="sub">  
                                <li><a   href="<?= $this->config->base_url('/index.php/homementor') ?>">Home Mentor</a></li>
                                <li><a   href="<?= $this->config->base_url('/index.php/homesiswa') ?>">Home Siswa</a></li>
                                <li><a   href="<?= $this->config->base_url('/index.php/enrollkelas') ?>">Tampilan Kelas di User</a></li>
                            </ul>
                        </li>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->
            <section id="main-content">
                <section class="wrapper site-min-height">

