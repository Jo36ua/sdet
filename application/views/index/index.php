<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<?php $this->load->view('head'); ?>

<body class="body header-fixed counter-scroll">

    <!-- preloade -->
    <?php $this->load->view('preloader'); ?>

    <!-- /preload -->

    <div id="wrapper">
        <div id="page" class="clearfix">
            <header id="header_main" class="header_1 js-header home">
                <div class="container-fuild ">
                    <div class="row"> 
                        <div class="col-md-12">                              
                            <div id="site-header-wrap" class="header-home"> 
                                <div class="wrap-box relative">
                                    <div id="site-logo" class="clearfix">
                                        <div id="site-logo-inner">
                                            <a href="index.html" rel="home" class="main-logo">
                                                <img id="logo_header" src="assets/images/logo/logo.png" alt="img" width="195" height="50">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
                                    <!-- <div class="wrap-nav"> -->
                                    <div id="site-header-inner">
                                        <div class="wrap-inner clearfix flex">                               
                                            <nav id="main-nav" class="main-nav">                                      
                                                <ul id="menu-primary-menu" class="menu">
                                                    <li class="menu-item menu-item-has-children current-menu-item">
                                                        <a href="index.html">Home</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item current-item"><a href="index.html">Home 01</a></li>
                                                            <li class="menu-item"><a href="home2.html">Home 02</a></li>
                                                        </ul>
                                                    </li>  
                                                    
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="#"> Pages </a>   
                                                        <ul class="sub-menu ">
                                                            <li class="menu-item"><a href="about.html">About</a></li>                                            
                                                            <li class="menu-item"><a href="team.html">Our Team</a></li>
                                                            <li class="menu-item"><a href="team-details.html">Team Details</a></li>
                                                            <li class="menu-item"><a href="pricing.html">Pricing</a></li>
                                                            <li class="menu-item"><a href="faq.html">Our Faq</a></li>
                                                            <li class="menu-item"><a href="shop.html">Shop</a></li>
                                                            <li class="menu-item"><a href="product-details.html">Product Details</a></li>
                                                        </ul>                                    
                                                    </li>

                                                    <li class="menu-item menu-item-has-children ">
                                                        <a href="services.html"> Services </a>
                                                        <ul class="sub-menu ">
                                                            <li class="menu-item"><a href="services.html">Services</a></li>
                                                            <li class="menu-item"><a href="service-details.html">Service Details</a></li>
                                                        </ul>
                                                    </li> 
                                            
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="portfolio.html">Portfolio </a>  
                                                        <ul class="sub-menu ">
                                                            <li class="menu-item"><a href="portfolio.html">Portfolio</a></li>
                                                            <li class="menu-item"><a href="portfolio-details.html">Portfolio Details</a></li>
                                                        </ul>                                      
                                                    </li>

                                                    <li class="menu-item menu-item-has-children ">                                       
                                                        <a href="#">Blog</a>
                                                        <ul class="sub-menu">                                                 
                                                            <li class="menu-item "><a href="blog.html">Blog</a></li>
                                                            <li class="menu-item"><a href="blog-details.html">Blog Details</a></li>                                                    
                                                        </ul>
                                                    </li>
                                                    
                                                    <li class="menu-item">
                                                        <a href="contact.html">Contact </a>                                        
                                                    </li>
                                                </ul>
                                            
                                            </nav><!-- /#main-nav -->  
                                            
                                            <div class="header-search flat-show-search shadows" id="s1">
                                                <a href="#" class="show-search header-search-trigger">
                                                    <span class="icon-Vector"><i class="far fa-search"></i></span>
                                                </a>
                         
                                                <div class="top-search">
                                                    <form action="#" method="get" role="search" class="search-form">
                                                        <input type="search" id="s" class="search-field" placeholder="Search..." value="" name="s" title="Search for" required="">
                                                        <button class="search search-submit" type="submit" title="Search">
                                                            <i class="far fa-search"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div> 
                                        </div> 
                                    </div> 
                                    <!-- </div> -->
                                    <div class="flat-button-top flex-three"> 
                                        <a href="#" class="menu-bar-right header-menu">
                                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.7904 16.4166V25.1666V16.4166ZM16.4154 20.7916H25.1654H16.4154ZM4.7487 10.5833H7.66536C8.43891 10.5833 9.18078 10.276 9.72776 9.72904C10.2747 9.18206 10.582 8.44019 10.582 7.66665V4.74998C10.582 3.97643 10.2747 3.23457 9.72776 2.68758C9.18078 2.1406 8.43891 1.83331 7.66536 1.83331H4.7487C3.97515 1.83331 3.23328 2.1406 2.6863 2.68758C2.13932 3.23457 1.83203 3.97643 1.83203 4.74998V7.66665C1.83203 8.44019 2.13932 9.18206 2.6863 9.72904C3.23328 10.276 3.97515 10.5833 4.7487 10.5833ZM19.332 10.5833H22.2487C23.0222 10.5833 23.7641 10.276 24.3111 9.72904C24.8581 9.18206 25.1654 8.44019 25.1654 7.66665V4.74998C25.1654 3.97643 24.8581 3.23457 24.3111 2.68758C23.7641 2.1406 23.0222 1.83331 22.2487 1.83331H19.332C18.5585 1.83331 17.8166 2.1406 17.2696 2.68758C16.7227 3.23457 16.4154 3.97643 16.4154 4.74998V7.66665C16.4154 8.44019 16.7227 9.18206 17.2696 9.72904C17.8166 10.276 18.5585 10.5833 19.332 10.5833ZM4.7487 25.1666H7.66536C8.43891 25.1666 9.18078 24.8594 9.72776 24.3124C10.2747 23.7654 10.582 23.0235 10.582 22.25V19.3333C10.582 18.5598 10.2747 17.8179 9.72776 17.2709C9.18078 16.7239 8.43891 16.4166 7.66536 16.4166H4.7487C3.97515 16.4166 3.23328 16.7239 2.6863 17.2709C2.13932 17.8179 1.83203 18.5598 1.83203 19.3333V22.25C1.83203 23.0235 2.13932 23.7654 2.6863 24.3124C3.23328 24.8594 3.97515 25.1666 4.7487 25.1666Z" stroke="#120A21" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </a>                
                                        <div class="sc-btn-top" id="site-header">
                                            <a class="cta btn-2" href="contact.html">
                                                <span>Get Started</span>
                                                <span>
                                                  <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g  stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                      <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                                      <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                                      <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                                                    </g>
                                                  </svg> 
                                                </span> 
                                              </a>
                                        </div>                                     
                                    </div>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sidebar" class="side-menu__block">
                    <div class="side-menu__block-overlay custom-cursor__overlay"></div>
                    <div class="inner-sidebar side-menu__block-inner fl-st-1">
                        <div class="side-menu__top justify-content-end">
                            <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="assets/images/icon/close.png" alt="images"></a>
                        </div>
                        <aside class="side-bar">
                            <div class="inner-side-bar">                                       
                                <div class="widget widget-search search"> 
                                    <h3 class="widget-title title-search">
                                        Search
                                    </h3>                                 
                                    <div class="search-flat">
                                        <form action="#" method="get" role="search" class="search-form">
                                            <input type="search" class="search-field"
                                                placeholder="Search here" value="" name="s"
                                                title="Search for" required="">
                                            <button class="search-icon search-submit" type="submit" title="Search"></button>
                                        </form>
                                    </div>
                                </div>
                                
                                <div class="widget widget-categories style"> 
                                    <h3 class="widget-title title-list">
                                        Category
                                    </h3>                                                                                                                        
                                    <ul>
                                        <li>
                                            <h6><a href="blog.html">Digital Marketing</a></h6>
                                        </li>
                                        <li class="active">
                                            <h6><a href="blog.html">SEO Optimization</a></h6>
                                        </li>
                                        <li>
                                            <h6><a href="blog.html">Email Marketing</a></h6>
                                        </li>
                                        <li>
                                            <h6><a href="blog.html">Content Writing</a></h6>
                                        </li>
                                        <li>
                                            <h6><a href="blog.html">UI/UX Strategy</a></h6>
                                        </li>  
                                        <li>
                                            <h6><a href="blog.html">Web Development</a></h6>
                                        </li>                              
                                    </ul>
                                </div>

                                <div class="widget widget-menu">
                                    <h3 class="widget-title title-news">
                                        Recent Post
                                    </h3>                       
                                    <ul class="recent-news ">
                                        <li class="hover-img flex">
                                            <div class="thumb img-style ">
                                                <img class="img" src="assets/images/blog/news-1.jpg" alt="images">
                                            </div>
                                            <div class="content link-style-1">    
                                                <div class="days p-16">September 25, 2022</div>                              
                                                <h6 class="title"><a href="blog-details.html">Fluid Sizing Instead Of Media Queries</a></h6>
                                            </div>
                                        </li>
                                        <li class="hover-img flex">
                                            <div class="thumb img-style ">
                                                <img class="img" src="assets/images/blog/news-2.jpg" alt="images">
                                            </div>
                                            <div class="content link-style-1">    
                                                <div class="days p-16">September 25, 2022</div>                              
                                                <h6 class="title"><a href="blog-details.html">Fluid Sizing Instead Of Media Queries</a></h6>
                                            </div>
                                        </li>
                                        <li class="hover-img flex">
                                            <div class="thumb img-style ">
                                                <img class="img" src="assets/images/blog/news-3.jpg" alt="images">
                                            </div>
                                            <div class="content link-style-1">    
                                                <div class="days p-16">September 25, 2022</div>                              
                                                <h6 class="title"><a href="blog-details.html">Fluid Sizing Instead Of Media Queries</a></h6>
                                            </div>
                                        </li>
                                        <li class="hover-img flex">
                                            <div class="thumb img-style ">
                                                <img class="img" src="assets/images/blog/news-4.jpg" alt="images">
                                            </div>
                                            <div class="content link-style-1">    
                                                <div class="days p-16">September 25, 2022</div>                              
                                                <h6 class="title"><a href="blog-details.html">Fluid Sizing Instead Of Media Queries</a></h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>  
                            </div>
                        </aside>
                    </div><!--/inner-sidebar-->
                </div>
            </header>
                
                  <!-- slider -->
                <section class="slider home">
                    <div class="swiper-container mainslider2">                            
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slider-item">
                                    <div class="flat-slider">  
                                        <div class="img-slider">
                                            <img class="img-item" src="assets/images/slider/bg-slider-1.png" alt="">
                                        </div>
                                        <div class="container  flex">      
                                            <div class="content po-content-two">
                                                <div class="heading">
                                                    <h6 class="sub-title">20% OFF Best SEO Agency</h6>
                                                    <h1>We’re Creative SEO Solutions Agency</h1>
                                                    <h4 class="fw-4">Sit amet consectetur adipiscing elit Massa diam tincidunt. 
                                                        Nibh posuere aliquam et sit imperdiet sagittis tempus arcus 
                                                        nulla quis est a cursus sit quis nibh platea.</h4>
                                                </div>
                                                <div class="flat-bt-slider sc-btn-top">
                                                    <a class="cta btn-3" href="services.html">
                                                        <span>Discover More</span>
                                                        <span>
                                                            <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <g  stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                                                <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                                                <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                                                            </g>
                                                            </svg>
                                                        </span> 
                                                    </a>
                                                </div>                            
                                            </div> 
                                            <div class="images po-content-one">
                                                <div class="image">
                                                    <img class="img-item" src="assets/images/slider/slider-1.png" alt="">
                                                </div>
                                            </div>                                       
                                        </div>
                                    </div>
                                </div>                                                                         
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-item">
                                    <div class="flat-slider">  
                                        <div class="img-slider">
                                            <img class="img-item" src="assets/images/slider/bg-slider-1.png" alt="">
                                        </div>
                                        <div class="container  flex">      
                                            <div class="content po-content-two">
                                                <div class="heading">
                                                    <h6 class="sub-title">20% OFF Best SEO Agency</h6>
                                                    <h1>We’re Creative SEO Solutions Agency</h1>
                                                    <h4 class="fw-4">Sit amet consectetur adipiscing elit Massa diam tincidunt. 
                                                        Nibh posuere aliquam et sit imperdiet sagittis tempus arcus 
                                                        nulla quis est a cursus sit quis nibh platea.</h4>
                                                </div>
                                                <div class="flat-bt-slider sc-btn-top">
                                                    <a class="cta btn-3" href="services.html">
                                                        <span>Discover More</span>
                                                        <span>
                                                            <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <g  stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                                                <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                                                <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                                                            </g>
                                                            </svg>
                                                        </span> 
                                                    </a>
                                                </div>                            
                                            </div> 
                                            <div class="images po-content-one">
                                                <div class="image">
                                                    <img class="img-item" src="assets/images/slider/slider-1.png" alt="">
                                                </div>
                                            </div>                                       
                                        </div>
                                    </div>
                                </div>                                                                           
                            </div>   
                            <div class="swiper-slide">
                                <div class="slider-item">
                                    <div class="flat-slider">  
                                        <div class="img-slider">
                                            <img class="img-item" src="assets/images/slider/bg-slider-1.png" alt="">
                                        </div>
                                        <div class="container  flex">      
                                            <div class="content po-content-two">
                                                <div class="heading">
                                                    <h6 class="sub-title">20% OFF Best SEO Agency</h6>
                                                    <h1>We’re Creative SEO Solutions Agency</h1>
                                                    <h4 class="fw-4">Sit amet consectetur adipiscing elit Massa diam tincidunt. 
                                                        Nibh posuere aliquam et sit imperdiet sagittis tempus arcus 
                                                        nulla quis est a cursus sit quis nibh platea.</h4>
                                                </div>
                                                <div class="flat-bt-slider sc-btn-top">
                                                    <a class="cta btn-3" href="services.html">
                                                        <span>Discover More</span>
                                                        <span>
                                                            <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <g  stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                                                <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                                                <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                                                            </g>
                                                            </svg>
                                                        </span> 
                                                    </a>
                                                </div>                            
                                            </div> 
                                            <div class="images po-content-one">
                                                <div class="image">
                                                    <img class="img-item" src="assets/images/slider/slider-1.png" alt="">
                                                </div>
                                            </div>                                       
                                        </div>
                                    </div>
                                </div>                                                                           
                            </div>                   
                        </div>
                        <div class="swiper-pagination2">  </div> 
                    </div>
                    <div class="button-custom-slider">
                        <div class="swiper-button-next3 button-slide-custom-next"><i class="far fa-angle-right"></i></div>
                        <div class="swiper-button-prev3 button-slide-custom-prev"><i class="far fa-angle-left"></i> </div>
                    </div>                     
                </section>  

            <section class="flat-icon">
                <div class="container-fuild">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrap-icon flex">
                                <div class="icon-box box-1 flex-five" data-aos="fade-right" data-aos-duration="1200">
                                    <div class="icon">
                                        <svg width="49" height="51" viewBox="0 0 49 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0526 2.58333C17.0526 1.6341 17.8221 0.864578 18.7714 0.864578H30.2296C31.1789 0.864578 31.9484 1.6341 31.9484 2.58333V12.5998L40.623 7.59151C41.0177 7.36358 41.487 7.30182 41.9272 7.41982C42.3675 7.5378 42.7428 7.82586 42.9709 8.22062L48.7 18.1439C49.1746 18.9659 48.893 20.0171 48.071 20.4917L39.3963 25.5L48.071 30.5082C48.4656 30.736 48.7536 31.1114 48.8717 31.5518C48.9897 31.9921 48.928 32.4612 48.7 32.856L42.9709 42.7792C42.7428 43.174 42.3675 43.4621 41.9272 43.5801C41.487 43.6981 41.0177 43.6362 40.623 43.4085L31.9484 38.4V48.4167C31.9484 49.3659 31.1789 50.1354 30.2296 50.1354H18.7714C17.8221 50.1354 17.0526 49.3659 17.0526 48.4167V38.4L8.37808 43.4085C7.98332 43.6362 7.51417 43.6981 7.07385 43.5801C6.63355 43.4621 6.25815 43.174 6.03022 42.7792L0.301054 32.856C0.0731252 32.4612 0.011365 31.9921 0.129363 31.5518C0.247338 31.1114 0.5354 30.736 0.930163 30.5082L9.60469 25.5L0.930163 20.4917C0.108096 20.0171 -0.173573 18.9659 0.301054 18.1439L6.03022 8.22062C6.25815 7.82586 6.63355 7.5378 7.07385 7.41982C7.51417 7.30182 7.98332 7.36358 8.37808 7.59151L17.0526 12.5998V2.58333ZM20.4901 4.30208V15.5767C20.4901 16.1908 20.1626 16.7582 19.6307 17.0652C19.099 17.3722 18.4438 17.3722 17.912 17.0652L8.14781 11.4279L4.1374 18.3741L13.9016 24.0116C14.4334 24.3186 14.761 24.8861 14.7609 25.5C14.7609 26.1142 14.4334 26.6813 13.9016 26.9884L4.1374 32.6257L8.14781 39.572L17.912 33.9347C18.4438 33.6276 19.099 33.6276 19.6307 33.9347C20.1626 34.2418 20.4901 34.8092 20.4901 35.4231V46.6979H28.5109V35.4231C28.5109 34.8092 28.8386 34.2418 29.3703 33.9347C29.9022 33.6276 30.5574 33.6276 31.089 33.9347L40.8534 39.572L44.8638 32.6257L35.0994 26.9884C34.5678 26.6813 34.2401 26.1142 34.2401 25.5C34.2401 24.8861 34.5678 24.3186 35.0994 24.0116L44.8638 18.3741L40.8534 11.4279L31.089 17.0652C30.5574 17.3722 29.9022 17.3722 29.3703 17.0652C28.8386 16.7582 28.5109 16.1908 28.5109 15.5767V4.30208H20.4901Z" fill="#F43FE2"/>
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <div class="sub-title title-16">Need Any Consultations</div>
                                        <h3 class="fw-5">Call : <a href="tel:0123456789"> +000 (123) 456 789</a></h3>
                                    </div>
                                </div>  
                                <div class="icon-box box-2 flex-five" data-aos="zoom-in" data-aos-duration="1200">
                                    <div class="icon">
                                        <svg width="49" height="51" viewBox="0 0 49 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0526 2.58333C17.0526 1.6341 17.8221 0.864578 18.7713 0.864578H30.2296C31.1788 0.864578 31.9484 1.6341 31.9484 2.58333V12.5998L40.623 7.59151C41.0176 7.36358 41.487 7.30182 41.9272 7.41982C42.3674 7.5378 42.7428 7.82586 42.9708 8.22062L48.7 18.1439C49.1746 18.9659 48.893 20.0171 48.0709 20.4917L39.3963 25.5L48.0709 30.5082C48.4656 30.736 48.7536 31.1114 48.8716 31.5518C48.9897 31.9921 48.928 32.4612 48.7 32.856L42.9708 42.7792C42.7428 43.174 42.3674 43.4621 41.9272 43.5801C41.487 43.6981 41.0176 43.6362 40.623 43.4085L31.9484 38.4V48.4167C31.9484 49.3659 31.1788 50.1354 30.2296 50.1354H18.7713C17.8221 50.1354 17.0526 49.3659 17.0526 48.4167V38.4L8.37806 43.4085C7.98329 43.6362 7.51414 43.6981 7.07382 43.5801C6.63353 43.4621 6.25813 43.174 6.0302 42.7792L0.301032 32.856C0.0731024 32.4612 0.0113421 31.9921 0.12934 31.5518C0.247315 31.1114 0.535377 30.736 0.93014 30.5082L9.60467 25.5L0.93014 20.4917C0.108073 20.0171 -0.173596 18.9659 0.301032 18.1439L6.0302 8.22062C6.25813 7.82586 6.63353 7.5378 7.07382 7.41982C7.51414 7.30182 7.98329 7.36358 8.37806 7.59151L17.0526 12.5998V2.58333ZM20.49 4.30208V15.5767C20.49 16.1908 20.1626 16.7582 19.6307 17.0652C19.0989 17.3722 18.4438 17.3722 17.912 17.0652L8.14779 11.4279L4.13737 18.3741L13.9016 24.0116C14.4334 24.3186 14.7609 24.8861 14.7609 25.5C14.7609 26.1142 14.4333 26.6813 13.9015 26.9884L4.13737 32.6257L8.14779 39.572L17.912 33.9347C18.4437 33.6276 19.0989 33.6276 19.6307 33.9347C20.1626 34.2418 20.49 34.8092 20.49 35.4231V46.6979H28.5109V35.4231C28.5109 34.8092 28.8386 34.2418 29.3703 33.9347C29.9021 33.6276 30.5573 33.6276 31.089 33.9347L40.8533 39.572L44.8638 32.6257L35.0994 26.9884C34.5678 26.6813 34.24 26.1142 34.24 25.5C34.24 24.8861 34.5678 24.3186 35.0994 24.0116L44.8638 18.3741L40.8533 11.4279L31.089 17.0652C30.5573 17.3722 29.9021 17.3722 29.3703 17.0652C28.8386 16.7582 28.5109 16.1908 28.5109 15.5767V4.30208H20.49Z" fill="url(#paint0_linear_10_493)"/>
                                            <defs>
                                            <linearGradient id="paint0_linear_10_493" x1="7.5" y1="-4" x2="24.5005" y2="50.1354" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#7500EB"/>
                                            <stop offset="1" stop-color="#D300F5"/>
                                            </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <div class="sub-title title-16">Email Address</div>
                                        <h3 class="fw-5"><a href="mailto:support@gmail.com">support@gmail.com</a></h3>
                                    </div>
                                </div>                         
                                <div class="icon-box box-3 flex-five" data-aos="fade-left" data-aos-duration="1200">
                                    <div class="icon">
                                        <svg width="49" height="51" viewBox="0 0 49 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0526 2.58333C17.0526 1.6341 17.8221 0.864578 18.7714 0.864578H30.2296C31.1789 0.864578 31.9484 1.6341 31.9484 2.58333V12.5998L40.623 7.59151C41.0177 7.36358 41.487 7.30182 41.9272 7.41982C42.3675 7.5378 42.7428 7.82586 42.9709 8.22062L48.7 18.1439C49.1746 18.9659 48.893 20.0171 48.071 20.4917L39.3963 25.5L48.071 30.5082C48.4656 30.736 48.7536 31.1114 48.8717 31.5518C48.9897 31.9921 48.928 32.4612 48.7 32.856L42.9709 42.7792C42.7428 43.174 42.3675 43.4621 41.9272 43.5801C41.487 43.6981 41.0177 43.6362 40.623 43.4085L31.9484 38.4V48.4167C31.9484 49.3659 31.1789 50.1354 30.2296 50.1354H18.7714C17.8221 50.1354 17.0526 49.3659 17.0526 48.4167V38.4L8.37808 43.4085C7.98332 43.6362 7.51417 43.6981 7.07385 43.5801C6.63355 43.4621 6.25815 43.174 6.03022 42.7792L0.301054 32.856C0.0731252 32.4612 0.011365 31.9921 0.129363 31.5518C0.247338 31.1114 0.5354 30.736 0.930163 30.5082L9.60469 25.5L0.930163 20.4917C0.108096 20.0171 -0.173573 18.9659 0.301054 18.1439L6.03022 8.22062C6.25815 7.82586 6.63355 7.5378 7.07385 7.41982C7.51417 7.30182 7.98332 7.36358 8.37808 7.59151L17.0526 12.5998V2.58333ZM20.4901 4.30208V15.5767C20.4901 16.1908 20.1626 16.7582 19.6307 17.0652C19.099 17.3722 18.4438 17.3722 17.912 17.0652L8.14781 11.4279L4.1374 18.3741L13.9016 24.0116C14.4334 24.3186 14.761 24.8861 14.7609 25.5C14.7609 26.1142 14.4334 26.6813 13.9016 26.9884L4.1374 32.6257L8.14781 39.572L17.912 33.9347C18.4438 33.6276 19.099 33.6276 19.6307 33.9347C20.1626 34.2418 20.4901 34.8092 20.4901 35.4231V46.6979H28.5109V35.4231C28.5109 34.8092 28.8386 34.2418 29.3703 33.9347C29.9022 33.6276 30.5574 33.6276 31.089 33.9347L40.8534 39.572L44.8638 32.6257L35.0994 26.9884C34.5678 26.6813 34.2401 26.1142 34.2401 25.5C34.2401 24.8861 34.5678 24.3186 35.0994 24.0116L44.8638 18.3741L40.8534 11.4279L31.089 17.0652C30.5574 17.3722 29.9022 17.3722 29.3703 17.0652C28.8386 16.7582 28.5109 16.1908 28.5109 15.5767V4.30208H20.4901Z" fill="#F43FE2"/>
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <div class="sub-title title-16">Office Locations</div>
                                        <h3 class="fw-5">55 Main Street, New York</h3>
                                    </div>
                                </div>  
                            </div>
                                                   
                        </div>
                    </div>
                </div>
            </section>

            <section class="tf-section flat-services">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section2 center" data-aos="fade-up" data-aos-duration="800">
                                <h6 class="">Services We Provide</h6>
                                <h2 class="">Outsmart the competition with best-in-class 
                                    SEO marketing services</h2>                         
                            </div>  
                            <div class="swiper-container carousel-1 pagi">                            
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="box box-1">
                                            <div class="icon">
                                                <img src="assets/images/icon/service-1.png" alt="">
                                            </div>
                                            <div class="content">
                                                <h4 class="link-style-4"><a href="service-details.html">  Best Quality SEO</a></h4>
                                                <p class="lh-27 text-color-7">Sit amet consect adipiscin morbi donec sed vitae aliqua nunc neque eleifend feu</p>
                                                <div class="meta">
                                                    <a href="service-details.html" class="btn-button flex-three fw-5"><span>Read More </span> 
                                                    <svg width="31" height="9" viewBox="0 0 31 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M30.3536 4.85355C30.5488 4.65829 30.5488 4.34171 30.3536 4.14645L27.1716 0.964466C26.9763 0.769204 26.6597 0.769204 26.4645 0.964466C26.2692 1.15973 26.2692 1.47631 26.4645 1.67157L29.2929 4.5L26.4645 7.32843C26.2692 7.52369 26.2692 7.84027 26.4645 8.03553C26.6597 8.2308 26.9763 8.2308 27.1716 8.03553L30.3536 4.85355ZM0 5H30V4H0V5Z" fill="#120A21"/>
                                                    </svg>  </a>                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-down" data-aos-duration="1200">
                                        <div class="box box-2">
                                            <div class="icon">
                                                <img src="assets/images/icon/service-2.png" alt="">
                                            </div>
                                            <div class="content">
                                                <h4 class="link-style-4"><a href="service-details.html">  Email Marketing</a> </h4>
                                                <p class="lh-27 text-color-7">Sit amet consect adipiscin morbi donec sed vitae aliqua nunc neque eleifend feu</p>
                                                <div class="meta">
                                                    <a href="service-details.html" class="btn-button flex-three fw-5"><span>Read More </span> 
                                                    <svg width="31" height="9" viewBox="0 0 31 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M30.3536 4.85355C30.5488 4.65829 30.5488 4.34171 30.3536 4.14645L27.1716 0.964466C26.9763 0.769204 26.6597 0.769204 26.4645 0.964466C26.2692 1.15973 26.2692 1.47631 26.4645 1.67157L29.2929 4.5L26.4645 7.32843C26.2692 7.52369 26.2692 7.84027 26.4645 8.03553C26.6597 8.2308 26.9763 8.2308 27.1716 8.03553L30.3536 4.85355ZM0 5H30V4H0V5Z" fill="#120A21"/>
                                                    </svg>  </a>                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="box box-3">
                                            <div class="icon">
                                                <img src="assets/images/icon/service-3.png" alt="">
                                            </div>
                                            <div class="content">
                                                <h4 class="link-style-4"><a href="service-details.html">  Content Marketing</a></h4>
                                                <p class="lh-27 text-color-7">Sit amet consect adipiscin morbi donec sed vitae aliqua nunc neque eleifend feu</p>
                                                <div class="meta">
                                                    <a href="service-details.html" class="btn-button flex-three fw-5"><span>Read More </span> 
                                                    <svg width="31" height="9" viewBox="0 0 31 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M30.3536 4.85355C30.5488 4.65829 30.5488 4.34171 30.3536 4.14645L27.1716 0.964466C26.9763 0.769204 26.6597 0.769204 26.4645 0.964466C26.2692 1.15973 26.2692 1.47631 26.4645 1.67157L29.2929 4.5L26.4645 7.32843C26.2692 7.52369 26.2692 7.84027 26.4645 8.03553C26.6597 8.2308 26.9763 8.2308 27.1716 8.03553L30.3536 4.85355ZM0 5H30V4H0V5Z" fill="#120A21"/>
                                                    </svg>  </a>                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-down" data-aos-duration="1200">
                                        <div class="box box-4">
                                            <div class="icon">
                                                <img src="assets/images/icon/service-4.png" alt="">
                                            </div>
                                            <div class="content">
                                                <h4 class="link-style-4"><a href="service-details.html">  Business Analytics </a></h4>
                                                <p class="lh-27 text-color-7">Sit amet consect adipiscin morbi donec sed vitae aliqua nunc neque eleifend feu</p>
                                                <div class="meta">
                                                    <a href="service-details.html" class="btn-button flex-three fw-5"><span>Read More </span> 
                                                    <svg width="31" height="9" viewBox="0 0 31 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M30.3536 4.85355C30.5488 4.65829 30.5488 4.34171 30.3536 4.14645L27.1716 0.964466C26.9763 0.769204 26.6597 0.769204 26.4645 0.964466C26.2692 1.15973 26.2692 1.47631 26.4645 1.67157L29.2929 4.5L26.4645 7.32843C26.2692 7.52369 26.2692 7.84027 26.4645 8.03553C26.6597 8.2308 26.9763 8.2308 27.1716 8.03553L30.3536 4.85355ZM0 5H30V4H0V5Z" fill="#120A21"/>
                                                    </svg>  </a>                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="box box-1">
                                            <div class="icon">
                                                <img src="assets/images/icon/service-1.png" alt="">
                                            </div>
                                            <div class="content">
                                                <h4 class="link-style-4"><a href="service-details.html">  Best Quality SEO</a></h4>
                                                <p class="lh-27 text-color-7">Sit amet consect adipiscin morbi donec sed vitae aliqua nunc neque eleifend feu</p>
                                                <div class="meta">
                                                    <a href="service-details.html" class="btn-button flex-three fw-5"><span>Read More </span> 
                                                    <svg width="31" height="9" viewBox="0 0 31 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M30.3536 4.85355C30.5488 4.65829 30.5488 4.34171 30.3536 4.14645L27.1716 0.964466C26.9763 0.769204 26.6597 0.769204 26.4645 0.964466C26.2692 1.15973 26.2692 1.47631 26.4645 1.67157L29.2929 4.5L26.4645 7.32843C26.2692 7.52369 26.2692 7.84027 26.4645 8.03553C26.6597 8.2308 26.9763 8.2308 27.1716 8.03553L30.3536 4.85355ZM0 5H30V4H0V5Z" fill="#120A21"/>
                                                    </svg>  </a>                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-down" data-aos-duration="1200">
                                        <div class="box box-2">
                                            <div class="icon">
                                                <img src="assets/images/icon/service-2.png" alt="">
                                            </div>
                                            <div class="content">
                                                <h4 class="link-style-4"><a href="service-details.html">  Email Marketing</a></h4>
                                                <p class="lh-27 text-color-7">Sit amet consect adipiscin morbi donec sed vitae aliqua nunc neque eleifend feu</p>
                                                <div class="meta">
                                                    <a href="service-details.html" class="btn-button flex-three fw-5"><span>Read More </span> 
                                                    <svg width="31" height="9" viewBox="0 0 31 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M30.3536 4.85355C30.5488 4.65829 30.5488 4.34171 30.3536 4.14645L27.1716 0.964466C26.9763 0.769204 26.6597 0.769204 26.4645 0.964466C26.2692 1.15973 26.2692 1.47631 26.4645 1.67157L29.2929 4.5L26.4645 7.32843C26.2692 7.52369 26.2692 7.84027 26.4645 8.03553C26.6597 8.2308 26.9763 8.2308 27.1716 8.03553L30.3536 4.85355ZM0 5H30V4H0V5Z" fill="#120A21"/>
                                                    </svg>  </a>                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="box box-3">
                                            <div class="icon">
                                                <img src="assets/images/icon/service-3.png" alt="">
                                            </div>
                                            <div class="content">
                                                <h4 class="link-style-4"><a href="service-details.html"> Content Marketing</a></h4>
                                                <p class="lh-27 text-color-7">Sit amet consect adipiscin morbi donec sed vitae aliqua nunc neque eleifend feu</p>
                                                <div class="meta">
                                                    <a href="service-details.html" class="btn-button flex-three fw-5"><span>Read More </span> 
                                                    <svg width="31" height="9" viewBox="0 0 31 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M30.3536 4.85355C30.5488 4.65829 30.5488 4.34171 30.3536 4.14645L27.1716 0.964466C26.9763 0.769204 26.6597 0.769204 26.4645 0.964466C26.2692 1.15973 26.2692 1.47631 26.4645 1.67157L29.2929 4.5L26.4645 7.32843C26.2692 7.52369 26.2692 7.84027 26.4645 8.03553C26.6597 8.2308 26.9763 8.2308 27.1716 8.03553L30.3536 4.85355ZM0 5H30V4H0V5Z" fill="#120A21"/>
                                                    </svg>  </a>                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination">  </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="flat-process">
                <div class="container-fuild">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrap-process flex">
                                <div class="box-process">
                                    <div class="heading-section2 ">
                                        <h6 class="">Working Process</h6>
                                        <h2 class="">Foundations of SEO to Complate Our Business Missions</h2>                         
                                    </div>  
                                    <div class="diagram-box flex">
                                        <div class="diagram one center" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="icon">
                                                <img src="assets/images/icon/process-1.png" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="sub-title title-14 fw-5">SETP 01</div>
                                                <h6>Perform a Complete SEO and Content Audit</h6>
                                                <p class="text-color-7">Sit amet consect adipiscing 
                                                    nec tortor nec aenean</p>
                                            </div>
                                        </div>
                                        <div class="diagram two center" data-aos="fade-up" data-aos-duration="1400">
                                            <div class="icon">
                                                <img src="assets/images/icon/process-2.png" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="sub-title title-14 fw-5">SETP 02</div>
                                                <h6>Identify Keywords to Optimize</h6>
                                                <p class="text-color-7">Sit amet consect adipiscing 
                                                    nec tortor nec aenean</p>
                                            </div>
                                        </div>
                                        <div class="diagram three center" data-aos="fade-up" data-aos-duration="1200">
                                            <div class="icon">
                                                <img src="assets/images/icon/process-3.png" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="sub-title title-14 fw-5">SETP 03</div>
                                                <h6>Install analytics and Set Key Performance</h6>
                                                <p class="text-color-7">Sit amet consect adipiscing 
                                                    nec tortor nec aenean</p>
                                            </div>
                                        </div>
                                        <div class="mark-diagram absolute">
                                            <img src="assets/images/mark/mark-process.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="box-client">                                   
                                    <h6 class="text-color-7 fw-4">Saticfied Clients</h6>
                                    <h3>We Have Thousands Of Global Clients</h3>
                                    <ul class="flex">
                                        <li class="user"> <img src="assets/images/img-box/client-1.jpg" alt=""></li>
                                        <li class="user"> <img src="assets/images/img-box/client-2.jpg" alt=""></li>
                                        <li class="user"> <img src="assets/images/img-box/client-3.jpg" alt=""></li>
                                        <li class="user"> <img src="assets/images/img-box/client-4.jpg" alt=""></li>
                                        <li class="user"> <img src="assets/images/img-box/client-5.jpg" alt=""></li>
                                        <li class="user"> <img src="assets/images/img-box/client-6.jpg" alt=""></li>
                                        <li class="user"> <img src="assets/images/img-box/client-7.jpg" alt=""></li>
                                        <li class="user"> <img src="assets/images/img-box/client-8.jpg" alt=""></li>
                                        <li class="user style"> <i class="far fa-plus"></i> </li>
                                    </ul>
                                    <div class="images"> <img src="assets/images/img-box/process.jpg" alt=""></div>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="flat-growing">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrap-growing flex">
                                <div class="box-images">
                                    <div class="images" data-aos="fade-right" data-aos-duration="1200">
                                        <img class="animate-ne" src="assets/images/img-box/growing-1.png" alt="">
                                    </div>                              
                                </div>
                                <div class="box-growing">
                                    <div class="heading-section2" data-aos="fade-left" data-aos-duration="1000">
                                        <h6 class="">Learn About Growing</h6>
                                        <h2 class="">Get a Digital Marketing Plan that Drives Revenue.</h2>        
                                        <p class="text-color-7">Drive more leads, sales, and revenue for your business with digital marketing services from WebFX, 
                                            a full-service digital marketing agency that’s helped small-to-midsized businesses generate more 
                                            than $3 billion in revenue from strategies like SEO, PPC, web design, and more.</p>    
                                        <div class="sc-btn-button">
                                            <a class="cta btn-3" href="about.html">
                                                <span>Learn More</span>
                                                <span>
                                                    <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g  stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                                        <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                                        <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                                                    </g>
                                                    </svg>
                                                </span> 
                                            </a>
                                        </div>               
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>                        
           
            <section class="tf-section flat-projects">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section2 center" data-aos="fade-up" data-aos-duration="1200">
                                <h6 class="">Recent Projects</h6>
                                <h2 class="">We’ve Done <span class="text-color-8">2560+</span> Global Projects <br>
                                    Take a Looks Work Gallery</h2>  
                            </div>
                            <div class="swiper-container carousel-2 pagi2">                            
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-aos="fade-down" data-aos-duration="1200">
                                        <div class="box hv-one">                                         
                                            <div class="image-box">
                                                <div class="images hover-one">
                                                    <a href="portfolio-details.html"><img src="assets/images/img-box/projects-1.jpg" alt=""></a>
                                                </div>
                                                <div class="content center">
                                                    <h3 class="text-color-1"><a href="portfolio-details.html">SEO Optimizations</a> </h3> 
                                                    <p class="text-color-1">Co-Working Meeting</p>
                                                    <div class="meta">
                                                        <a href="portfolio-details.html" class="btn-button flex-three fw-5"><span>Read More</span> 
                                                        <svg width="31" height="9" viewBox="0 0 31 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M30.3536 4.85355C30.5488 4.65829 30.5488 4.34171 30.3536 4.14645L27.1716 0.964466C26.9763 0.769204 26.6597 0.769204 26.4645 0.964466C26.2692 1.15973 26.2692 1.47631 26.4645 1.67157L29.2929 4.5L26.4645 7.32843C26.2692 7.52369 26.2692 7.84027 26.4645 8.03553C26.6597 8.2308 26.9763 8.2308 27.1716 8.03553L30.3536 4.85355ZM0 5H30V4H0V5Z" fill="#120A21"/>
                                                        </svg>  </a>                            
                                                    </div>                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="box style hv-one">
                                            <div class="image-box">
                                                <div class="images hover-one">
                                                    <a href="portfolio-details.html"><img   src="assets/images/img-box/projects-2.jpg" alt=""></a>
                                                </div>
                                                <div class="content center">
                                                    <h3 class="text-color-1"><a href="portfolio-details.html">Business Analytics</a> </h3> 
                                                    <p class="text-color-1">Co-Working Meeting</p>  
                                                    <div class="meta">
                                                        <a href="portfolio-details.html" class="btn-button flex-three fw-5"><span>Read More</span> 
                                                        <svg width="31" height="9" viewBox="0 0 31 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M30.3536 4.85355C30.5488 4.65829 30.5488 4.34171 30.3536 4.14645L27.1716 0.964466C26.9763 0.769204 26.6597 0.769204 26.4645 0.964466C26.2692 1.15973 26.2692 1.47631 26.4645 1.67157L29.2929 4.5L26.4645 7.32843C26.2692 7.52369 26.2692 7.84027 26.4645 8.03553C26.6597 8.2308 26.9763 8.2308 27.1716 8.03553L30.3536 4.85355ZM0 5H30V4H0V5Z" fill="#120A21"/>
                                                        </svg>  </a>                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-down" data-aos-duration="1200">
                                        <div class="box box-1 hv-one">
                                            <div class="image-box">
                                                <div class="images hover-one">
                                                    <a href="portfolio-details.html"><img  src="assets/images/img-box/projects-3.jpg" alt=""></a>
                                                </div>
                                                <div class="content center">
                                                    <h3 class="text-color-1"><a href="portfolio-details.html">Office Management</a> </h3> 
                                                    <p class="text-color-1">Business Development</p> 
                                                    <div class="meta">
                                                        <a href="portfolio-details.html" class="btn-button flex-three fw-5"><span>Read More</span> 
                                                        <svg width="31" height="9" viewBox="0 0 31 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M30.3536 4.85355C30.5488 4.65829 30.5488 4.34171 30.3536 4.14645L27.1716 0.964466C26.9763 0.769204 26.6597 0.769204 26.4645 0.964466C26.2692 1.15973 26.2692 1.47631 26.4645 1.67157L29.2929 4.5L26.4645 7.32843C26.2692 7.52369 26.2692 7.84027 26.4645 8.03553C26.6597 8.2308 26.9763 8.2308 27.1716 8.03553L30.3536 4.85355ZM0 5H30V4H0V5Z" fill="#120A21"/>
                                                        </svg>  </a>                            
                                                    </div>                                           
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="box box-1 hv-one">
                                            <div class="image-box">
                                                <div class="images hover-one">
                                                    <a href="portfolio-details.html"><img src="assets/images/img-box/projects-2.jpg" alt=""></a>
                                                </div>
                                                <div class="content center">
                                                    <h3 class="text-color-1"><a href="portfolio-details.html">Office Management</a> </h3> 
                                                    <p class="text-color-1">Co-Working Meeting</p>  
                                                    <div class="meta">
                                                        <a href="portfolio-details.html" class="btn-button flex-three fw-5"><span>Read More</span> 
                                                        <svg width="31" height="9" viewBox="0 0 31 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M30.3536 4.85355C30.5488 4.65829 30.5488 4.34171 30.3536 4.14645L27.1716 0.964466C26.9763 0.769204 26.6597 0.769204 26.4645 0.964466C26.2692 1.15973 26.2692 1.47631 26.4645 1.67157L29.2929 4.5L26.4645 7.32843C26.2692 7.52369 26.2692 7.84027 26.4645 8.03553C26.6597 8.2308 26.9763 8.2308 27.1716 8.03553L30.3536 4.85355ZM0 5H30V4H0V5Z" fill="#120A21"/>
                                                        </svg>  </a>                            
                                                    </div>                                          
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                                <div class="swiper-pagination2 center">  </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>   

            <section class="tf-section flat-partners">
                <div class="container-fuild">
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="wrap-partners flex ">
                                <div class="box-partners">
                                    <div class="heading-section2" data-aos="fade-up" data-aos-duration="1200">
                                        <h6 class="">Global Partners</h6>
                                        <h2 class="">We’ve <span class="text-color-8">5362+</span> Global Clients
                                            Meet With Our Clients</h2>
                                        <p>Drive more leads, sales, and revenue for your business with digital marketing services from WebFX 
                                            full-service digital marketing agency that’s helped small-to-midsized businesses generate</p> 
                                        <div class="button-btns">
                                            <a class="cta btn-3 btn-4" href="about.html">
                                                <span>Become a Partners</span>
                                                <span>
                                                    <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g  stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                                        <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                                        <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                                                    </g>
                                                    </svg>
                                                </span>  
                                            </a> 
                                        </div>
                                        
                                        <div class="themes-count tf-counter flex">
                                            <div class="counter-box one flex">
                                                <div class="icon">
                                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M30 2.78576C30 1.83244 29.5233 1.2366 29.1658 0.87912C28.6891 0.283222 27.8549 0.0449219 27.0208 0.0449219H9.02676C8.43092 0.0449219 6.64346 0.283281 6.64346 3.02412V6.71821C6.64346 6.83739 6.64346 6.95657 6.64346 7.07575C6.64346 7.43329 6.52428 8.02907 7.001 8.50573C7.47766 8.98239 8.19268 8.98239 8.5501 8.98239H13.6742L0.804374 22.2097C-0.268124 23.2822 -0.268124 25.308 0.804374 26.3805L3.42603 29.1213C4.02187 29.7172 4.73683 29.9555 5.57102 29.9555C6.40522 29.9555 7.12018 29.598 7.71602 29.1213L20.9434 16.2515V20.8989C20.9434 23.0439 22.4925 23.4014 23.3267 23.4014H27.14C29.7616 23.4014 29.9999 21.7331 29.9999 21.0181L30 2.78576ZM27.6168 21.018C27.4975 21.018 27.3783 21.018 27.14 21.018H23.3268V20.8989V13.3914C23.3268 12.9148 23.0884 12.4381 22.6118 12.319C22.1351 12.0806 21.6584 12.1998 21.3009 12.5574L6.04768 27.4531C5.9285 27.5723 5.21354 27.5723 5.09437 27.4531L2.47271 24.7123C2.23435 24.474 2.23435 23.9973 2.47271 23.8781L17.2493 8.74414C17.6067 8.38661 17.7259 7.90995 17.4876 7.43329C17.3684 6.95663 16.8918 6.71827 16.4152 6.71827H9.02682V3.02406C9.02682 2.7857 9.02682 2.5474 9.02682 2.42822H27.0209C27.14 2.42822 27.3783 2.42822 27.4975 2.66658C27.6167 2.7857 27.6167 2.90494 27.6167 2.90494V21.018H27.6168Z" fill="#F43FE2"/>
                                                    </svg>
                                                </div>
                                                <div class="content" >
                                                    <div class="count-number ">                                  
                                                        <div class="number number-style number-one" data-speed="2000" data-to="58" data-inviewport="yes"></div>                                   
                                                    </div>
                                                    <div class="title-count fw-5 font-2 fs-16">Saticfied Clients</div>
                                                </div>                                
                                            </div>
                                            <div class="counter-box flex">
                                                <div class="icon">
                                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M30 2.78576C30 1.83244 29.5233 1.2366 29.1658 0.87912C28.6891 0.283222 27.8549 0.0449219 27.0208 0.0449219H9.02676C8.43092 0.0449219 6.64346 0.283281 6.64346 3.02412V6.71821C6.64346 6.83739 6.64346 6.95657 6.64346 7.07575C6.64346 7.43329 6.52428 8.02907 7.001 8.50573C7.47766 8.98239 8.19268 8.98239 8.5501 8.98239H13.6742L0.804374 22.2097C-0.268124 23.2822 -0.268124 25.308 0.804374 26.3805L3.42603 29.1213C4.02187 29.7172 4.73683 29.9555 5.57102 29.9555C6.40522 29.9555 7.12018 29.598 7.71602 29.1213L20.9434 16.2515V20.8989C20.9434 23.0439 22.4925 23.4014 23.3267 23.4014H27.14C29.7616 23.4014 29.9999 21.7331 29.9999 21.0181L30 2.78576ZM27.6168 21.018C27.4975 21.018 27.3783 21.018 27.14 21.018H23.3268V20.8989V13.3914C23.3268 12.9148 23.0884 12.4381 22.6118 12.319C22.1351 12.0806 21.6584 12.1998 21.3009 12.5574L6.04768 27.4531C5.9285 27.5723 5.21354 27.5723 5.09437 27.4531L2.47271 24.7123C2.23435 24.474 2.23435 23.9973 2.47271 23.8781L17.2493 8.74414C17.6067 8.38661 17.7259 7.90995 17.4876 7.43329C17.3684 6.95663 16.8918 6.71827 16.4152 6.71827H9.02682V3.02406C9.02682 2.7857 9.02682 2.5474 9.02682 2.42822H27.0209C27.14 2.42822 27.3783 2.42822 27.4975 2.66658C27.6167 2.7857 27.6167 2.90494 27.6167 2.90494V21.018H27.6168Z" fill="#F43FE2"/>
                                                    </svg>
                                                </div>
                                                <div class="content" >
                                                    <div class="count-number "> 
                                                        <div class="number number-style number-one" data-speed="2000" data-to="83" data-inviewport="yes"></div>                                                      
                                                    </div>
                                                    <div class="title-count fw-5 font-2 fs-16">Project Complate</div>
                                                </div>                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-images ">
                                    <div class="inner inner-1 flex" data-aos="fade-up" data-aos-duration="1100">
                                        <div class="image style"> <a href="#"><img src="assets/images/img-box/partners-1.png" alt=""></a> </div>
                                        <div class="image"> <a href="#"> <img src="assets/images/img-box/partners-2.png" alt=""> </a></div>
                                    </div>
                                    <div class="inner inner-2 flex" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="image"><a href="#">  <img src="assets/images/img-box/partners-3.png" alt=""></a></div>
                                        <div class="image"><a href="#">  <img src="assets/images/img-box/partners-4.png" alt=""></a></div>
                                    </div>
                                    <div class="inner inner-1 flex" data-aos="fade-up" data-aos-duration="1300">
                                        <div class="image"><a href="#">  <img src="assets/images/img-box/partners-5.png" alt=""></a></div>
                                        <div class="image"><a href="#">  <img src="assets/images/img-box/partners-6.png" alt=""></a></div>
                                    </div>
                                    <div class="inner inner-3 flex" data-aos="fade-up" data-aos-duration="1400">
                                        <div class="image style2"><a href="#">  <img src="assets/images/img-box/partners-7.png" alt=""></a></div>
                                        <div class="image"><a href="#">  <img src="assets/images/img-box/partners-8.png" alt=""></a></div>
                                    </div>
                                </div>                             
                            </div>
                        </div>
                    </div>
                </div>
            </section>   

            
            <section class="flat-analytics">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrap-analytics flex">
                                <div class="box-images">
                                    <div class="images" data-aos="fade-right" data-aos-duration="1200">
                                        <img class="animate-new" src="assets/images/img-box/analytics.png" alt="">
                                    </div>     
                                   
                                    <div class="mark-img absolute">
                                        <img src="assets/images/mark/mark-1.png" alt="">
                                    </div>                              
                                                            
                                </div>
                                <div class="box-analytics" data-aos="fade-left" data-aos-duration="1200">
                                    <div class="heading-section2 ">
                                        <h6 class="">Business Analytics</h6>
                                        <h2 class="">Helping Clients Realize Higher ROI through SEO Service</h2>        
                                        <p class="">Drive more leads, sales, and revenue for your business with digital marketing services from WebFX 
                                            full-service digital marketing agency that’s helped small-to-midsized businesses generate</p>         
                                    </div>  
                                    <ul class="check">
                                        <li><h6 class="flex-three">Professional SEO Optimizations</h6></li>
                                        <li><h6 class="flex-three">Experience Team Members & Lot’s Of Customers</h6></li>
                                        <li><h6 class="flex-three">DIgital Business & SEO Solutions</h6></li>
                                    </ul> 
                                    <div class="sc-btn-button">
                                        <a class="cta btn-3 btn-4" href="services.html">
                                            <span>Learn More</span>
                                            <span>
                                                <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g  stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                                    <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                                    <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                                                </g>
                                                </svg>
                                            </span> 
                                        </a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>         
   

            <section class="flat-testimonials">
                <div class="container-fuild">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrap-testi flex">
                                <div class="box-testi">
                                    <div class="heading-section2 " data-aos="fade-up" data-aos-duration="1200">
                                        <h6 class="">Our Testimonials</h6>
                                        <h2 class="">What Our Clients Say About Solutions</h2>             
                                    </div>  
                                    <div class="swiper-container carousel-3 pagi2">                            
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="box-inner ">  
                                                    <div class="inner inner-bottom">
                                                        <h6 class="lh-27 fw-5"> Sit amet consectetur adipiscing estibulum vitae auctor 
                                                            orci odio. Fusce hendrerit orci ullamcorper enim, cursus. Netus ut nulla venenatis vel imperdiet nunc</h6>
                                                       <p class="lh-26">Diam augue quis sed cras placerat blandit quisque vivamus. Fames massa odio habitant nisl commodo eu nunc </p>
                                                    </div>
                                                    <div class="author-box flex-three">
                                                        <div class="image">
                                                            <img src="assets/images/img-box/testimonials.jpg" alt="">
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="fw-5">Somalia D. Silva</h4>
                                                            <p class="text-color-7 fw-5">CEO & Founder</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box-inner ">  
                                                    <div class="inner inner-bottom">
                                                        <h6 class="lh-27 fw-5"> Sit amet consectetur adipiscing estibulum vitae auctor 
                                                            orci odio. Fusce hendrerit orci ullamcorper enim, cursus. Netus ut nulla venenatis vel imperdiet nunc</h6>
                                                       <p class="lh-26">Diam augue quis sed cras placerat blandit quisque vivamus. Fames massa odio habitant nisl commodo eu nunc </p>
                                                    </div>
                                                    <div class="author-box flex-three">
                                                        <div class="image">
                                                            <img src="assets/images/img-box/testimonials.jpg" alt="">
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="fw-5">Somalia D. Silva</h4>
                                                            <p class="text-color-7 fw-5">CEO & Founder</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box-inner ">  
                                                    <div class="inner inner-bottom">
                                                        <h6 class="lh-27 fw-5"> Sit amet consectetur adipiscing estibulum vitae auctor 
                                                            orci odio. Fusce hendrerit orci ullamcorper enim, cursus. Netus ut nulla venenatis vel imperdiet nunc</h6>
                                                       <p class="lh-26">Diam augue quis sed cras placerat blandit quisque vivamus. Fames massa odio habitant nisl commodo eu nunc </p>
                                                    </div>
                                                    <div class="author-box flex-three">
                                                        <div class="image">
                                                            <img src="assets/images/img-box/testimonials.jpg" alt="">
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="fw-5">Somalia D. Silva</h4>
                                                            <p class="text-color-7 fw-5">CEO & Founder</p>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box-inner ">  
                                                    <div class="inner inner-bottom">
                                                        <h6 class="lh-27 fw-5"> Sit amet consectetur adipiscing estibulum vitae auctor 
                                                            orci odio. Fusce hendrerit orci ullamcorper enim, cursus. Netus ut nulla venenatis vel imperdiet nunc</h6>
                                                       <p class="lh-26">Diam augue quis sed cras placerat blandit quisque vivamus. Fames massa odio habitant nisl commodo eu nunc </p>
                                                    </div>
                                                    <div class="author-box flex-three">
                                                        <div class="image">
                                                            <img src="assets/images/img-box/testimonials.jpg" alt="">
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="fw-5">Somalia D. Silva</h4>
                                                            <p class="text-color-7 fw-5">CEO & Founder</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination2 center">  </div> 
                                    </div>
                                </div>
                                <div class="box-images">
                                    <div class="inner flex" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="images style">
                                            <img src="assets/images/img-box/testimonials-1.png" alt="">
                                        </div> 
                                        <div class="images ">
                                            <img src="assets/images/img-box/testimonials-2.png" alt="">
                                        </div> 
                                        <div class="images style">
                                            <img src="assets/images/img-box/testimonials-3.png" alt="">
                                        </div> 
                                    </div>
                                    <div class="inner flex" data-aos="fade-up" data-aos-duration="1300">
                                        <div class="images style">
                                            <img src="assets/images/img-box/testimonials-4.png" alt="">
                                        </div> 
                                        <div class="images ">
                                            <img src="assets/images/img-box/testimonials-5.png" alt="">
                                        </div> 
                                        <div class="images style">
                                            <img src="assets/images/img-box/testimonials-6.png" alt="">
                                        </div> 
                                    </div>  
                                    <div class="image2" data-aos="zoom-in" data-aos-duration="1400">
                                        <img src="assets/images/img-box/testimonials-7.png" alt="">
                                    </div> 
                                </div>                       
                            </div>
                        </div>
                    </div>
                </div>
            </section> 

            <section class="tf-section flat-news"> 
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section2 center" data-aos="fade-up" data-aos-duration="1200">
                                <h6 class="">News & Blogs</h6>
                                <h2 class="">Get Every Single Updates Articles Recent News & Blogs</h2>             
                            </div>  
                        </div>
                        <div class="col-lg-12">
                            <div class="swiper-container carousel-6">                            
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="box hover-img">
                                            <div class="images img-style">
                                                <a href="blog-details.html"><img src="assets/images/img-box/blog-1.jpg" alt=""></a>
                                            </div>
                                            <div class="content">
                                                <p class="days p-14">September 25, 2022</p>
                                                <h3 class="link-style-4"><a href="blog-details.html">Ultimate Free Solo Blog Setup With Ghost And Gatsby</a></h3>
                                                <div class="meta">
                                                    <a href="blog-details.html" class="btn-button flex-three fw-5"><span>Read More </span> 
                                                    <svg width="31" height="9" viewBox="0 0 31 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M30.3536 4.85355C30.5488 4.65829 30.5488 4.34171 30.3536 4.14645L27.1716 0.964466C26.9763 0.769204 26.6597 0.769204 26.4645 0.964466C26.2692 1.15973 26.2692 1.47631 26.4645 1.67157L29.2929 4.5L26.4645 7.32843C26.2692 7.52369 26.2692 7.84027 26.4645 8.03553C26.6597 8.2308 26.9763 8.2308 27.1716 8.03553L30.3536 4.85355ZM0 5H30V4H0V5Z" fill="#120A21"/>
                                                    </svg>  </a>                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="box hover-img">
                                            <div class="images img-style">
                                                <a href="blog-details.html"><img src="assets/images/img-box/blog-2.jpg" alt=""></a>
                                            </div>
                                           <div class="content">
                                                <p class="days p-14">September 25, 2022</p>
                                                <h3 class="link-style-4"><a href="blog-details.html">Rethinking Server-Timing As Seen Critical Monitoring Tool</a> </h3>
                                                <div class="meta">
                                                    <a href="blog-details.html" class="btn-button flex-three fw-5"><span>Read More </span> 
                                                    <svg width="31" height="9" viewBox="0 0 31 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M30.3536 4.85355C30.5488 4.65829 30.5488 4.34171 30.3536 4.14645L27.1716 0.964466C26.9763 0.769204 26.6597 0.769204 26.4645 0.964466C26.2692 1.15973 26.2692 1.47631 26.4645 1.67157L29.2929 4.5L26.4645 7.32843C26.2692 7.52369 26.2692 7.84027 26.4645 8.03553C26.6597 8.2308 26.9763 8.2308 27.1716 8.03553L30.3536 4.85355ZM0 5H30V4H0V5Z" fill="#120A21"/>
                                                    </svg>  </a>                            
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-up" data-aos-duration="1400">
                                        <div class="box hover-img">
                                            <div class="images img-style">
                                                <a href="blog-details.html"><img src="assets/images/img-box/blog-3.jpg" alt=""></a>
                                            </div>
                                           <div class="content">
                                                <p class="days p-14">September 25, 2022</p>
                                                <h3 class="link-style-4"><a href="blog-details.html">Top Tasks Focus On What Matters Must Focus On What Doesn’t</a> </h3>
                                                <div class="meta">
                                                    <a href="blog-details.html" class="btn-button flex-three fw-5"><span>Read More </span> 
                                                    <svg width="31" height="9" viewBox="0 0 31 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M30.3536 4.85355C30.5488 4.65829 30.5488 4.34171 30.3536 4.14645L27.1716 0.964466C26.9763 0.769204 26.6597 0.769204 26.4645 0.964466C26.2692 1.15973 26.2692 1.47631 26.4645 1.67157L29.2929 4.5L26.4645 7.32843C26.2692 7.52369 26.2692 7.84027 26.4645 8.03553C26.6597 8.2308 26.9763 8.2308 27.1716 8.03553L30.3536 4.85355ZM0 5H30V4H0V5Z" fill="#120A21"/>
                                                    </svg>  </a>                            
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           
                        

             <!-- flat help -->
             <section class="flat-subscribe home">
                <div class="container">
                    <div class="row">                  
                        <div class="col-lg-6 col-md-12">                       
                            <div class="heading-section2" data-aos="fade-up" data-aos-duration="1000">
                                <h6 class="">Our Newsletters</h6>
                                <h2 class="">Get Every Single Updates Newsletter Subscribe</h2>
                                
                            </div>                                               
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="wrap-subscribe">
                                <div class="widget-subcribe">
                                    <div class="form-subcribe" data-aos="zoom-in" data-aos-duration="1200">
                                        <form id="subscribe-form" action="#" method="GET" accept-charset="utf-8" class="form-submit flex">
                                            <input name="email" value="" class="email" type="email" placeholder="Enter Email Address" required>
                                            <i class="far fa-comment-alt-dots"></i>
                                            <button id="submit" name="submit" type="submit" class="cta btn-1"> 
                                                <span>Sign Up</span>
                                                <span>
                                                    <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g  stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                                        <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                                        <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                                                    </g>
                                                    </svg>
                                                </span> 
                                            </button>
                                        </form>
                                    </div>
                                </div> 
                                <div class="icon-title flex-three">     
                                    <p class="text-color-2">Get Every 7 Days Updates or Monthly updates</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			<?php $this->load->view('footer'); ?>
           
           
        <!-- Bottom -->
        </div>
        <!-- /#page -->

    </div>
    <!-- /#wrapper -->

    <a id="scroll-top" class="button-go"></a>

    <?php $this->load->view('js'); ?>

</body>

</html>

