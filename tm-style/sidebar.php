
                <aside class="sidebar">
                    <h2 style="display:none;">SideBar</h2>

                    <section style="text-align: center;">
                        <a href="<?php bloginfo('rss2_url'); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/img/rss.png" width=60 />
                        </a>
                        <a href="http://twitter.com/#!/phi_jp">
                            <img src="<?php bloginfo('template_url'); ?>/img/twitter.png" width=60 />
                        </a>
                        <a href="http://www.google.co.jp/chrome/intl/ja/landing_ch.html">
                            <img src="<?php bloginfo('template_url'); ?>/img/chrome.png" width=60 />
                        </a>
                    </section>
                    
                    <?php dynamic_sidebar(); ?>
                    
                    <!--
                    <section>
                        <h2>OTHER</h2>
                        <ul>
                            <?php wp_register(); ?>
                            <li><?php wp_loginout(); ?></li>
                        </ul>
                    </section>
                    -->
                    
                    <section>
                        <h2>TWITTER</h2>
                        <script src="http://widgets.twimg.com/j/2/widget.js"></script>
                        <script>
                        new TWTR.Widget({
                          version: 2,
                          type: 'profile',
                          rpp: 4,
                          interval: 6000,
                          width: 'auto',
                          height: 300,
                          theme: {
                            shell: {
                              background: '#00089e',
                              color: '#ffffff'
                            },
                            tweets: {
                              background: '#ffffff',
                              color: '#000000',
                              links: '#00adcc'
                            }
                          },
                          features: {
                            scrollbar: true,
                            loop: false,
                            live: true,
                            hashtags: true,
                            timestamp: true,
                            avatars: false,
                            behavior: 'all'
                          }
                        }).render().setUser('phi_jp').start();
                        </script>
                    </section>
                </aside>
