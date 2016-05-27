<!doctype html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/vendors/fancybox/source/jquery.fancybox.css?v=2.1.5 "/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/vendors/font-awesome/css/font-awesome.min.css?v=4.4.0 "/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/main.css?v=1.2.1 "/>

    <title><?php bloginfo('name');?></title>

        <!-- 通过自有函数输出HTML头部信息 -->


</head>

<body itemscope itemtype="http://schema.org/WebPage" lang="zh-Hans">

  <div class="container one-column page-home">
  <!--page home-->
    <div class="headband"></div>

    <header id="header" class="header" itemscope itemtype="http://schema.org/WPHeader">
        <div class="header-inner">
             <h1 class="site-meta">
                <span class="logo-line-before"><i></i></span>
                <a href="<?php bloginfo('url'); ?>" class="brand" rel="start">
                    <span class="logo"><i class="icon-next-logo"></i></span>
                    <span class="site-title"><?php bloginfo('name');?></span>
                </a>
               <span class="logo-line-after"><i></i></span>
            </h1>

        <div class="site-nav-toggle">
          <button>
            <span class="btn-bar"></span>
            <span class="btn-bar"></span>
            <span class="btn-bar"></span>
         </button>
       </div>

       <nav class="site-nav">
          <ul id="menu" class="menu  ">
              <li class="menu-item menu-item-home">
                <a href="<?php bloginfo('url'); ?>" rel="section">
                  <i class="menu-item-icon"></i> <br />
                  首页
              </a>
             </li>

            <li class="menu-item menu-item-home">
                <?php wp_nav_menu(); ?>
            </li>

          </ul>


        </nav>
    </div>
  </header>
