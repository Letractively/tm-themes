
        <meta charset=utf-8 />
        <meta name="google-site-verification" content="P3gBdNmT5NE79jMU7tapwht8JBmtQBIIfgsv5FpYtZo" />
        <title><?php bloginfo('name'); ?></title>
        <link rel="alternate" type="application/rss+xml" title="TM Life" href="http://tmlife.net/feed/" /> 
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
        <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <style>
            article, aside, dialog, figure, footer, header, hgroup, menu, nav, section {display: block;}
        </style>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" type="text/css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/article.css" type="text/css" />
        <style>
            body {
                background: #000000 url(<?php bloginfo('template_url'); ?>/img/bg4.jpg) no-repeat fixed 50% 0%;
            }
            textarea {
                vertical-align: middle;
            }
        </style>
        
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/plugins/prettify/prettify.css" />
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/prettify/prettify.js"></script>
        <script type="text/javascript">
            window.addEventListener("load", function(){
                prettyPrint();
            }, false);
        </script>

        <!-- 次のタグを head 要素内または body 終了タグの直前に貼り付けてください -->
        <script type="text/javascript" src="https://apis.google.com/js/plusone.js">
          {lang: 'ja'}
        </script>
        
        <?php wp_head(); ?>
        
