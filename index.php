<?php
 
 include('function/function.php');

?>


<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<!-- 
Kool Store Template
http://www.templatemo.com/preview/templatemo_428_kool_store
-->
    <meta charset="utf-8">

    <title>Asili Yetu</title>


    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link href="http://fonts.googleapis.com/css?family=Amita" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo-misc.css">
    <link rel="stylesheet" href="css/templatemo-style.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

</head>  
<style>
    body {
        font-family: "Amita";
    }
    .logo h1{
           font-family:"Amita" ;
    }
    
</style>
 <body>
        
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    
    <header class="site-header">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="top-header-left">
                            <a href="#"><b>Register</b></a>
                            <a href="#"><b>Log In</b></a>
                        </div> <!-- /.top-header-left -->
                    </div> <!-- /.col-md-6 -->
                    <div class="col-md-6 col-sm-6">
                        
                            <div class="clearfix"></div>
              
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.top-header -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-8">
                        <div class="logo">
                     
                            <h1><a href="#">Asili Yetu</a></h1>
                   <p style="font-size: 20px;color: black"><em>"With Us, Hakuna Matata"</em></p>
                        </div> <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-8 col-sm-6 col-xs-4">
                        <div class="main-menu">
                            <a href="#" class="toggle-menu">
                                <i class="fa fa-bars"></i>
                            </a>
                            <ul class="menu">
                                <li><a href="index.php">Home</a></li>


     <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Culture Collections<span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color: forestgreen">
           <?php Getcats(); ?>

           
          </ul>
    </li>

           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tour Agency<span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:forestgreen ">
            <li><a href="#">oda safari</a></li>
            <li><a href="#">select ur packages</a></li>
            <li><a href="#">get bonus</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">negotiate</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more chances</a></li>
          </ul>
        </li>

                                <li><a href="contactus.html">Contact Us</a></li>
                                <li><a href="aboutus.html">About Us</a></li>
                            </ul>
                        </div> <!-- /.main-menu -->
                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.main-header -->
        <div class="main-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <div class="list-menu">
                            <ul>
                                <li><a href="#">Shop</a></li>
                                <li><a href="details.html">Details</a></li>
                                <li><a href="team.html">Team</a></li>
                            </ul>
                        </div> <!-- /.list-menu -->
                    </div> <!-- /.col-md-6 -->
                    <div class="col-md-6 col-sm-5">
                        <div class="notification">
                            <span><i>Free Shipping on any order above $50</i></span>
                        </div>
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.main-nav -->
    </header> <!-- /.site-header -->

    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="product-item-1">
                        <div class="product-thumb">
                            <img src="images/kikapu1.jpg" alt="Product Title">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content">
                            <h5><a href="kikapu.html">Smart Vikapu</a></h5>
                            <span class="tagline"><b>Nature</b></span>
                            <span class="price">$15.00</span>
                            <p><b>Despite of endowing a lot of potentials, but we have fantastics cultural bags mades by special robes. And its approximated to lust almost 10years without get any kinds of demages</b></p>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-5">
                    <div class="product-holder">
                        <div class="product-item-2">
                            <div class="product-thumb">
                                <img src="images/black.jpg" alt="Product Title">
                            </div> <!-- /.product-thumb -->
                            <div class="product-content overlay">
                                <h5><a href="#">Vinyago packages</a></h5>
                                <span class="tagline"><b>masaai culture</b></span>
                                <span class="price">$70.00</span>
                                <p>Carving is an art that are always perfoming by africans artisans in handicraft industries, and the output of this arts is vinyago(toys) made by wood materials and its represent masaai african culture in Tanzania,they can be in a single or more than one package </p>
                            </div> <!-- /.product-content -->
                        </div> <!-- /.product-item-2 -->
                       
                        <div class="clearfix"></div>
                    </div> <!-- /.product-holder -->
                </div> <!-- /.col-md-5 -->
                <div class="col-md-4">
                    <div class="product-item-3">
                        <div class="product-thumb">
                            <img src="images/bangili.jpg" alt="">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <h5><a href="#">Culture</a></h5>
                                    <span class="tagline"><b>Cultural decor</b></span>
                                    <span class="price">$6.00</span>
                                </div> <!-- /.col-md-6 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="full-row">
                                        
                                    </div>
                                    <div class="full-row">
                                        
                                    </div>
                                    <div class="full-row">
                                        <label for="cat2"><b>Color:<b></label>
                                        <select name="cat2" id="cat2" class="postform">
                                            <option value="-1">- Select -</option>
                                            <option class="level-0" value="2">Blue</option>
                                            <option class="level-0" value="3">Red</option>
                                            <option class="level-0" value="1">Brown</option>
                                            <option class="level-0" value="4">Black</option>
                                            <option class="level-0" value="4">Green</option>
                                        </select>
                                    </div>
                                </div> <!-- /.col-md-6 -->
                                <div class="col-md-12 col-sm-12">
                                    <div class="button-holder" style="border-radius: 20px;width: 269px;height: 37px">
                                        <a href="#" class="red-btn" ><i class="fa fa-angle-down"></i></a>
                                    </div> <!-- /.button-holder -->
                                </div> <!-- /.col-md-12 -->
                            </div> <!-- /.row -->
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-3 -->
                </div> <!-- /.col-md-4 -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-item-4">
                        <div class="product-thumb">
                            <img src="images/shanga.jpg" alt="Product Title" style="height:235px">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content overlay">
                            <h5><a href="#">Shanga & bracelets</a></h5>
                            <span class="tagline"><b>Cultural accesories</b></span>
                            <span class="price">$20.00</span>
                            <p>Cultural accessories made by special materials and decor by mixer of colorful</p>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-4 -->
                </div> <!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-item-4">
                        <div class="product-thumb">
                            <img src="images/tinga3.jpg" alt="Product Title">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content overlay">
                            <h5><a href="#">TINGATINGA</a></h5>
                            <span class="tagline">Inspired pictures</span>
                            <span class="price">$30.00</span>
                            <p>TingaTinga pictures are attractive at homes and venue decorations</p>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-4 -->
                </div> <!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="product-item-4">
                    <div class="product-thumb">
                        <img src="images/vijiko.jpg" alt="">
                    </div> 
                   <div class="product-content overlay">
                            <h5><a href="#">WOOD SPOON</a></h5>
                            <span class="tagline">Made by wood</span>
                            <span class="price">$10.00</span>
                            <p>Utensils made and designed by wood materials</p>
                            </div>
                           </div>
                        </div> <!-- /.ads-placement -->
                </div> <!-- /.col-md-4 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.content-section -->




    <footer class="site-footer">
        <div class="our-partner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="customNavigation">
                            <a class="btn prev"><i class="fa fa-angle-left"></i></a>
                            <a class="btn next"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <div id="owl-demo" class="owl-carousel">
                            <div class="item"> 
                            	<a href="#"><img src="images/blue1.jpg" alt="" style="height: 80px"></a>
                          	</div>
                            <div class="item">
                                <a href="#"><img src="images/blue1.jpg" alt="" style="height: 80px"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="images/blue1.jpg" alt="" style="height: 80px"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="images/blue1.jpg" alt="" style="height: 80px"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="images/blue1.jpg" alt="" style="height: 80px"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="images/blue1.jpg" alt="" style="height: 80px"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="images/blue1.jpg" alt="" style="height: 80px"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="images/blue1.jpg" alt="" style="height: 80px"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="images/blue1.jpg" alt="" style="height: 80px"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="images/blue1.jpg" alt="" style="height: 80px"></a>
                            </div>
                        </div> <!-- /#owl-demo -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.our-partner -->

        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <span>Copyright &copy; 2017 <a href="#">www.asiliyetu.com</a></span>
                        <p>With Us,Hakuna Matata</p>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.bottom-footer -->
    </footer> <!-- /.site-footer -->

    
    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/jquery.easing-1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>


</body>
</html>