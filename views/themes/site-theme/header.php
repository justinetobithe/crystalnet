<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
    <?php echo cms_get_seo_meta_robot(); ?>

  <title><?php echo cms_meta_title(get_system_option(array('option_name'=>'website_name')), "|"); ?></title>

  <!-- Bootstrap 4.0.0 -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/third-party/bootstrap/4.0.0/css/bootstrap.min.css" />
  <!-- Font Awesome 5.0.8 -->
  <link rel="stylesheet" type="text/css"
    href="<?php bloginfo('template_directory'); ?>/assets/third-party/font-awesome/5.0.8/web-fonts-with-css/css/fontawesome-all.min.css" />
  <!-- jQuery UI 1.12.1-->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/third-party/jquery-ui/1.12.1/jquery-ui.min.css" />
  <!-- Bootstrap Select style -->
  <!--
      <link rel="stylesheet" type="text/css" href="assets/third-party/bootstrap-select/1.13.0/css/bootstrap-select.min.css">
    -->
  <!-- TOAST  1.3.2 -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/third-party/toast/1.3.2/dist/jquery.toast.min.css">
  <!-- Bootstrap Datepicker -->
  <!--
      <link rel="stylesheet" type="text/css" href="assets/third-party/bootstrap-datepicker/1.7.0/bootstrap-datepicker.min.css">
    -->

  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/third-party/bootstrap-select/css/bootstrap-select.css">


  <!-- custom bootstrap css -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/custom.css" />
  <!-- theme css -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/theme.css" />

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/aos.css" />

  <!-- REVOLUTION SETTINGS STYLES 5.1.6 -->
<!--
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/third-party/revolution/5.1.6/css/settings.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/third-party/revolution/5.1.6/css/layers.css" />
-->

  <!-- Dropzone -->
  <!--
      <link rel="stylesheet" href="assets/third-party/dropzone/5.7.0/dist/dropzone.css">
    -->
  <!-- Chosen -->
  <!--
      <link rel="stylesheet" href="assets/third-party/chosen/1.8.7/chosen.min.css">
    -->

  <!-- jQuery 3.2.0 -->
  <script src="<?php bloginfo('template_directory'); ?>/assets/third-party/jquery/3.2.0/jquery-3.2.0.min.js"></script>

    <?php echo cms_get_canonical(); ?>
</head>

<body class="custom theme">
  <header class="container-fluid header home sps">
    <div class="container">
      <div class="row bottom">
        <nav class="col-12 navbar navbar-expand-lg">
          <a href="<?php bloginfo("installation_url"); ?>/" class="link logo-link w-40 float-left">
            <img class="img-responsive img-fluid company-logo" src="<?php echo get_system_option('website_logo'); ?>" alt="<?php echo get_system_option(array('option_name' => 'company_name')); ?>" />
          </a>
          <button class="navbar-toggler float-right" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars fa-lg"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav justify-content-end list-md-inline text-center ml-lg-auto f_j_s t16">
              <?php cms_display_menu( array('name' => 'Main Menu') ); ?>
              <li class="nav-item list-md-inline-item">
                <button class="btn btn-center f_l_b t16 c_fff text-center" onclick="window.location.href='#get-in-touch'">Get Started</button>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <div class="containment">
