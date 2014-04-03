<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<html class='no-js' lang='en'>
<head>
    <meta charset='utf-8' content='text/html' http-equiv='Content-Type'>
    <title>
    	Genome<?php wp_title( '|', true, 'left' ); ?>
    </title>
    <meta content='Genome Magazine' property='og:title'>
    <meta content='Website' property='og:type'>
    <meta content='<?php echo get_stylesheet_directory_uri(); ?>/img/icons/og-facebook.jpg' property='og:image'>
    <meta content='/' property='og:url'>
    <meta content='Genome Magazine' property='og:site_name'>
    <meta content='Genome Magazine' property='og:author'>
    <meta content='' property='og:description'>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
    <meta content='' name='author'>
    <meta content='width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no' name='viewport'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <link href='<?php echo get_stylesheet_directory_uri(); ?>/img/icons/favicon-152.png' rel='apple-touch-icon-precomposed' sizes='152x152'>
    <link href='<?php echo get_stylesheet_directory_uri(); ?>/img/icons/favicon-alt-32.png' rel='apple-touch-icon-precomposed' sizes='32x32'>
    <link href='<?php echo get_stylesheet_directory_uri(); ?>/img/icons/favicon-alt-16.png' rel='icon'>
    <script src='//use.typekit.net/wga8bpj.js'></script>
    <script>
      try{Typekit.load();}catch(e){}
    </script>
    <script src='<?php echo get_stylesheet_directory_uri(); ?>/js/min/modernizr.min.js'></script>
    <link href='<?php echo get_stylesheet_directory_uri(); ?>/css/genome-main.css' rel='stylesheet'>
    <!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ie8.css" /><script src='<?php echo get_stylesheet_directory_uri(); ?>/js/min/ie.min.js'></script><![endif]-->
    <?php wp_head(); ?>
    <?php if ( is_page_template('page-templates/feature-article.php') ) { echo "<style>" . get_post_meta( get_the_ID(), 'Custom CSS', true ) . "</style>"; } ?>

