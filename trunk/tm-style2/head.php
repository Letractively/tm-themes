
<meta charset=UTF-8>
<title><?php bloginfo('name'); ?></title>

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />

<style>
    @import url("<?php bloginfo('stylesheet_url'); ?>");
</style>

<script>
    // TODO: Javascript
</script>

<!--  -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/plugins/prettify/prettify.css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/prettify/prettify.js"></script>
<script type="text/javascript">
    window.addEventListener("load", function(){ prettyPrint(); }, false);
</script>


<!--[if IE]>
<style>
    @import url("<?php bloginfo('template_url'); ?>/ie-style.css");
</style>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>

