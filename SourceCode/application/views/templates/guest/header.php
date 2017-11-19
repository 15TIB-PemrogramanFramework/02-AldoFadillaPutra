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
   <div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;</button>
                    

                </div>
                <div class="modal-body modal-body-sub">
                    <div class="row">
                        <div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
                            <div class="sap_tabs">
                                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                    <?=$this->session->flashdata('daftar')?>
                                    <?=$this->session->flashdata('gagal')?>
                                    <ul>
                                        <li class="resp-tab-item" aria-controls="tab_item-0"><span>Masuk</span></li>
                                        <li class="resp-tab-item" aria-controls="tab_item-1"><span>Daftar</span></li>
                                    </ul>       
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                        <div class="facts">
                                            <div class="register">
                                                <form class="form" method="post" action="<?php echo site_url('Login')?>">         
                                                    <input name="username" placeholder="Email Address" type="text">                        
                                                    <input name="password" placeholder="Password" type="password">                                      
                                                    <div class="sign-up">
                                                        <input type="submit" value="Masuk"/>
                                                    </div>
                                                </form>
                                            </div>
                                        </div> 
                                    </div>   
                                    <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
                                        <div class="facts">
                                            <div class="register">
                                                <form action="<?php echo site_url('Member/daftar_aksi')?>" method="POST" enctype="multipart/form-data">         
                                                    <input placeholder="Nama" name="nama" type="text" required="">
                                                    <input placeholder="Alamat" name="alamat" type="text" required="">
                                                    <input placeholder="Email" name="email" type="email" required="">   
                                                    <input placeholder="Password" name="password" type="password" required="">
                                                    <input placeholder="Ulangi Password" name="cpassword" type="password" required="">  
                                                    
                                                    <div class="sign-up">
                                                        <input type="submit" value="Buat Akun"/>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>                                                            
                                </div>  
                            </div>
                            <script src="<?php echo base_url() ?>/assets/user/js/easyResponsiveTabs.js" type="text/javascript"></script>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('#horizontalTab').easyResponsiveTabs({
                                        type: 'default', //Types: default, vertical, accordion           
                                        width: 'auto', //auto or any width like 600px
                                        fit: true   // 100% fit in a container
                                    });
                                });
                            </script>                            
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#myModal88').modal('show');
    </script>   
    <!-- header modal -->
    <!-- header -->
    <div class="header" id="home1">
        <div class="container">
            <div class="w3l_login">
                <a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
            </div>
            <div class="w3l_logo">
                <h1><a href="<?php echo site_url('home')?>">Tunggal<span>Toko Online Komputer</span></a></h1>
            </div>
            <div class="search">
                <input class="search_box" type="checkbox" id="search_box">
                <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
                <div class="search_form">
                    <form action="<?php echo site_url('guest/search')?>" method="POST">
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
                </div> 
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo site_url('home')?>" class="act">Home</a></li>  
                        <!-- Mega Menu -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produk <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <ul class="multi-column-dropdown">
                                            <h6><a href="<?php echo site_url('guest/vga')?>">VGA</a></h6>
                                            <h6><a href="<?php echo site_url('guest/mobo')?>">Mother Board</a></h6>
                                            <h6><a href="<?php echo site_url('guest/ram')?>">RAM</a></h6>
                                            <h6><a href="<?php echo site_url('guest/ssd')?>">SSD</a></h6>
                                            <h6><a href="<?php echo site_url('guest/monitor')?>">Monitor</a></h6>
                                        </ul>
                                    </div>                                    
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                        </li>                   
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- //navigation -->