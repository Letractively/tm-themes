<!DOCTYPE html>

<html>
    <head>
        <?php get_template_part('head'); ?>
    </head>
    
    <body>
        <?php get_header(); ?>
        <div id="contents">
            <div id="main" class="clearfix">
                
                <?php get_template_part('breadcrumb'); ?>
                
                <section id="articles">
                    <!--<h1>Home</h1>-->
                    
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <article id="entry-<?php the_id(); ?>" class="entry">
                        
                        <?php if (is_single()): ?>
                        <script>
                            var Entry = {};
                            Entry.element = document.getElementById("entry-<?php the_id(); ?>");
                        </script>
                        <?php endif; ?>
                        
                        <header>
                            <h1>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h1>
                        </header>
                        
                        <div class="content">
                            <?php the_content('Read More'); ?>
                        </div>
                        
                        <footer>
                            <?php edit_post_link('Edit', '<div class="edit"><span>', '</span></div>'); ?>
                        </footer>
                        
                    </article>
                    <?php endwhile; endif; ?>
                </section>
                
                <aside id="side">
                    <!--<h1>Side</h1>-->
                    <?php dynamic_sidebar('widget00'); ?>
                </aside>
            </div>
        </div>
        <?php get_footer(); ?>
        
        <?php wp_footer(); ?>
    </body>
</html>