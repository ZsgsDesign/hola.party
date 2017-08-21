<?php if(!class_exists("View", false)) exit("no direct access allowed");?>
    <div class="outer">
        <section id="main">
            <article class="article">
                <?php $_foreach_r_counter = 0; $_foreach_r_total = count($records);?><?php foreach( $records as $r ) : ?><?php $_foreach_r_index = $_foreach_r_counter;$_foreach_r_iteration = $_foreach_r_counter + 1;$_foreach_r_first = ($_foreach_r_counter == 0);$_foreach_r_last = ($_foreach_r_counter == $_foreach_r_total - 1);$_foreach_r_counter++;?>          
                    <div class="card">
                        <div class="card-image">
                            <img src="<?php echo htmlspecialchars($r['img'], ENT_QUOTES, "UTF-8"); ?>">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p><h1 class="article-title"><?php echo htmlspecialchars($r['title'], ENT_QUOTES, "UTF-8"); ?></h1><p style="margin-top:5px;"><?php echo htmlspecialchars($r['desc'], ENT_QUOTES, "UTF-8"); ?></p></p>
                            </div>
                            <div class="card-action">
                                <a href="/talk-<?php echo htmlspecialchars($r['id'], ENT_QUOTES, "UTF-8"); ?>">了解更多</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </article>
        </section>
        <aside id="sidebar">
            <div class="widget-wrap">
                <h3 class="widget-title">最新文章</h3>
                <div class="widget">
                    <ul>
                        <li>
                            <a href="https://ihola.one/2017/08/holaxluogu/">¡Hola! x 洛谷</a>
                        </li>
                        <li>
                            <a href="https://ihola.one/2017/08/conf17-souvenirs/">¡Hola! Conf 2017 纪念品发售</a>
                        </li>
                        <li>
                            <a href="https://ihola.one/2017/07/holaconf17-speaker/">¡Hola! Conf 2017 讲者</a>
                        </li>
                        <li>
                            <a href="https://ihola.one/2017/06/the-concept-video/">¡Hola! 概念宣传片发布</a>
                        </li>
                        <li>
                            <a href="https://ihola.one/2017/06/call-for-volunteer/">志愿者招募</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="widget-wrap">
                <h3 class="widget-title">合作伙伴 &amp; 赞助商</h3>
                <div class="widget">
                    <ul>
                        <li>
                            <a href="https://www.luogu.org?utm_source=ihola">
                                <img src="https://ihola.one/partners/luogu-31f15bf47677c2aec75b905bbe6836a3.png" alt="洛谷" class="hola-partner-logo">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
    </div>