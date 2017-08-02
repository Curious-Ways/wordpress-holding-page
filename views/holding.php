<?php
/**
 * Maintenance mode template that's shown to logged out users.
 *
 * @package   wordpress-holding-page
 * @copyright Copyright (c) 2015, Ashley Evans
 * @license   GPL2+
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

  <link rel="stylesheet" href="<?php echo plugins_url( 'assets/css/normalise.css', dirname( __FILE__ ) ); ?>">
	<link rel="stylesheet" href="<?php echo plugins_url( 'assets/css/style.css', dirname( __FILE__ ) ); ?>">

	<title>Page Title</title>
</head>

<body>

<header class="header">
  <div class="header__content">
    <img src="<?php echo plugins_url( 'assets/img/logo.png', dirname( __FILE__ ) ); ?>" alt="Logo">
    <h1>Page Title</h1>
  </div>
</header>

<main class="main">
  <div class="main__content">
    <p>Email us here <a href="mailto:hello@backtofront.london">hello@backtofront.london</a></p>
  </div>
</main>

<script type="text/javascript" src="<?php echo plugins_url( 'inc/retina-1.3.0/retina.min.js', dirname( __FILE__ ) ); ?>"></script>
</body>
</html>
