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
<body class="archive">
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

<div class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="/">Home</a></li>
            <li><a href="archive.html">Knowledge Base</a></li>
            <li class="active">Explore Topics</li>
        </ol>
    </div>
</div>


<!-- Topics -->

<section class="topics">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <header>
                    <h2><span class="icon-pages"></span>Explore Topics</h2>
                    <p>We did our best to cover all topics related to this product. Each section have number which represent
                        number of topic in each category.</p>
                </header>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="topics-list">
                            <h3><a href="#"><span class="badge">19</span>Introduction</a></h3>
                            <ul>
                                <li><a href="single.html"> How to use this documentation? </a></li>
                                <li><a href="single.html"> How to find topics? </a></li>
                                <li><a href="single.html"> What is included and why? </a></li>
                                <li><a href="single.html"> Basic knowledge requirments. </a></li>
                                <li><a href="single.html"> Getting Started & What is next. </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="topics-list">
                            <h3><a href="#"><span class="badge">7</span>Intallation & Activation</a></h3>
                            <ul>
                                <li><a href="#"> How to use this documentation? </a></li>
                                <li><a href="#"> How to find topics? </a></li>
                                <li><a href="#"> What is included and why? </a></li>
                                <li><a href="#"> Basic knowledge requirments. </a></li>
                                <li><a href="#"> Getting Started & What is next. </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="topics-list">
                            <h3><a href="#"><span class="badge">5</span>Import & Export</a></h3>
                            <ul>
                                <li><a href="#"> How to use this documentation? </a></li>
                                <li><a href="#"> How to find topics? </a></li>
                                <li><a href="#"> What is included and why? </a></li>
                                <li><a href="#"> Basic knowledge requirments. </a></li>
                                <li><a href="#"> Getting Started & What is next. </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="topics-list">
                            <h3><a href="#"><span class="badge">17</span>Settings & Configuration</a></h3>
                            <ul>
                                <li><a href="#"> How to use this documentation? </a></li>
                                <li><a href="#"> How to find topics? </a></li>
                                <li><a href="#"> What is included and why? </a></li>
                                <li><a href="#"> Basic knowledge requirments. </a></li>
                                <li><a href="#"> Getting Started & What is next. </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="topics-list">
                            <h3><a href="#"><span class="badge">19</span>Introduction</a></h3>
                            <ul>
                                <li><a href="single.html"> How to use this documentation? </a></li>
                                <li><a href="single.html"> How to find topics? </a></li>
                                <li><a href="single.html"> What is included and why? </a></li>
                                <li><a href="single.html"> Basic knowledge requirments. </a></li>
                                <li><a href="single.html"> Getting Started & What is next. </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="topics-list">
                            <h3><a href="#"><span class="badge">7</span>Intallation & Activation</a></h3>
                            <ul>
                                <li><a href="#"> How to use this documentation? </a></li>
                                <li><a href="#"> How to find topics? </a></li>
                                <li><a href="#"> What is included and why? </a></li>
                                <li><a href="#"> Basic knowledge requirments. </a></li>
                                <li><a href="#"> Getting Started & What is next. </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="widget widget-support-forum">
                        <span class="icon icon-forum"></span>
                        <h4>Looking for help? Join Community</h4>

                        <p>Couldn’t find what your are looking for ? Why not join out support forums and let us help
                            you.</p>


                        <a href="#" class="btn btn-success">Support Forum</a>
                    </div>

                    <div class="pt-50">
                        <div class="widget fix widget_categories">
                            <span class="icon icon-folder"></span>
                            <h4>Popular Knowledgebase Topics</h4>
                            <ul>
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