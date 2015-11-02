<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <!-- fonts -->
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Quattrocento+Sans:400,700' rel='stylesheet' type='text/css'>
  <?php // Load our CSS ?>

  <?php wp_head(); ?>
  
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>


<body <?php body_class(); ?>>

    <header class="main">
      <div class="container topnav">
        <h1>
          <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </h1>
        
        <nav class="main">
          <ul>
            <?php wp_nav_menu( array(
              'container' => false,
              'theme_locations' => 'primary'
            )); ?>
          </ul>
        </nav>
      </div> <!-- container --> 
    </header><!--/main-->

<!-- Icon from Franco Mateo -->
  