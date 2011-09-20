<!DOCTYPE html>

<html>
    <head>
        <meta charset=UTF-8>
        <title>HTML5 コーディング</title>
        
        <style>
        @import url("<?php bloginfo('stylesheet_url'); ?>");
        </style>
        
        <script>
        /* ここに JavaScript を書く */
        </script>
        
        <!--[if IE]>
        <style>
            @import url("<?php bloginfo('template_url'); ?>/ie-style.css");
        </style>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
        
    </head>
    
    <body>
        
        <header id="header">
            <hgroup>
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <h2><?php bloginfo('description'); ?></h2>
            </hgroup>
            
            <nav id="nav">
                <div class="inner">
                    <ul>
                        <li><a href="../step00/index.html">Base</a></li>
                        <li><a href="../step01/index.html">Reset</a></li>
                        <li><a href="../step02/index.html">Header</a></li>
                        <li><a href="../step03/index.html">Nav</a></li>
                        <li><a href="../step04/index.html">Contents</a></li>
                        <li><a href="../step05/index.html">Main Section</a></li>
                        <li><a href="../step06/index.html">Aside</a></li>
                        <li><a href="../step07/index.html">Footer</a></li>
                        <li><a href="#">WordPress</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <div id="contents">
            
            <section id="main">
                <!--<h1>Home</h1>-->
                
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <article id="entry<?php the_id(); ?>" class="entry">
                    
                    <header>
                        <h1>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h1>
                    </header>
                    
                    <div class="content">
                        <?php the_content('Read More'); ?>
                    </div>
                    
                    <footer>
                        
                    </footer>
                    <hr />
                    
                </article>
                
                <?php endwhile; endif; ?>
                
            </section>
            
            <aside id="side">
                <!--<h1>Side</h1>-->
                <?php dynamic_sidebar(); ?>
            </aside>
            
        </div>
        
        <!--
        <div style="clear:both;"></div>
        -->
        
        <footer id="footer">
            <h1><footer></h1>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>













