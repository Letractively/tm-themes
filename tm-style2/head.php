
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

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/tm/tm.audio.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/tm/tm.mario.js"></script>
<script type="text/javascript">
    // 事前に読み込んでおく
    tm.Audio.load("<?php bloginfo('template_url'); ?>/snd/link-click.ogg", "link-click");
    
    window.addEventListener("load", function(){ prettyPrint(); }, false);
    
    // window.addEventListener("DOMContentLoaded", function()
    window.addEventListener("load", function()
    {
        var e_articles = document.getElementById("articles");
        var entryList = document.getElementsByClassName("entry");
        
        // 記事リストの非表示を解除
        e_articles.setAttribute("class", "");
        
        if (window.DOMTokenList != undefined) {
            var createFadeInFunc = function(entry) {
                return function(){
                    entry.classList.add("transition-1s");
                    entry.classList.add("show");
                }
            }
            for (var i=0,len=entryList.length; i<len; ++i) {
                var entry = entryList[i];
                entry.classList.add("hide");
                setTimeout(createFadeInFunc(entry), i*250);
            }
        }
        
        if (window.DOMTokenList != undefined) {
            var links = document.links;
            
            for (var i=0,len=links.length; i<len; ++i) {
                var link = links[i];
                link.addEventListener("click", function(e){
                    // 左クリック以外は弾く
                    if (e.button != 0) { return ; }
                    // ハッシュは弾く
                    if (this.href.replace(this.baseURI, "")[0] == "#") {return ;}
                    
                    // 
                    // 遷移前にフェードアウトさせる
                    // 
                    var url  = this.href;
                    // フェードアウト
                    e_articles.classList.add("transition-250ms");
                    e_articles.classList.add("hide");
                    // 1秒後に遷移
                    setTimeout(function(){ location.href = url; }, 250);
                    // デフォルトイベントをキャンセル
                    e.preventDefault();
                }, false);
                
                link.addEventListener("mouseover", function(e){
                    tm.Audio.play({
                        "filename": "<?php bloginfo('template_url'); ?>/snd/link-hover.ogg"
                    });
                }, false);
                
                link.addEventListener("click", function(e){
                    tm.Audio.play({
                        "sound": tm.Audio.get("link-click")
                    });
                }, false);
            }
        }
        
        if (window.Audio) {
        }
        
        tm.Mario();
        
    }, false);
    
    // window.addEventListener("unload", function(){ console.log("test"); }, false);
    
</script>


<!--[if IE]>
<style>
    @import url("<?php bloginfo('template_url'); ?>/ie-style.css");
</style>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>

