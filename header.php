
<!doctype html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Kajetan Raducki | kb6.co">

    <title><?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <!-- fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet"> -->
    <?php wp_enqueue_style('fonts.googleapis.com/css?family=Rubik&subset=latin-ext'); ?>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  <?php wp_head(); ?>
  </head>

    
    <?php
    
    if ( is_front_page() ) :
    echo'<body class="text-center background-custom">';
else :
    echo'<body class="text-center ">';
endif;
    
    ?>


    <div class=" d-flex w-100 h-100 mx-auto flex-column">


  <header class="mb-auto ">
    <nav class="navbar navbar-expand-lg ">
      <div class="container">
      <a class="navbar-brand" href="https://whirlpooltoja.pl/">
     <img src="<?php echo get_bloginfo('template_url') ?>/img/logo80.png" width="94" height="80" alt="">
   </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <i class="fas fa-bars fa-1x"></i>
        </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">

         <?php wp_nav_menu('primary'); ?> 
        <li class="nav-item active">
          <a class="nav-link full" href="https://whirlpooltoja.pl/">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link full" href="/konkurs/">Lista zdjęć <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link full" href="/regulamin/">Regulamin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link special" href="/konkurs/?contest=upload-photo">Dodaj zdjęcie</a>
        </li>
          
          <li class="nav-item dropdown show">
            <a class="nav-link full-drop dropdown-toggle" href="http://whirlpooltoja.pl/" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Profil</a>
            <div class="dropdown-menu show" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="https://whirlpooltoja.pl/konkurs/?contest=contest-profile">Twoje zdjęcia</a>
                <?php
                //Login button
                if (!is_user_logged_in()) {
                        echo '<a class="dropdown-item" href="https://whirlpooltoja.pl/konkurs/?contest=contest-profile"><i class="fa fa-sign-in" aria-hidden="true"></i> '.__('Log in', 'photo-contest').'</a>';
                        } else {
                        echo '<a class="dropdown-item" href="' . wp_logout_url( get_permalink() ) . '"><i class="fa fa-sign-out" aria-hidden="true"></i> '.__('Log out', 'photo-contest').'</a>';
                }
            
        
                
                
                ?>
        
            </div>
          </li>

      </ul>
    </div>
  </div>
  </nav>
  </header>
