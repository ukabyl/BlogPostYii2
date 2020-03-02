<?php 
use yii\widgets\LinkPager;
use yii\i18n\Formatter;
use yii\helpers\Url;
?>

<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                
                <?php foreach($articles as $article) { ?>
                    <article class="post post-list">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="post-thumb">
                                    <a href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><img src="<?= $article->getImage(); ?>" alt="" class="pull-left"></a>

                                    <a href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>" class="post-thumb-overlay text-center">
                                        <div class="text-uppercase text-center">View Post</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-content">
                                    <header class="entry-header text-uppercase">
                                        <h6><a href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><?= $article->category->title; ?></a></h6>

                                        <h1 class="entry-title"><a href="blog.html">
                                            <?= $article->title ?>
                                        </a></h1>
                                    </header>
                                    <div class="entry-content">
                                        <p>
                                            <?= $article->description ?>
                                        </p>
                                    </div>
                                    <div class="social-share">
                                        <span class="social-share-title pull-left text-capitalize">By Rubel On <?= $article->getDate() ?></span>
                                        <ul class="text-center pull-right">
                                            <li><a class="s-facebook" href="#"><i class="fa fa-eye"></i></a></li><?=(int) $article->viewed ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php } ?>
                
                <?php 
                    echo LinkPager::widget([
                        'pagination' => $pagination,
                    ]);
                ?>
            </div>
            <div class="col-md-4" data-sticky_column>
                <?= $this->render('/partials/sidebar', [
                    'popular' => $popular,
                    'recent' => $recent,
                    'categories' => $categories
                ])?> 
            </div>
        </div>
    </div>
</div>
<!-- end main content-->