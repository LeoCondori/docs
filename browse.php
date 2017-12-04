<?php 
//Incluyo la librería para las configuración incial.
include('assets/module/library/config_inc.php');

if(isset($_SESSION["UserSession"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('assets/module/head.php');?>
</head>

<body class="template-genre">

<!-- Header -->

<header id="header" class="hero">

    <?php include('assets/module/menu.php');?>
    
    <div class="masthead">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1>Hi, how can we help you?</h1>
                    <form>
                        <input type="text" class="search-field" placeholder="Search Something ... "/>
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <a href="#" class="btn btn-hero"><span class="icon-git"></span> Github Project<span class="icon-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Genre -->

<section id="genre" class="genre">
    <div class="container ">
        <div class="row">
            <header class="text-center">
                <h2 class="section-title">Browse Help Topics</h2>
                <div class="section-subtitle">When you are stuck in something don’t waste your time
                    just let us know we are here to help you</div>
            </header>
            <div class="row pt-70">
                <div class="text-center col-lg-4">
                    <div class="media-body">
                        <span class="icon"><img src="assets/images/icon/icon1.png" alt=""></span>
                        <h3>Help & Documentation</h3>
                        <p class="text-muted">Unlike other Frameworks which try to cover everything, It has been built specifically for wordpress</p>
                    </div>
                </div>
                <div class="text-center col-lg-4">
                    <div class="media-body">
                        <span class="icon"><img src="assets/images/icon/icon2.png" alt=""></span>
                        <h3>Developer Resources</h3>
                        <p class="text-muted">An incredibly codex has been created for you to use as reference when developing extensions</p>
                    </div>
                </div>
                <div class="text-center col-lg-4">
                    <div class="media-body">
                        <span class="icon"><img src="assets/images/icon/icon3.png" alt=""></span>
                        <h3>Community Support</h3>
                        <p>The source code is available on GitHub, you can grab it and twist it to your heart’s content</p>
                    </div>
                </div>
            </div>
            <div class="row pt-70">
                <div class="text-center col-lg-4 col-lg-offset-2">
                    <div class="media-body">
                        <span class="icon"><img src="assets/images/icon/icon-files.png" alt=""></span>
                        <h3>Developer Resources</h3>
                        <p class="text-muted">An incredibly codex has been created for you to use as reference when developing extensions</p>
                    </div>
                </div>
                <div class="text-center col-lg-4">
                    <div class="media-body">
                        <span class="icon"><img src="assets/images/icon/icon-rocket.png" alt=""></span>
                        <h3>Community Support</h3>
                        <p>The source code is available on GitHub, you can grab it and twist it to your heart’s content</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Support Section -->

<section id="support" class="support-section bgc-primary text-white section">
    <div class="container">
        <div class="row">
            <div class="divider"><i class="fa fa-support"></i></div>
            <header class="text-center">
                <h2 class="section-title">Get Support From Real People</h2>
                <p class="section-subtitle">When you are stuck in something don’t waste your time just let us know we are here to help you</p>
            </header>
                <ul class="members">
                    <li><img src="assets/images/u1.png" alt=""></li>
                    <li><img src="assets/images/u2.png" alt=""></li>
                    <li><img src="assets/images/u3.png" alt=""></li>
                    <li><img src="assets/images/u4.png" alt=""></li>
                    <li><img src="assets/images/u5.png" alt=""></li>
                </ul>
        </div>
    </div>
</section>


<!-- Call To Action -->

<section class="section">
    <div class="container">
        <div class="row call-to-action">

                <div class="col-lg-1">
                     <span class="icon icon-envelope"></span>
                </div>
                <div class="col-lg-9">
                <h3>Contact Us</h3>
                <p>If you have question which is beyond this knowledgebase Kindly contact us</p>
                </div>
            <div class="col-lg-2">
                <a href="#" class="btn btn-success btn-action">Write to Us Now</a>
                </div>

        </div>
    </div>
</section>

    <?php include('assets/module/footer.php');?>

    <?php include('assets/module/footer-script.php');?>
    
</body>
</html>
<?php

}else{
  echo '<script>window.location.replace("login.php?estatus=login")</script>';
}
?>