
<?php get_header(); ?>


<div id="about" class="page-section">
  
  <div class="container">

    <div class="row">

      <div id="about-text" class="col-xs-6">

        <h1>All over the internet...</h1>

        <a href="#" class="scroll-link" data-id="work"><img id="about-arrow" src="<?php bloginfo('template_directory'); ?>/images/arrow.png" alt="whatever"/></a>

      </div>

    </div>

    <div class="row">

<!--       <div id="about-pic">

        <img src="<?php bloginfo('template_directory'); ?>/images/whiteball.jpg" alt="whatever" />

      </div> -->

    </div>
      
    
  </div>

</div>

<div id="work" class="page-section">
    

<div class="container">
  
  <div class="row row-centered">

       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="col-md-3 col-sm-4 col-xs-8 col-centered">
          
          <div class="tile">
             
             <?php the_post_thumbnail(); ?>

          </div>

          <div class="overlay">

                <a href="#" class="info"><?php the_title(); ?></a>

          </div>
        
        </div>
          
      <?php endwhile; else : ?>
      <?php endif; ?>
    
  
  </div>
  
</div>



</div>
    
	
<?php get_footer(); ?>




