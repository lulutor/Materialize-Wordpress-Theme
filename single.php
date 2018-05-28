<?php get_header(); ?>
  <section class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <br><br>
    <article clas="article-loop">
      <header>
        <h2><?php the_title(); ?></h2>
          By: <?php the_author(); ?>
      </header>
        <?php the_content(); ?>
      <br><br>
      </header>
    </article>
    <?php endwhile; else : ?>
    <article>
      <p>Sorry, no posts were found!</p>
    </article>
    <?php endif; ?>
    </section>
    </main>
    <?php get_footer(); ?>
  </section>
<?php get_footer(); ?>
