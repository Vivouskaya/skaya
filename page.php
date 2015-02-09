 <?php get_header(); ?>
    
  <a href="http://couleurcuivre.innoveduc.fr">
    <input type="button" class="btn btn-warning" id="acceuilToggle" value="Acceuil" />
  </a>

        <div class="row">  </div>
          <div id="content">
              <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                  <div class="post">
                      <div id="titre_page"> <h1><?php the_title(); ?></h1> </div>
                      <div class="post_content">
                      <?php the_content(); ?>
                  </div>
                  </div>
              <?php endwhile; ?>
              <?php endif; ?>
          </div> 
 
         
  </body>
</html>