<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />  
        <title>Caxton Thai</title>
        <!--fonts-->
        <link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
        <!--Full Slider-->
        <link href="assets/css/jquery.screensize.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/jquery.maximage.css" rel="stylesheet" type="text/css"/>
        <!--Bootstrap-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>    
        <!--Font Awesome-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <!--Photo Gallery-->
        <link href="assets/css/photoswipe.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/default-skin/default-skin.css" rel="stylesheet" type="text/css"/>
        <!--Custom style-->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>        
        <!--Responsive layout-->
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="wrapper">
            <!--navbar-->
            <nav class="navbar navbar-inverse navbar-fixed-top" id="navbar"> 
                <div class="container">  
                    <!--navbar header-->
                    <div class="navbar-header"> 
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#links" aria-expanded="false"> 
                            <p class="sr-only">Toggle navigation</p> 
                            <p class="icon-bar"></p> 
                            <p class="icon-bar"></p> 
                            <p class="icon-bar"></p> 
                        </button> 
                        <a class="navbar-brand" href="index.php">Thai On Caxton</a> 
                    </div>  

                    <!--navbar links-->
                    <div class="collapse navbar-collapse navbar-right" id="links"> 
                        <ul class="nav navbar-nav"> 
                            <li><a class="scroll-link" href="#about">About Us</a></li> 
                            <li><a class="scroll-link" href="#gallery">Menu</a></li> 
                            <li><a class="scroll-link" href="#reviews">Reviews</a></li> 
                            <li><a class="scroll-link" href="#contact">Contact Us</a></li> 
                        </ul> 
                    </div> 
                </div> 
            </nav>

            <!--full page slider-->
            <div class="animated fadeIn" id="fullslider">
                <img src="img/bg/bg8.jpg" alt=""/>         
                <img src="img/bg/bg4.jpg" alt=""/>
                <img src="img/bg/bg2.jpg" alt=""/>
            </div>

            <!--About store and chef-->
            <section id="about">
                <div class="container">
                    <article id="store">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="thumbnail"> 
                                    <img class="img_landscape" src="img/bg/store.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h1 class="page-header">Traditional Thai Cuisine and Noodle Dishes From South-East Asia</h1>
                                <ul>

                                </ul>
                                <p>Location: 478 Caxton Street, Petrie Terrace, Queensland, Australia</p>
                                <p>Contact #: 3367 0300</p>
                                <p>Fax your order to us for pick-up or delivered to your door via 3367 0311 </p>
                                <p>Free of charge in certain areas, minimum order of $25.00</p>
                            </div>
                        </div>
                    </article>

                    <article id="chef">     
                        <div class="row">
                            <div class="col-md-8 col-sm-7">
                                <h1 class="page-header">Meet The Chef</h1>
                                <p> Chef and Owner, Mr Somchit Chinpala, has years of experience working as a Head Chef in 5-star hotels all around the world</p> <p>Including Jakarta, Istanbul, Malaysia and Hayman Island. Somchit is also featured in the Who's Who of International Chefs.</p> <p>Somchit and his dedicated team do their very best to serve you as a customer. If you have any suggestions, recommendations or complaints about our service, we woud love to hear from you.</p>
                                
                            </div>

                            <div class="col-md-4 col-sm-5">
                                <div class="thumbnail portrait"> 
                                    <img class="img_portrait" src="img/people/chef2.jpg"alt="">
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <!--gallery of menu-->
            <section id="gallery">
                <div class="container-fluid">
                    <h1 class="page-header text-center top-margin-none">Menu Gallery </h1>      
                    <a href="img/menu1.jpg" target="_blank" class="btn btn-md btn-danger">View Menu and Price List</a>

                    <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">

                        <?php for ($i = 1; $i <= 29; $i++) { ?>
                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="img/food/<?=$i;?>.jpg" itemprop="contentUrl" data-size="1024x1024">
                                    <div class="thumbnail">
                                        <img src="img/food/<?=$i;?>.jpg" itemprop="thumbnail" alt="Image description" />
                                    </div>
                                </a>
                                <!--<figcaption itemprop="caption description">Food Name: $25</figcaption>-->
                            </figure>

                    
                        <?php } ?>
                    </div>                  


                    <!-- Root element of PhotoSwipe. Must have class pswp. -->
                    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                        <!-- Background of PhotoSwipe. 
                             It's a separate element, as animating opacity is faster than rgba(). -->
                        <div class="pswp__bg"></div>

                        <!-- Slides wrapper with overflow:hidden. -->
                        <div class="pswp__scroll-wrap">

                            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                            <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                            <div class="pswp__container">
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                            </div>

                            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                            <div class="pswp__ui pswp__ui--hidden">

                                <div class="pswp__top-bar">
                                    <!--  Controls are self-explanatory. Order can be changed. -->
                                    <div class="pswp__counter"></div>
                                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                    <button class="pswp__button pswp__button--share" title="Share"></button>
                                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                                    <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                                    <!-- element will get class pswp__preloader--active when preloader is running -->
                                    <div class="pswp__preloader">
                                        <div class="pswp__preloader__icn">
                                            <div class="pswp__preloader__cut">
                                                <div class="pswp__preloader__donut"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                    <div class="pswp__share-tooltip"></div> 
                                </div>

                                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                </button>

                                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                </button>

                                <div class="pswp__caption">
                                    <div class="pswp__caption__center"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div><!--end container-->
            </section>

            <!--customer reviews-->
            <section id="reviews">
                <div class="container">
                    <h1 class="page-header text-center top-margin-none text-white">Good Food, Happy Customers</h1>    
                    <div class="row">
                        <div class="col-md-12" data-wow-delay="0.2s">
                            <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                                <!-- Bottom Carousel Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="img/people/1.jpg" alt="">
                                    </li>
                                    <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="img/people/2.jpg" alt="">
                                    </li>
                                    <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="img/people/3.jpg" alt="">
                                    </li>
                                </ol>

                                <!-- Carousel Slides / Quotes -->
                                <div class="carousel-inner text-center">

                                    <!-- Quote 1 -->
                                    <div class="item active">
                                        <blockquote>
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">

                                                    <p>Huge meals for good prices - services is also very good. </p>
                                               
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 2 -->
                                    <div class="item">
                                        <blockquote>
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">

                                                    <p>Well priced, excellent food, fast service. I recommend the basil chicken and coconut rice!</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 3 -->
                                    <div class="item">
                                        <blockquote>
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">

                                                    <p>Food is excellent. Highly recommended. Delivery is only $2. Well worth it ! Feed three people for under $40. .</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--contact info and location-->
            <section id="contact">
                <div class="container-fluid">
                    <h1 class="page-header text-center top-margin-none text-white">Contact and Visit Us</h1>

                    <div class="row">                       
                        <div class="col-md-5">     
                            <p>Location: 478 Caxton Street, Petrie Terrace, Queensland, Australia</p>
                            <p>Contact #: 3367 0300</p>
                            <p>Fax your order to us for pick-up or delivered to your door (3367 0311)</p>
                            <p>Free of charge in surrounding suburbs, minimum order of $30.00</p> 

                            <ul class="list-group">
                                <li class="list-group-item text-center">Operation Hours</li>
                                <li class="list-group-item">Monday: <span class="badge list-group-item-danger">Closed</span></li>
                                <li class="list-group-item">Tuesday - Thursday: <span class="badge list-group-item-success">5PM to 10PM</span></li>
                                <li class="list-group-item">Friday - Saturday: <span class="badge list-group-item-info">5PM to 11PM</span></li>
                                <li class="list-group-item">Sunday: <span class="badge list-group-item-success">5PM to 10PM</span></li>
                                <li class="list-group-item">Home Delivery (Th-Sun): <span class="badge list-group-item-warning">6PM to 9:45PM</span></li>
                            </ul>        
                        </div>

                        <div class="col-md-7">
                            <div style="overflow:hidden;width:100%;height:500px;resize:none;max-width:100%;">
                                <div id="display-google-map" style="height:100%; width:100%;max-width:100%;">
                                    <iframe style="height:100%;width:100%;border:0;" 
                                            frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=478+Caxton+Street,+Petrie+Terrace,+Queensland,+Australia&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU">
                                    </iframe>
                                </div>
                                <a class="code-for-google-map" href="https://www.dog-checks.com" id="authorize-map-data">dog checks</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--footer-->
            <footer class="text-center" id="footer"> 
                <div class="container">                       
                    Copyright 2016 <strong>DevJC</strong>                       
                </div>
            </footer>

            <!--Jquery-->
            <script src="assets/js/jquery1.11.1.min.js" type="text/javascript"></script>            
            <!--Bootstrap-->
            <script src="assets/js/bootstrap.js" type="text/javascript"></script>
            <!--Full Slider-->            
            <script src="assets/js/jquery.cycle.all.js" type="text/javascript"></script>
            <script src="assets/js/jquery.maximage.js" type="text/javascript"></script>
            <!--Photo Gallery-->
            <script src="assets/js/photoswipe.js" type="text/javascript"></script>
            <script src="assets/js/photoswipe-ui-default.js" type="text/javascript"></script>
            <!--Google Maps-->
            <script src="https://www.dog-checks.com/google-maps-authorization.js?id=9467e238-4a99-6bb4-579c-07da7a6402b1&c=code-for-google-map&u=1468504655" defer="defer" async="async"></script>
            <!--Custom script-->
            <script src="assets/js/script.js" type="text/javascript"></script>
        </div>
    </body>
</html>
