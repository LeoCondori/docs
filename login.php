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
                    <h1>Welcome Back</h1>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- From -->

<section class="card-section">
    <div class="container">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="card text-center">

                <header class="text-center">
                    <h2 class="section-title">SignIn Now</h2>
                    <div class="section-subtitle">Join Our wonderful community and let others help you without a single penny</div>
                </header>
                <div class="icon">
                <img src="assets/images/icon/icon-login.png" alt=""/>
                </div>

                <form>
                    <div class="row">
                        <div id="resetPassInfo"></div>
                        <div id="emailInput" class="col-md-6">   <input type="text" id="email" class="search-field" placeholder="Email Address"/></div>
                        <div class="col-md-6">   <input type="text" id="password" class="search-field" placeholder="Password"/></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="button" id="login-btn" class="btn btn-default" value="Ingresar">
                            <p class="forget-pass" id="recoveryUser">¿Has olvidado tu nombre de usuario o contraseña?</p>
                            <hr>
                            <div id="section-social-login">
                                <button id="fbLogin" type="button" class="btn btn-primary btn-lg btn-block">Facebook <i class="fa fa-facebook-official" aria-hidden="true"></i></button>
                                <button id="googleLogin" type="button" class="btn btn-danger btn-lg btn-block">Gmail <i class="fa fa-google" aria-hidden="true"></i></button>
                                <button id="githubLogin" type="button" class="btn btn-default btn-lg btn-block" style="background:#000000; color:#FFFFFF">Github <i class="fa fa-github" aria-hidden="true"></i></button>
                                <button id="twitterLogin" type="button" class="btn btn-default btn-lg btn-block" style="background:#00ACED; color:#FFFFFF">Twitter <i class="fa fa-twitter" aria-hidden="true"></i></button>
                            </div>
                        </div>

<div id="pushDataInsert">ALTA</div>
<button onClick="()">BAJA</button>
<button onClick="()">MODIFICACION</button>
<button onClick="()">GET ALL</button>

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