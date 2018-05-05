<?php
/**
 * Maintenance mode template that's shown to logged out users.
 *
 * @package   ng-maintenance-mode
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
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,300italic,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo plugins_url( 'assets/css/maintenance.css', dirname( __FILE__ ) ); ?>">
	<title>Down for Maintenance | <?php echo esc_html( get_bloginfo( 'name' ) ); ?></title>
</head>

<body>

<div id="container">

	<header>

		<img  class="tools" width="100" height="100" title="" alt="" src="data:image/png;base64,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" />

		<img class="logo"  width="500" height="181" title="" alt="" src="data:image/png;base64,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" />


		<h1 class="title">Website Under Maintenance</h1>

	</header>

	<main>


		<div id="work">
			<p style="text-align:left;"><strong>What's happening:</strong> We are getting our audition page ready!</p>
			<p style="text-align:left; margin-top:10px;"><strong>Estimated Downtime: </strong> 11:00am - 4:00pm EST</p>
		</div>

		<div id="actions">
			<p>In the meantime, subscribe for Playground updates or connect with us on social media!</p>
			<?php echo do_shortcode( '[mc4wp_form id="651"]' ); ?>

			<div class="social">
				<a href="https://www.facebook.com/playgroundDYT/" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/playground_dyt" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="https://www.instagram.com/playground_dyt/" target="_blank"><i class="fa fa-instagram"></i></a>
			</div>

		</div>


	</main>

</div>

</body>
</html>