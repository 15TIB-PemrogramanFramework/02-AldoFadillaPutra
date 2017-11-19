<!DOCTYPE html>
<html lang="en">
<head>
<title>Tunggal: Toko Online Komputer | w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="<?php echo base_url() ?>/assets/user/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url() ?>/assets/user/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url() ?>/assets/user/css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url() ?>/assets/user/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="<?php echo base_url() ?>/assets/user/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="<?php echo base_url() ?>/assets/user/js/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/user/css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- //end-smooth-scrolling --> 
</head> 
<body>
    <!-- for bootstrap working -->
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/user/js/bootstrap-3.1.1.min.js"></script>
    <!-- //for bootstrap working -->
    <!-- header modal -->
    
    <!-- header modal -->
    <!-- header -->
    <div class="header" id="home1">
        <div class="container">
            <div class="w3l_logo">
                <h1><a href="<?php echo site_url('Home/user')?>">Electronic Store<span>Your stores. Your place.</span></a></h1>
            </div>
            <div class="search">
                <input class="search_box" type="checkbox" id="search_box">
                <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
                <div class="search_form">
                    <form action="<?php echo site_url('Kategori/search')?>" method="POST">
                        <input type="text" name="keyword" placeholder="Search...">
                        <input type="submit" value="Send">
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    <!-- //header -->
    <!-- navigation -->
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> <center>
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo site_url('Home/user')?>" class="act">Home</a></li>  
                        <!-- Mega Menu -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produk <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <ul class="multi-column-dropdown">
                                            <h6><a href="<?php echo site_url('Kategori/vga')?>">VGA</a></h6>
                                            <h6><a href="<?php echo site_url('Kategori/mobo')?>">Mother Board</a></h6>
                                            <h6><a href="<?php echo site_url('Kategori/ram')?>">RAM</a></h6>
                                            <h6><a href="<?php echo site_url('Kategori/ssd')?>">SSD</a></h6>
                                            <h6><a href="<?php echo site_url('Kategori/monitor')?>">Monitor</a></h6>
                                        </ul>
                                    </div>                                    
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                        </li>
                        
                        <li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Akun <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('Pesan/daftar_pesan')?>">Lihat Status Pesanan</a></li>  <li><a href="<?php echo site_url('Member/ubah_datadiri')?>">Ubah Data Diri</a></li>
                                <li><a href="<?php echo site_url('Member/ubah_password')?>">Ubah Password</a></li>   
                                <li><a href="<?php echo site_url('Login/logout')?>">Keluar</a></li>  
                            </ul>
                        </li>                        
                    </ul>
                </div></center>
            </nav>
        </div>
    </div>
    <!-- //navigation -->