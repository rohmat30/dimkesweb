<!DOCTYPE HTML>
<!--[if gt IE 8]> <html class="ie9" lang="en"> <![endif]-->
<html class="ihome">
    
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
    <title>iMedica</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
    
    <?php echo link_tag('dist/css/jquery-ui-1.10.3.custom.css')?>
    <?php echo link_tag('dist/css/animate.css')?>
    <?php echo link_tag('dist/css/font-awesome.min.css')?>
    <?php echo link_tag('dist/css/blue.css')?>
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <?php echo link_tag('dist/rs-plugin/css/settings.min.css')?>
    <!--[if IE 9]>
    	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
    <![endif]-->    
    <link rel="icon" type="image/png" href="images/fevicon.png">
    <?php echo link_tag('dist/css/slides.css')?>
    <?php echo link_tag('dist/css/inline.min.css')?>
</head>
    <body>
    		<div id="loader-overlay"><img src="images/loader.gif" alt="Loading" /></div>
			
            <header>
            
            <div class="header-bg">
            
            <div id="search-overlay">
            <div class="container">
        						<div id="close">X</div>
        	
        						<input id="hidden-search" type="text" placeholder="Start Typing..." autofocus autocomplete="off"  /> <!--hidden input the user types into-->
        						<input id="display-search" type="text" placeholder="Start Typing..." autofocus autocomplete="off" /> <!--mirrored input that shows the actual input value-->
        					</div></div>
               
                	
                    <!--Topbar-->
                    <div class="topbar-info no-pad">                    
                        <div class="container">                     
                            <div class="social-wrap-head col-md-2 no-pad">
                                <ul>
                                <li><a href="#"><i class="icon-facebook head-social-icon" id="face-head" data-original-title="" title=""></i></a></li>
                                <li><a href="#"><i class="icon-social-twitter head-social-icon" id="tweet-head" data-original-title="" title=""></i></a></li>
                                <li><a href="#"><i class="icon-google-plus head-social-icon" id="gplus-head" data-original-title="" title=""></i></a></li>
                                <li><a href="#"><i class="icon-linkedin head-social-icon" id="link-head" data-original-title="" title=""></i></a></li>
                                <li><a href="#"><i class="icon-rss head-social-icon" id="rss-head" data-original-title="" title=""></i></a></li>
                                </ul>
                            </div>                            
                            <div class="top-info-contact pull-right col-md-6">Call Us Today! +123 455 755  |    contact@imedica.com  <div id="search" class="fa fa-search search-head"></div>
                            </div>                      
                        </div>
                    </div><!--Topbar-info-close-->
                    
                    
                    
                    
                    
                    <div id="headerstic">
                    
                    <div class=" top-bar container">
                    	<div class="row">
                            <nav class="navbar navbar-default" role="navigation">
                              <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                          
                          <button type="button" class="navbar-toggle icon-list-ul" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                          </button>
                          <button type="button" class="navbar-toggle icon-rocket" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                            <span class="sr-only">Toggle navigation</span>
                          </button>

                          <a href="<?php echo site_url('template/index')?>"><div class="logo"></div></a>
                        </div>
                            
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="<?php echo site_url('template/index')?>" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-home"></i>Home</a>
								<ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('template/index/home-page-1')?>">Home Page 1</a></li>
									<li><a href="<?php echo site_url('template/index/home-page-2')?>">Home Page 2</a></li>
									<li><a href="<?php echo site_url('template/index/home-page-3')?>">Home Page 3</a></li>
									<li><a href="<?php echo site_url('template/index/home-page-4')?>">Home Page 4</a></li>
									<li><a href="<?php echo site_url('template/index/home-page-5')?>">Home Page 5</a></li>
									<li><a href="<?php echo site_url('template/index/home-page-6')?>">Home Page 6</a></li>
									<li><a href="<?php echo site_url('template/index/home-page-7')?>">Home Page 7</a></li>
									<li><a href="<?php echo site_url('template/index/home-page-8')?>">Home Page 8</a></li>
                                </ul>
							</li>

                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i>Features<b class="icon-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                	<li class="dropdown"><a href="#">Page Elements</a>
										<ul class="dropdown-menu">
		                                    <li><a href="<?php echo site_url('template/index/page-elements-1')?>">Page Elements 1</a></li>
		                                    <li><a href="<?php echo site_url('template/index/page-elements-2')?>">Page Elements 2</a></li>
		                                    <li><a href="<?php echo site_url('template/index/page-elements-3')?>">Page Elements 3</a></li>
		                                </ul>
		                            </li>
                                    <li><a href="<?php echo site_url('template/index/typography')?>">Typography</a></li>
                                    <li><a href="<?php echo site_url('template/index/columns')?>">Columns</a></li>
                                    <li><a href="<?php echo site_url('template/index/pricing-tables')?>">Pricing Tables</a></li>
									<li><a href="<?php echo site_url('template/index/pricing-plans')?>">Pricing Plans</a></li>
                                    <li><a href="<?php echo site_url('template/index/flip-box')?>">Flip Box</a></li>
									<li><a href="<?php echo site_url('template/index/call-to-action')?>">Call To Action</a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file"></i>Pages<b class="icon-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                	<li class="dropdown"><a href="#">About Us</a>
										<ul class="dropdown-menu">
		                                    <li><a href="<?php echo site_url('template/index/about-us-1')?>">About Us 1</a></li>
                                    		<li><a href="<?php echo site_url('template/index/about-us-2')?>">About Us 2</a></li>
		                                </ul>
		                            </li>
		                            <li class="dropdown"><a href="#">Services</a>
										<ul class="dropdown-menu">
		                                    <li><a href="<?php echo site_url('template/index/services-1')?>">Services 1</a></li>
                                    		<li><a href="<?php echo site_url('template/index/services-2')?>">Services 2</a></li>
		                                </ul>
		                            </li>
                                    <li><a href="<?php echo site_url('template/index/departments')?>">Departments</a></li>
                                    <li class="dropdown"><a href="#">Meet Our Doctors</a>
										<ul class="dropdown-menu">
		                                    <li><a href="<?php echo site_url('template/index/meet-our-doctors-1')?>">Meet Our Doctors 1</a></li>
                                    		<li><a href="<?php echo site_url('template/index/meet-our-doctors-2')?>">Meet Our Doctors 2</a></li>
		                                </ul>
		                            </li>
                                    <li><a href="<?php echo site_url('template/index/testimonials')?>">Testimonials</a></li>
                                    <li><a href="<?php echo site_url('template/index/faq')?>">FAQs</a></li>
								</ul>
                            </li>
                            
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-camera"></i>Gallery<b class="icon-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                	<li class="dropdown left-dropdown"><a href="#">Gallery Carousel</a>
										<ul class="dropdown-menu">
		                                    <li><a href="<?php echo site_url('template/index/gallery-1-column-carousel')?>">1 Column Carousel</a></li>
											<li><a href="<?php echo site_url('template/index/gallery-2-columns-carousel')?>">2 Columns Carousel</a></li>
											<li><a href="<?php echo site_url('template/index/gallery-3-columns-carousel')?>">3 Columns Carousel</a></li>
											<li><a href="<?php echo site_url('template/index/gallery-4-columns-carousel')?>">4 Columns Carousel</a></li>
		                                </ul>
		                            </li>
		                            <li class="dropdown left-dropdown"><a href="#">Gallery Full Width</a>
										<ul class="dropdown-menu">
		                                    <li><a href="<?php echo site_url('template/index/gallery-1-column')?>">Gallery 1 Column</a></li>
		                                    <li><a href="<?php echo site_url('template/index/gallery-2-columns')?>">Gallery 2 Columns</a></li>
											<li><a href="<?php echo site_url('template/index/gallery-3-columns')?>">Gallery 3 Columns</a></li>
											<li><a href="<?php echo site_url('template/index/gallery-4-columns')?>">Gallery 4 Columns</a></li>
		                                </ul>
		                            </li>
		                            <li class="dropdown left-dropdown"><a href="#">Gallery Left Sidebar</a>
										<ul class="dropdown-menu">
		                                    <li><a href="<?php echo base_url('template/index/gallery-1-column-left-sidebar')?>">Gallery 1 Column</a></li>
											<li><a href="<?php echo base_url('template/index/gallery-2-columns-left-sidebar')?>">Gallery 2 Columns</a></li>
											<li><a href="<?php echo base_url('template/index/gallery-3-columns-left-sidebar')?>">Gallery 3 Columns</a></li>
		                                </ul>
		                            </li>
		                            <li class="dropdown left-dropdown"><a href="#">Gallery Right Sidebar</a>
										<ul class="dropdown-menu">
											<li><a href="<?php echo site_url('template/index/gallery-1-column-right-sidebar')?>">Gallery 1 Column</a></li>
											<li><a href="<?php echo site_url('template/index/gallery-2-columns-right-sidebar')?>">Gallery 2 Columns</a></li>
											<li><a href="<?php echo site_url('template/index/gallery-3-columns-right-sidebar')?>">Gallery 3 Columns</a></li>
		                                </ul>
		                            </li>
                                </ul>
                            </li>
                            
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-pencil"></i>Blog<b class="icon-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                	<li class="dropdown left-dropdown"><a href="#">Blog Masonry</a>
										<ul class="dropdown-menu">
											<li><a href="<?php echo site_url('template/index/blog-masonry-full-width')?>">Full Width</a></li>
		                                    <li><a href="<?php echo site_url('template/index/blog-masonry-left-sidebar')?>">Left Sidebar</a></li>
		                                    <li><a href="<?php echo site_url('template/index/blog-masonry-right-sidebar')?>">Right Sidebar</a></li> 
		                                </ul>
		                            </li>
		                            <li class="dropdown left-dropdown"><a href="#">Blog Medium Image</a>
										<ul class="dropdown-menu">
											<li><a href="<?php echo site_url('template/index/blog-medium-full-width')?>">Full Width</a></li>
											<li><a href="<?php echo site_url('template/index/blog-medium-left-sidebar')?>">Left Sidebar</a></li>
											<li><a href="<?php echo site_url('template/index/blog-medium-right-sidebar')?>">Right Sidebar</a></li>
		                                </ul>
		                            </li>
									<li class="dropdown left-dropdown"><a href="#">Blog Large Image</a>
										<ul class="dropdown-menu">
											<li><a href="<?php echo site_url('template/index/blog-full-width')?>">Blog Full Width</a></li>
											<li><a href="<?php echo site_url('template/index/blog-left-sidebar')?>">Blog Left Sidebar</a></li>
											<li><a href="<?php echo site_url('template/index/blog-right-sidebar')?>">Blog Right Sidebar</a></li>
		                                </ul>
		                            </li>					
									<li><a href="<?php echo site_url('template/index/blog-with-slider')?>">Blog With Slider</a></li>
									<li class="dropdown left-dropdown"><a href="#">Blog Single Post</a>
										<ul class="dropdown-menu">
											<li><a href="<?php echo site_url('template/index/blog-image-post')?>">Image Post</a></li>
											<li><a href="<?php echo site_url('template/index/blog-gallery-post')?>">Gallery Post</a></li>
											<li><a href="<?php echo site_url('template/index/blog-video-post')?>">Video Post</a></li>
											<li><a href="<?php echo site_url('template/index/blog-full-width-post')?>">Full Width Post</a></li>
		                                </ul>
		                            </li>	
                                  </ul>
                            </li>
                            
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-envelope"></i>Contact Us<b class="icon-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('template/index/contact-1')?>">Contact Version 1</a></li>
                                    <li><a href="<?php echo site_url('template/index/contact-2')?>">Contact Version 2</a></li>
                                    <li><a href="<?php echo site_url('template/index/contact-3')?>">Contact Version 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                                
                                
                                <div class="hide-mid collapse navbar-collapse option-drop" id="bs-example-navbar-collapse-2">
                                  
                                  
                                  <ul class="nav navbar-nav navbar-right other-op">
                                    <li><i class="icon-phone2"></i>+91 9028556688</li>
                                    <li><i class="icon-mail"></i><a href="#" class="mail-menu">demo@companyname.com</a></li>
                                    
                                    <li><i class="icon-globe"></i>
                                        <a href="#" class="mail-menu"><i class="icon-facebook"></i></a>
                                        <a href="#" class="mail-menu"><i class="icon-google-plus"></i></a>
                                        <a href="#" class="mail-menu"><i class="icon-linkedin"></i></a>
                                        <a href="#" class="mail-menu"><i class="icon-social-twitter"></i></a>
                                    </li>
                                    <li><i class="icon-search"></i>
                                    <div class="search-wrap"><input type="text" id="search-text" class="search-txt" name="search-text">
                                    <button id="searchbt" name="searchbt" class="icon-search search-bt"></button></div>
                                    </li>
                                    
                                  </ul>
                                </div><!-- /.navbar-collapse -->
                                
                                <div class="hide-mid collapse navbar-collapse cart-drop" id="bs-example-navbar-collapse-3">
                                  
                                  
                                  <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#"><i class="icon-cart"></i>0 item(s) - $0.00</a></li>
                                    <li><a href="#"><i class="icon-user"></i>My Account</a></li>
                                  </ul>
                                </div><!-- /.navbar-collapse -->
                                
                                
                                
                              </div><!-- /.container-fluid -->
                            </nav>
                    	</div>    
                    </div><!--Topbar End-->
                	</div>
                    
                    
                    
                    
                    
                    
                    
              </div>
            </header>

            <div class="complete-content">