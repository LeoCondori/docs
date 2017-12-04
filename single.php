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
<body class="single-knowledgebase">
<!-- Header -->
<header class="hero overlay">

<?php include('assets/module/menu.php');?>

    <div class="masthead single-masthead">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <form>
                        <input type="text" class="search-field" placeholder="Search Something ... "/>
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="col-md-4">
                    <a href="#" class="btn btn-hero">
                        <span class="icon-git"></span> Github Project<span class="icon-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="/">Home</a></li>
            <li><a href="archive.html">Knowledge Base</a></li>
            <li class="active">Getting Started With API</li>
        </ol>
    </div>
</div>



<!-- Main Content -->

<main class="content-wrapper">
    <div class="container">
        <div class="col-lg-8">
            <article class="post">
                <h1>Getting Started With API </h1>

                <ul class="meta">
                    <li><span>Created :</span> Feb, 04, 2016</li>
                    <li><span>Last Updated:</span> April, 15, 2016</li>
                </ul>




                <div class="alert alert-info" role="alert">
                    <span class="icon-info"></span>
                    <p>
                        This documentation is always evolving. If you've not been here for a while, perhaps check out
                        the This documentation is always evolving.
                    </p>
                </div>

                <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour, or randomised words which don’t look even slightly
                    believable.
                </p>
                <p>
                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything
                    embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                    repeat predefined chunks as necessary, making this the first true generator on the Internet.
                </p>
                <img class="aligncenter" src="assets/images/connection.png" alt="">

                <h2>Auth Services & Requirments</h2>
                <p>
                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything
                    embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                    repeat predefined chunks as necessary, making this the first true generator on the Internet.
                </p>
                <blockquote>

                    echo "Hello World";
                    echo "\n";

                </blockquote>
                <h2>Final Step</h2>
                <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour, or randomised words which don’t look even slightly
                    believable.
                </p>
            </article>
            <div class="feedback">
                <h3>Was this article helpful to you?</h3>
                <a class="btn btn-default" href="#">Yes</a>
                <a class="btn btn-default" href="#">No</a>
                <form>
                    <input type="text" placeholder="How else could we improve it ?">
                    <input type="submit" class="btn btn-success" value="Submit Feedback">
                </form>

            </div>
        </div>

        <div class="col-lg-4">
            <div class="sidebar">
                <div class="widget widget-support-forum">
                    <span class="icon icon-forum"></span>
                    <h4>Looking for help? Join Community</h4>
                    <p>Couldn’t find what your are looking for ? Why not join out support forums and let us help
                        you.</p>
                    <a href="#" class="btn btn-success">Support Forum</a>
                </div>

                <!--******************************* Lists *******************************-->

                <div class="pt-50">
                    <div class="widget widget_categories">
                        <span class="icon icon-folder"></span>
                        <h4>Knowledgebase Topics Categories</h4>
                        <ul>
                            <li><a href="#"> Introduction </a>
                                <ul>
                                    <li><a href="#"> How to use this documentation? </a></li>
                                    <li><a href="#"> How to find topics? </a></li>
                                    <li><a href="#"> What is included and why? </a></li>
                                    <li><a href="#"> Basic knowledge requirments. </a></li>
                                    <li><a href="#"> Getting Started & What is next. </a></li>
                                </ul>
                            </li>
                            <li><a href="#"> Installation & Activation </a></li>
                            <li><a href="#"> Premium Members Features </a></li>
                            <li><a href="#"> API Usage & Guide lines </a></li>
                            <li><a href="#"> Getting Started & What is next. </a></li>
                            <li><a href="#"> Installation & Activation </a></li>
                            <li><a href="#"> Premium Members Features </a></li>
                            <li><a href="#"> API Usage & Guide lines </a></li>
                            <li><a href="#"> Getting Started & What is next. </a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

    <?php include('assets/module/footer.php');?>

    <?php include('assets/module/footer-script.php');?>
    
</body>
</html>
<?php

}else{
  echo '<script>window.location.replace("login.php?estatus=login")</script>';
}
?>