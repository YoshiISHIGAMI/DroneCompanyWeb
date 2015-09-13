<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


	<?php wp_head(); ?>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
  
  <!-- CSS -->
  <link rel="stylesheet" href="/_library/bootstrap3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="/_asset/css/structure.css">
  <link rel="stylesheet" href="/_asset/css/module.css">
  <!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="/_library/bootstrap3.3.5/js/bootstrap.min.js"></script>
  <script src="_asset/js/index.js" type="text/javascript"></script>
</head>

<body <?php body_class(); ?>>


<header id="header">


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Brand</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#service">SERVICE</a></li>
        <li><a href="#works">WORKS</a></li>
        <li><a href="#news">NEWS</a></li>
        <li><a href="#company">COMPANY</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


    <div id="mainVisual" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">1</div>
      <div class="item">2</div>
      <div class="item">3</div>
    </div>

    <!-- Controls 
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon carousel-arrow-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon carousel-arrow-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>-->
  </div>

    <div class="container">
      <div class="row">
        <h1 id="logo"><img src="_asset/img/logo.png" alt="DRONE SOLUTIONS"></h1>
        <p class="copy">ドローンによる空撮、ドローン操縦者の派遣</p>
        <p class="btn_contact-main"><a href="#contact" class="btn btn-lg btn_contact">お問い合せ</a></p>
      </div>
    </div>
  </header>