<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head(); ?>
    <style>
      .showcase{
        background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center;
      }
    </style>
  </head>
  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <?php
           wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'depth'             => 2,
               'container'         => 'div',
               'container_class'   => 'collapse navbar-collapse',
       'container_id'      => 'bs-example-navbar-collapse-1',
               'menu_class'        => 'nav navbar-nav',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new wp_bootstrap_navwalker())
           );
       ?>
        </nav>
      </div>
    </div>

<section class="showcase">
  <div class="container">
    <h1><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?></h1>
    <p><?php echo get_theme_mod('showcase_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam'); ?></p>
    <a href="<?php echo get_theme_mod('btn_url', 'http://test.com'); ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text', 'Get Started'); ?></a>
  </div>
</section>



          <div class="col-md-4 col-sm-6 portfolio-item">

            <a href="blog/tinder/index.html" class="portfolio-link" data-toggle="modal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <h3 class="articleteasers">Tinder and The Loss of True Intimacy</h2>
              <br>
              <img src="img/tinder2.PNG" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
              <br>
              <p><code>The aim of this article is to carefully examine dating app culture, and debate whether this new culture is conducive or destructive to finding true love.</code> 
              </p>
              <div
                class="fb-like"
                data-share="true"
                data-width="450"
                data-show-faces="true">
              </div>
            </div>
          </div>


          <!-- New Facebook Article -->

          <div class="col-md-4 col-sm-6 portfolio-item">

            <a href="blog/blockbusterarticle/index.html" class="portfolio-link" data-toggle="modal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <h3 class="articleteasers">BlockBuster's Demise and Netflix's Rise</h3>
              <br>
              <img src="img/netflix.jpg" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
              <br>
              <p><code>How did BlockBuster, the top dog of the post-theater movie industry, miss the oppurtunity to purchase Netflix? Luckily for Reed Hasting, Netflix Founder, the sleeping giant was simply too busy taking care of other matters.</code> 
              </p>
            </div>
          </div>

          <!-- ENd of Facebook Article Teaser -->



          <div class="col-md-4 col-sm-6 portfolio-item">

            <a href="blog/facebook/index.html" class="portfolio-link" data-toggle="modal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <h3 class="articleteasers">Did Facebook Rip Off It's Logo From Shrek?</h3>
              <br>
              <img src="img/shrek2.PNG" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
              <br>
              <p><code>After watching the movie again last night, I was amazed to see how many times the Facebook logo appears in the original Shrek film! The following images are not photo-shopped.</code>
              </p>
            </div>
          </div>

        </div>

          <div class="col-md-4 col-sm-6 portfolio-item">

           <a href="blog/Pokemon Go/index.html" class="portfolio-link" data-toggle="modal">
             <div class="portfolio-hover">
               <div class="portfolio-hover-content">
                 <i class="fa fa-plus fa-3x"></i>
               </div>
             </div>
             <h3 class="articleteasers">Pokemon Go and Big Data</h3>
             <br>
             <img src="img/pokemon2.PNG" class="img-responsive" alt="">
           </a>
           <div class="portfolio-caption">
             <br>
             <p><code>We are entering a new era of User Comfort levels relating to online privacy. Trends like the "Pokémon Go" app are proof of this Sociological Shift within the Global Community of Mobile Phone users.
             </code></p>
           </div>
         </div>

      <div class="col-md-4 col-sm-6 portfolio-item">
           <a href="blog/7topfintechinnovators/index.html" class="portfolio-link" data-toggle="modal">
             <div class="portfolio-hover">
               <div class="portfolio-hover-content">
                 <i class="fa fa-plus fa-3x"></i>
               </div>
             </div>
             <h3 class="articleteasers">7 Top FinTech Innovators</h3>
             <br>
             <img src="img/fintech.PNG" class="img-responsive" alt="">
           </a>
           <div class="portfolio-caption">
             <br>
             <p><code>Let's have a look at the Top 7 FinTech innovators. The list includes both digital enablers - those that are creating the technology that other companies can build on top of - as well as those companies that are targeting the end-user directly.
             </code></p>
           </div>
         </div> 



<section class="boxes">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
          <?php if(is_active_sidebar('box1')) : ?>
            <?php dynamic_sidebar('box1'); ?>
          <?php endif; ?>
      </div>

      <div class="col-md-4">
          <?php if(is_active_sidebar('box2')) : ?>
            <?php dynamic_sidebar('box2'); ?>
          <?php endif; ?>
      </div>

      <div class="col-md-4">
          <?php if(is_active_sidebar('box3')) : ?>
            <?php dynamic_sidebar('box3'); ?>
          <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<footer class="blog-footer">
  <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
</body>
</html>