</head>

  <body class='init<?php if ( is_page_template('page-templates/feature-article.php') ) { echo " nav-add-social"; } ?>'>
    <div id='site-wrap-outer'>
      <section id='header-nav-wrap'>
        <div class='g-door' id='newsletter-door'>
          <div class='inner-bounds block'>
            <h2 class='section-title smaller'>
              The Genome Newsletter
            </h2>
            <br>
            <p class='lead'>
              Sign up for our newsletter and get
              <em>
                Genome
              </em>
              updates in your inbox.
            </p>
            <div class='form-box'>
              <form action='http://bigsciencemedia.us8.list-manage.com/subscribe/post?u=f01a898f9c8e64b560ee3c845&amp;amp;id=0a55916b1f' class='validate' id='mc-embedded-subscribe-form' method='post' name='mc-embedded-subscribe-form' novalidate='' target='_blank'>
                <div class='mc-field-group'>
                  <input class='required email' id='mce-EMAIL' name='EMAIL' placeholder='jane@youremail.com' type='email' value=''>
                </div>
                <div class='clear' id='mce-responses'>
                  <div class='response' id='mce-error-response' style='display:none'></div>
                  <div class='response' id='mce-success-response' style='display:none'></div>
                </div>
                <div style='position: absolute; left: -5000px;'>
                  <input name='b_f01a898f9c8e64b560ee3c845_0a55916b1f' type='text' value=''>
                </div>
                <div class='clear'>
                  <input class='input-icon' id='mc-embedded-subscribe' name='subscribe' type='submit' value='Subscribe'>
                </div>
              </form>
            </div>
            <a class='close-g-door' data-icon='D' href='x'></a>
          </div>
        </div>
        <section id='main-site-navigation-wrap'>
          <div class='site-navigation-inner'>
            <div class='hide-above-tablet-p' id='toggle-offcanvas-nav'>
              <a class='light-text-color' data-icon='B' href='#offcanvas-navigation'></a>
            </div>
            <div class='search'>
              <a class='light-text-color search-glass overlay-view-search' data-icon='C' href='#nav-search-box'></a>
              <div class='form-box mfp-hide inner-bounds' id='nav-search-box'>
                <form role='search' method='get' action='<?php echo site_url(); ?>'>
                  <input class='input-icon' data-icon='C' type='submit' value='Search'>
                  <input id='search' name='s' placeholder='What were you looking for?' type='text'>
                </form>
              </div>
            </div>
            <header id='site-title' role='banner'>
              <h1 class='logo'>
                <a data-icon='L' href='<?php echo esc_url( home_url( '/' ) ); ?>'></a>
                <span>Genome</span>
              </h1>
              <div class='tagline'>
                Your Health is Personal
              </div>
            </header>
            <nav id='main-navigation' role='navigation'>
              <ol class='navigation-list'>
                <li class='nav-item hide-below-tablet-p open-g-door'>
                  <a href='#'>newsletter</a>
                </li>
                <li class='nav-item hide-below-tablet-p'>
                  <a href='https://checkout.subscriptiongenius.com/bigsciencemedia.com/' target=_blank>subscribe</a>
                </li>
                <li class='nav-item hide-below-tablet-p'>
                  <a href='#'>browse</a>
                  <ol>
                    <li class='nav-sub-item'>
                      <h3>
                        By Issue
                      </h3>
                      <ol>
                      <?php $args = array(
                        'show_option_all'    => '',
                        'orderby'            => 'name',
                        'order'              => 'ASC',
                        'style'              => 'list',
                        'show_count'         => 0,
                        'hide_empty'         => 1,
                        'use_desc_for_title' => 1,
                        'child_of'           => 16,
                        'feed'               => '',
                        'feed_type'          => '',
                        'feed_image'         => '',
                        'exclude'            => '',
                        'exclude_tree'       => '',
                        'include'            => '',
                        'hierarchical'       => 1,
                        'title_li'           => '',
                        'show_option_none'   => __('No categories'),
                        'number'             => null,
                        'echo'               => 1,
                        'depth'              => 0,
                        'current_category'   => 0,
                        'pad_counts'         => 0,
                        'taxonomy'           => 'category',
                        'walker'             => null
                      ); ?>
                      <?php wp_list_categories( $args ); ?>
                        <!-- <li class='view-all'>
                          <a href='<?php echo site_url() . "/category/issue/"; ?>'>View All &#187;</a>
                        </li> -->
                      </ol>
                    </li>
                    <li class='nav-sub-item'>
                      <h3>
                        By Condition
                      </h3>
                      <ol>
                      <?php $args = array(
                        'show_option_all'    => '',
                        'orderby'            => 'name',
                        'order'              => 'ASC',
                        'style'              => 'list',
                        'show_count'         => 0,
                        'hide_empty'         => 1,
                        'use_desc_for_title' => 1,
                        'child_of'           => 7,
                        'feed'               => '',
                        'feed_type'          => '',
                        'feed_image'         => '',
                        'exclude'            => '',
                        'exclude_tree'       => '',
                        'include'            => '',
                        'hierarchical'       => 1,
                        'title_li'           => '',
                        'show_option_none'   => __('No categories'),
                        'number'             => null,
                        'echo'               => 1,
                        'depth'              => 0,
                        'current_category'   => 0,
                        'pad_counts'         => 0,
                        'taxonomy'           => 'category',
                        'walker'             => null
                      ); ?>
                      <?php wp_list_categories( $args ); ?>
                        <!-- <li class='view-all'>
                          <a href='<?php echo site_url() . "/category/condition/"; ?>'>View All &#187;</a>
                        </li> -->
                      </ol>
                    </li>
                    <li class='nav-sub-item'>
                      <h3>
                        By Topic
                      </h3>
                      <ol>
                      <?php $args = array(
                        'show_option_all'    => '',
                        'orderby'            => 'name',
                        'order'              => 'ASC',
                        'style'              => 'list',
                        'show_count'         => 0,
                        'hide_empty'         => 1,
                        'use_desc_for_title' => 1,
                        'child_of'           => 5,
                        'feed'               => '',
                        'feed_type'          => '',
                        'feed_image'         => '',
                        'exclude'            => '',
                        'exclude_tree'       => '',
                        'include'            => '',
                        'hierarchical'       => 1,
                        'title_li'           => '',
                        'show_option_none'   => __('No categories'),
                        'number'             => null,
                        'echo'               => 1,
                        'depth'              => 0,
                        'current_category'   => 0,
                        'pad_counts'         => 0,
                        'taxonomy'           => 'category',
                        'walker'             => null
                      ); ?>
                      <?php wp_list_categories( $args ); ?>
                        <!-- <li class='view-all'>
                          <a href='<?php echo site_url() . "/category/topic/"; ?>'>View All &#187;</a>
                        </li> -->
                      </ol>
                    </li>
                  </ol>
                </li>
              </ol>
            </nav>
            <aside class='add-social'>
              <div class='addthis_toolbox social-list'>
                <a class='addthis_button_facebook' data-icon='u' href='<?php echo $_SERVER['REQUEST_URI']; ?>'>
                  <span class='line'></span>
                  <span class='value'>Share</span>
                </a>
                <a class='addthis_button_twitter' data-icon='v' href='<?php echo $_SERVER['REQUEST_URI']; ?>'>
                  <span class='line'></span>
                  <span class='value'>Tweet</span>
                </a>
                <a class='addthis_button_linkedin' data-icon='w' href='<?php echo $_SERVER['REQUEST_URI']; ?>'>
                  <span class='line'></span>
                  <span class='value'>LinkedIn</span>
                </a>
                <a class='addthis_button_addthis_button_google_plusone_share' data-icon='O' href='<?php echo $_SERVER['REQUEST_URI']; ?>'>
                  <span class='line'></span>
                  <span class='value'>Google Plus</span>
                </a>
                <a class='addthis_button_email' data-icon='h' href='<?php echo $_SERVER['REQUEST_URI']; ?>'>
                  <span class='line'></span>
                  <span class='value'>Email</span>
                </a>
              </div>
            </aside>
          </div>
        </section>
        <nav class='hide-above-tablet-p' id='offcanvas-navigation' role='navigation'>
          <div class='offcanvas-inner'>
            <ol class='navigation-list'>
              <li class='nav-item current'>
                <a href='#'>newsletter</a>
              </li>
              <li class='nav-item collapse-area'>
                <header class='collapse-header'>
                  <div class='collapse-section-title'>browse</div>
                </header>
                <ol class='collapse-content'>
                  <li>
                    <a href='<?php echo site_url() . "/category/issue/"; ?>'>By Issue</a>
                  </li>
                  <li>
                    <a href='<?php echo site_url() . "/category/topic/"; ?>'>By Topic</a>
                  </li>
                  <li>
                    <a href='<?php echo site_url() . "/category/condition/"; ?>'>By Condition</a>
                  </li>
                </ol>
              </li>
              <li class='nav-item'>
                <a href='#'>subscribe</a>
              </li>
            </ol>
            <a data-icon='D' href='#main-site-navigation-wrap' id='offcanvas-nav-close-btn'></a>
          </div>
        </nav>
      </section>
