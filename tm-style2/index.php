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
                    <article id="entry-<?php the_id(); ?>" class="entry hide">
                        
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
                            
                            <nav class="blog-info">
                                <ul class="clearfix">
                                    <li class="date"><?php the_time('Y.m.d'); ?></li>
                                    <li class="cat"><?php the_category(', '); ?></li>
                                    <li class="tag"><?php the_tags('', ', '); ?></li>
                                </ul>
                            </nav>
                        </header>
                        
                        <div class="content">
                            <?php the_content('Read More'); ?>
                        </div>
                        
                        <footer>
                            <?php edit_post_link('Edit', '<div class="edit"><span>', '</span></div>'); ?>
                        </footer>
                        
                        
                    </article>
                    
                    <?php comments_template(); ?>
                    
                    <?php endwhile; endif; ?>
                    
                    <?php get_template_part('page-nav'); ?>
                    
                </section>
                
                <aside id="side">
                    <!--<h1>Side</h1>-->
                    <?php dynamic_sidebar('side-widget'); ?>
                </aside>
            </div>
        </div>
        <?php get_footer(); ?>
        
        <?php wp_footer(); ?>
    </body>
</html>