<?php get_header(); ?>
<main class="section no-pad-bot col s12" id="index-banner">
  <section class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <br><br>
    <article class="article-loop">
      <header>
        <h2 class="header center lighten-2 "><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></h1>
      </header>
        <?php the_excerpt(); ?>
      <br><br>
      </header>
    </article>
    <?php endwhile; else : ?>
    <article>
      <p>Sorry, no posts were found!</p>
    </article>
    <?php endif; ?>
    </section>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
  </section>
</main>
