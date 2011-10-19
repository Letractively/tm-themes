<style>

    .page-nav {
        text-align: center;
    }
    .page-nav .page-numbers {
        margin: 2px;
        padding: 4px 5px;
        background-color: black;
        border: 1px solid #aaa;
        
        color: #aaa;
    }
    .page-nav .current {
        background-color: #fff;
        border: 1px solid black;
        
        color: black;
    }
    
</style>
<div class="page-nav">
    <?php
    echo paginate_links(array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => 'page/%#%',
        'total' => $wp_query->max_num_pages,
        'mid_size' => 3,
        'current' => ($paged ? $paged : 1),
        'prev_text' => ("<< Prev"),
        'next_text' => ("Next >>"),
    ));
    ?>
</div>