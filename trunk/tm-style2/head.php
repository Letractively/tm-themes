
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
    
    window.addEventListener("DOMContentLoaded", function(){
        
        var entryList = document.getElementsByClassName("entry");
        
        if (window.DOMTokenList != undefined) {
            var createFadeInFunc = function(entry) {
                return function(){
                    entry.classList.add("transition-1s");
                    entry.classList.remove("hide");
                    entry.classList.add("show");
                }
            }
            for (var i=0,len=entryList.length; i<len; ++i) {
                var entry = entryList[i];
                entry.classList.add("hide");
            }
            for (var i=0,len=entryList.length; i<len; ++i) {
                var entry = entryList[i];
                setTimeout(createFadeInFunc(entry), i*250);
            }
        }
        else {
            for (var i=0,len=entryList.length; i<len; ++i) {
                var entry = entryList[i];
                entry.setAttribute("class", "entry");
            }
        }
        
        if (window.DOMTokenList != undefined) {
            // var e_fadeOutLinkList = document.getElementsByClassName("fade-out-link");
            var e_fadeOutLinkList = document.getElementsByTagName("a");
            var e_articles = document.getElementById("articles");
            for (var i=0,len=e_fadeOutLinkList.length; i<len; ++i) {
                var link = e_fadeOutLinkList[i];
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
            }
        }
        
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

