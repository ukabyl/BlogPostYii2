<div class="primary-sidebar">
                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>
                        <?php foreach($popular as $article) { ?>
                            <div class="popular-post">


                            <a href="#" class="popular-img"><img src="<?= $article->getImage() ?>" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase"><?= $article->title ?></a>
                                <span class="p-date"><?= $article->getDate() ?></span>

                            </div>
                            </div>
                        <?php }  ?>
                    </aside>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>
                        <?php foreach ($recent as $article) { ?>
                            
                            <div class="thumb-latest-posts">


                                <div class="media">
                                    <div class="media-left">
                                        <a href="#" class="popular-img"><img src="<?= $article->getImage() ?>" alt="">

                                            <div class="p-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="p-content">
                                        <a href="#" class="text-uppercase"><?= $article->title?></a>
                                        <span class="p-date"><?= $article->getDate() ?></span>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>

                    </aside>
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Categories</h3>
                        <ul>
                            <?php foreach ($categories as $category) { ?>    
                            
                            <li>
                                <a href="#"><?= $category->title ?></a>
                                <span class="post-count pull-right"> (<?= $category->getArticlesCount(); ?>)</span>
                            </li>

                            <?php } ?>
                        </ul>
                    </aside>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Follow@Instagram</h3>

                        <div class="instragram-follow">
                            <a href="#">
                                <img src="/public/images/ins-flow.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="/public/images/ins-flow.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="/public/images/ins-flow.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="/public/images/ins-flow.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="/public/images/ins-flow.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="/public/images/ins-flow.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="/public/images/ins-flow.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="/public/images/ins-flow.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="/public/images/ins-flow.jpg" alt="">
                            </a>

                        </div>

                    </aside>
                </div>