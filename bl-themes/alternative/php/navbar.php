<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GC</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet" />
    <link rel="stylesheet" href="lib/fonts/icomoon/style.css" />

    <link rel="stylesheet" href="lib/css/bootstrap.min.css" />
    <link rel="stylesheet" href="lib/css/magnific-popup.css" />
    <link rel="stylesheet" href="lib/css/jquery-ui.css" />
    <link rel="stylesheet" href="lib/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="lib/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="lib/css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="lib/css/animate.css" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css" />
        
    <link rel="stylesheet" href="lib/fonts/flaticon/font/flaticon.css" />
  
    <link rel="stylesheet" href="lib/css/aos.css" />

    <link rel="stylesheet" href="lib/css/style.css" />
    
  </head>
 <body>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
  <link rel="stylesheet" href="lib/css/mainstyle.css" />
  <script src="lib/js/jquery-3.3.1.min.js"></script>

  <?php /*<nav class="navbar navbar-expand-md navbar-dark bg-dark text-uppercase">
  <div class="container">
    <a class="navbar-brand" href="<?php echo Theme::siteUrl(); ?>">
      <span class="text-white"><?php echo $site->title(); ?></span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">

      <ul class="navbar-nav ml-auto">

        <!-- Static pages -->
        <?php foreach ($staticContent as $staticPage): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a>
        </li>
        <?php endforeach ?>

        <!-- Social Networks -->
        <?php foreach (Theme::socialNetworks() as $key=>$label): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $site->{$key}(); ?>" target="_blank">
            <img class="d-none d-sm-block nav-svg-icon" src="<?php echo DOMAIN_THEME.'img/'.$key.'.svg' ?>" alt="<?php echo $label ?>" />
            <span class="d-inline d-sm-none"><?php echo $label; ?></span>
          </a>
        </li>
        <?php endforeach; ?>

        <!-- RSS -->
        <?php if (Theme::rssUrl()): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo Theme::rssUrl() ?>" target="_blank">
            <img class="d-none d-sm-block nav-svg-icon text-primary" src="<?php echo DOMAIN_THEME.'img/rss.svg' ?>" alt="RSS" />
            <span class="d-inline d-sm-none">RSS</span>
          </a>
        </li>
        <?php endif; ?>

      </ul>

    </div>
  </div>
</nav>
*/ ?>

  <div class="site-wrap">

 <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
   <div class="site-navbar-wrap js-site-navbar bg-white">
      
<div class="container-fluid" style="background-color: #565853;">
      <div class="row col-md-12">
       <ul class="ml-auto topbar socialicons" style="color: white; margin-bottom: 0.2em;margin-top: 0.4em;">
          <a style="" href="https://www.facebook.com/groups/429971720508946/" class="pb-2 pr-2 pl-0" ><span class="icon-facebook" style="font-size: 20px; margin-left: 15px;"></span></a>
          <a style="margin-right:0.7em;" href="https://www.instagram.com/godsconsciousness_gc" class="p-2" target="_blank"><span class="icon-instagram" style="font-size: 20px; margin-left: -6px;"></span></a>
          <a style="" href="https://www.youtube.com/channel/UCKeVsVRweYnZFBEZUSsE47A" class="">
<!--          <svg style="fill:#fff;margin-top: -9px;-->
<!--margin-left: -12px;" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M10 9.333l5.333 2.662-5.333 2.672v-5.334zm14-4.333v14c0 2.761-2.238 5-5 5h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5zm-4 7c-.02-4.123-.323-5.7-2.923-5.877-2.403-.164-7.754-.163-10.153 0-2.598.177-2.904 1.747-2.924 5.877.02 4.123.323 5.7 2.923 5.877 2.399.163 7.75.164 10.153 0 2.598-.177 2.904-1.747 2.924-5.877z"/></svg>-->
           <span class="icon-youtube" style="font-size: 20px; margin-left: -6px;"></span> 
        </a>
        </ul>
      </div>
  </div>
      
      <div class="container" style="padding-left:3rem;">
        <div class="site-navbar bg-light">
          <div class="">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo god"><a href="<?php echo Theme::siteUrl(); ?>">
                <img alt="" class="a" style="max-height: 40px;" />
                <!-- <img alt="" class="b" style="max-height: 40px;" /> -->
                </a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li class="active">
                        <a href="<?php echo Theme::siteUrl(); ?>">HOME</a>
                      </li>
                      <!--<li><a href="sermons.html">Sermons</a></li>-->
                      <li class="has-children">
                        <a class="pr-4" data-toggle="collapse" data-target="#collapseItem0">ABOUT</a>
                        <ul class="dropdown">
                          <li><a href="intro/">INTRODUCTION</a></li>
                          <li><a href="dimple-anil/">MS.DIMPLE ANIL</a></li>
                          <!-- <li><a href="they.html">They</a></li>
                         <li class="has-children">
                            <a href="beliefs.html">Churches</a>
                            <ul class="dropdown">
                              <li><a href="beliefs.html">America</a></li>
                              <li><a href="beliefs.html">Europe</a></li>
                              <li><a href="beliefs.html">Asia</a></li>
                              <li><a href="beliefs.html">Africa</a></li>
                              
                            </ul>
                          </li> -->

                        </ul>
                      </li>

                      <li class="has-children">
                        <a class="pr-4" data-toggle="collapse" data-target="#collapseItem1">PRAYERS</a>
                        <ul class="dropdown">
                          <li><a href="prayers/">DAILY PRAYER</a></li>
                          <li><a href="direction/">DIRECTION</a></li>
                          <li><a href="obe/">OBE’s</a></li>
                          <!-- <li><a href="dailyprayer/">Daily prayers</a></li> -->
                        </ul>
                      </li>  
                      <li><a href="events/">MIRACLES</a></li>
                      <li><a href="blogs/">BLOGS</a></li>
                      <li><a class="pr-3" href="contact/">CONTACT US</a></li>
                      
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>