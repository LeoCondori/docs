<?php 
//Incluyo la librería para las configuración incial.
include('assets/module/library/config_inc.php');

if(!isset($_SESSION["UserSession"])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('assets/module/head.php');?>    
</head>
<body class="template-card">
<!-- Header -->
<header class="hero overlay">
    
    <?php include('assets/module/menu.php');?>
    
    <div class="masthead">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1>Looking for Some help?</h1>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Form -->

<section class="card-section">
    <div class="container">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="card text-center">

                <header class="text-center">
                    <h2 class="section-title">Create New Account</h2>
                    <div class="section-subtitle">Join Our wonderful community and let others help you without a single penny</div>
                </header>

                <form>
                    <div class="row">
                        <div class="col-md-12">  <input id="EmailAddress" type="text" class="search-field" placeholder="Email Address"/></div>
                        <div class="col-md-6">   <input id="Password" type="text" class="search-field" placeholder="Password"/></div>
                        <div class="col-md-6">   <input id="ConfirmPassword" type="text" class="search-field" placeholder="Confirm Password"/></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="button" id="create-users" class="btn btn-success" value="Create Account">
                            <p><span id="validateData" class="label label-warning"></span></p>
                            <p class="forget-pass">A verification email wil be sent to you</p>
                        </div>
                    </div>
                </form>

            </div>

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
  echo '<script>window.location.replace("index.php?estatus=ok")</script>';
}
?>