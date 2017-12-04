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
<body>
<!-- Header -->
<header id="hero" class="hero overlay">
    
    <?php include('assets/module/menu.php');?>
    
    <div class="masthead text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1>Knowledgebase</h1>
                    <p class="lead text-muted">Sed eget orci eleifend enim mattis suscipit. Suspendisse potenti non ipsum.</p>
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


<!-- Features -->

<section id="features" class="features bgc-light-gray">
    <div class="container ">
        <div class="row features-section">
            <div class="text-center col-sm-4">
                <div class="media-body">
                    <span class="icon"><img src="assets/images/icon/icon1.png" alt=""></span>
                    <h3>Help & Documentation</h3>
                    <p class="text-muted">Unlike other Frameworks which try to cover everything, It has been built specifically for wordpress</p>
                </div>
            </div>
            <div class="text-center col-sm-4">
                <div class="media-body">
                    <span class="icon"><img src="assets/images/icon/icon2.png" alt=""></span>
                    <h3>Developer Resources</h3>
                    <p class="text-muted">An incredibly codex has been created for you to use as reference when developing extensions</p>
                </div>
            </div>
            <div class="text-center col-sm-4">
                <div class="media-body">
                    <span class="icon"><img src="assets/images/icon/icon3.png" alt=""></span>
                    <h3>Community Support</h3>
                    <p>The source code is available on GitHub, you can grab it and twist it to your heart’s content</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Topics -->
<section class="topics">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <header>
                    <h2><span class="icon-pages"></span>Explore Topics</h2>
                    <p>We did our best to cover all topics related to this product. Each section have number which represent number of topic in each category.</p>
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
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="widget widget-support-forum">
                        <span class="icon icon-forum"></span>
                            <h4>Looking for help? Join Community</h4>

                            <p>Couldn’t find what your are looking for ? Why not join out support forums and let us help you.</p>


                        <a href="#" class="btn btn-success">Support Forum</a>
                    </div>

                <!--******************************* Lists *******************************-->

                    <div class="pt-50">
                        <div class="topics-list">
                            <h3><a href="#"><span class="badge">10</span>API Guide Lines</a></h3>
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
            <div class="topics-btn text-center">
                <a class="btn btn-default" href="archive.html"><span class="icon-adn"></span> Explore All Topics</a>
            </div>
        </div>

    </div>
</section>


<!-- Support Section -->

<section class="support-section text-white section ">
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

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body" id="modal-message">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!--
    <table class="table" id="TableData">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Edad</th>
        <th scope="col">Nación</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
    </table>
-->

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