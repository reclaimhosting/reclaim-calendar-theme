<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://community.reclaimhosting.com/css/main.css">
    <style>
        body {
            background-color: white;
        }
        #nav-menu li a {
            font-size: 16px;
        }
    </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">
		<?php
		/* translators: Hidden accessibility text. */
		_e( 'Skip to content', 'twentynineteen' );
		?>
	</a>

    <header class="navbar">
    		<nav class="container-fluid bd-gutter flex-wrap flex-lg-nowrap" aria-label="Main navigation">
    			<a href="https://events.reclaimhosting.com/"><img width="405" height="70" src="https://community.reclaimhosting.com/imgs/reclaim-logo.png" alt="Relcaim Hosting logo." class="header-logo img-fluid"></a>
            <ul id="nav-menu">
              <li>
                <a href="https://events.reclaimhosting.com/events" class="">
                  Event Calendar
                </a>
              </li>
              <li>
                <a href="https://community.reclaimhosting.com" class="">
                  Reclaim Community
                </a>
              </li>
              <li>
                <a href="https://reclaimhosting.com/about" class="">
                  About Reclaim Hosting
                </a>
              </li>
              <li>
                <a href="https://reclaimed.tech/discord" class="">
                  Say Hello on Discord
                </a>
              </li>
              <li>
                <a href="https://support.reclaimhosting.com/hc/en-us/requests/new" class="">
                  Get in Touch
                </a>
              </li>
            </ul>
  			</nav>
    	</header>
<div class="divider"></div>

<style>
.wp-site-blocks {
  padding-top: 0 !important;
}
</style>

	<div id="content" class="site-content">
