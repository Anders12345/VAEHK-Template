<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>
<body>
	<div class="wrapper">
		<header class="header" role="banner">
			<?php vaehk_the_custom_logo(); ?>
			<a href="#" id="nav-toggle" role="button">
				<div id="hamburger-icon">
					<div class="hamburger-bar"></div>
					<div class="hamburger-bar"></div>
					<div class="hamburger-bar"></div>
				</div>
			</a>
			<nav class="mainmenu" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'false') ); ?>
			</nav>
		</header>