<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

// AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>">
<head>

    <meta charset="<?php echo Yii::$app->charset ?>">
    <!-- <base href="/"> -->

    <title>Garant Tour</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Template Basic Images Start -->
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="icon" href="img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
    <!-- Template Basic Images End -->
    
    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#826a45">
    <!-- Custom Browsers Color End -->


    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="libs/slick/slick/slick.css">
    <link rel="stylesheet" href="libs/hamburgers/dist/hamburgers.min.css">
    <link rel="stylesheet" href="libs/accordion/accordion.css">
    <link rel="stylesheet" href="libs/iziModal/css/iziModal.min.css">
    <link rel="stylesheet" href="libs/aos/aos.css">
    <link rel="stylesheet" href="icons/style.css">

    <link rel="stylesheet" href="css/main.min.css">

    <?php echo $this->head() ?>
</head>

<body>
<?php echo $this->beginbody() ?>


    <!-- ****************************************** Loader -->
    <div class="loader"></div>
    <!-- ****************************************** Loader -->

    <!-- ****************************************** Header -->
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-top__wrapper">
                    <div class="header-top__block">
                        <div class="socials">
                            <a class="socials__item" href="/"><i class="icon-telegram"></i></a>
                            <a class="socials__item" href="/"><i class="icon-instagram"></i></a>
                            <a class="socials__item" href="/"><i class="icon-whatsapp"></i></a> 
                        </div>
                        <div class="lang-ds">
                            <a href="/" class="lang-ds__item">kz</a> <span class="lang-ds__stick">/</span>
                            <a href="/" class="lang-ds__item active">ru</a> <span class="lang-ds__stick">/</span>
                            <a href="/" class="lang-ds__item">eng</a>
                        </div>
                        <div class="header-top__hamburger">
                            <div class="hamburger sidebar-trigger">
                              <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-top__block">
                        <div class="header__logo logo">
                            <img src="img/logo-min.png" alt="Garant Tour" class="logo-image img-fluid">
                        </div>
                    </div>
                    <div class="header-top__block">
                        <button class="button header-top__block-button button_round" data-izimodal-open="#modal-form">Подберите мне тур</button>
                        <div class="phone-numbers">
                            <a href="tel:+77789477570" class="phone-numbers__item">+ 7 778 947 7570</a>
                            <a href="tel:+77789477570" class="phone-numbers__item">+ 7 778 947 7570</a>
                        </div>
                        <div class="lang-mb">
                            <select>
                                <option value="kz">kz</option>
                                <option value="ru">ru</option>
                                <option value="eng">eng</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <nav class="navigation">
                    <ul class="navigation__list nav-list">
                        <li class="nav-list__item">
                            <a href="/" class="nav-list__link">Главная</a>
                        </li>
                        <li class="nav-list__item">
                            <a href="#best-tour" class="nav-list__link anchor">Горячие туры</a>
                        </li>
                        <li class="nav-list__item">
                            <a href="#global-tour" class="nav-list__link anchor">Выездной туризм</a>
                        </li>
                        <li class="nav-list__item">
                            <a href="#local-tourism" class="nav-list__link anchor">Внутренний туризм</a>
                        </li>
                        <li class="nav-list__item">
                            <a href="#about" class="nav-list__link anchor">О компании</a>
                        </li>
                        <li class="nav-list__item">
                            <a href="#team" class="nav-list__link anchor">Наша команда</a>
                        </li>
                        <li class="nav-list__item">
                            <a href="#faq" class="nav-list__link anchor">Частые вопросы</a>
                        </li>
                        <li class="nav-list__item">
                            <a href="#comment" class="nav-list__link anchor">Наши отзывы</a>
                        </li>
                        <li class="nav-list__item">
                            <a href="#contact" class="nav-list__link anchor">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- ****************************************** Header -->


    <?php echo $content ?>


    <!-- ****************************************** Map -->
    <section id="contact" class="map">
        <div class="map__constructor">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A28c95d264d39d55e9a4615add700857b7449ee0bfd71a848ca6d339e6e43138a&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <div class="contact map__contact" >
            <b class="contact__title" data-aos="fade-right" data-aos-duration="500"
                data-aos-anchor-placement="top-bottom"
            >
                Контакты
            </b>
            <p class="contact__address" data-aos="fade-left" data-aos-duration="700"
                data-aos-anchor-placement="top-bottom"
            >
                Казахстан Город: Шымкент
                Ул. Желтоксан 17
            </p>
            <b class="contact__question" data-aos="fade-right" data-aos-duration="900"
                data-aos-anchor-placement="top-bottom"
            >
                Остались вопросы?
            </b>
            <button class="button-default contact__button" data-izimodal-open="#modal-form" data-aos="fade-left" data-aos-duration="1200"
                data-aos-anchor-placement="top-bottom"
            >
                Заказать консультацию
            </button>               
        </div>
    </section>
    <!-- ****************************************** Map -->

    <!-- ****************************************** Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__content">
                <div class="footer__left">
                <div class="footer__logo">
                    <img src="img/logo-min.png" align="Garant Tour">
                </div>
                <span>Приобретайте билеты <br>быстро и надёжно</span>
            </div>
            <div class="footer__right">
                <div class="lang-ds footer__lang-ds">
                    <a href="/" class="lang-ds__item">kz</a> <span class="lang-ds__stick">/</span>
                    <a href="/" class="lang-ds__item active">ru</a> <span class="lang-ds__stick">/</span>
                    <a href="/" class="lang-ds__item">eng</a>
                </div>
                <button class="button-default footer__button" data-izimodal-open="#modal-form">Подберите мне тур</button>
                <div class="phone-numbers footer__phone-numbers">
                    <a href="tel:+77789477570" class="phone-numbers__item">+ 7 778 947 7570</a>
                    <a href="tel:+77789477570" class="phone-numbers__item">+ 7 778 947 7570</a>
                </div>
            </div>
            </div>
        </div>
    </footer>
    <!-- ****************************************** Footer -->

    <!-- ****************************************** Helper -->
    <div class="helper">
        <div class="helper__close">
            <img src="img/close.png" align="Close" class="img-fluid">
        </div>
        <div class="helper__manager">
            <img src="img/manager-placeholder-min.png" class="img-fluid">
        </div>
        <div class="helper__inner">
            <div class="helper__title">
                Не знаете с чего начать?
            </div>
            <div class="helper__text">
                Наш менеджер поможет Вам подобрать
                тур вашей мечты
            </div>
            <div class="helper__contacts">
                <button class="button-default helper__button" data-izimodal-open="#modal-form">Подберите мне тур</button>
                <a href="/" class="helper__contacts-item icon-telegram"></a>
                <a href="/" class="helper__contacts-item icon-instagram"></a>
                <a href="/" class="helper__contacts-item icon-whatsapp"></a>
            </div>
        </div>
    </div>
    <!-- ****************************************** Helper -->

    <!-- ****************************************** Manager trigger -->
    <div class="manager">
        <img src="img/manager-placeholder-min.png" class="img-fluid">
    </div>
    <!-- ****************************************** Manager trigger -->

    <!-- ****************************************** SideBar -->
    <div id="sidebar" class="sidebar">          
            <div class="sidebar__wrapper">
                <div class="sidebar__close close-sidebar">
                    <img src="img/close.png" align="Close Sidebar">
                </div>
                <div class="sidebar-top">
                    <div class="sidebar-top__inner">
                        <img src="img/logo-min.png" class="img-fluid sidebar-top__img">
                    </div>
                </div>
            <ul class="mb-menu">
                    <li class="mb-menu-item">
                        <a href="/" class="mb-menu-item-link close-sidebar"><span>Главная</span></a>
                    </li>
                    <li class="mb-menu-item">
                        <a href="#best-tour" class="mb-menu-item-link close-sidebar anchor"><span>Горячие туры</span></a>
                    </li>
                    <li class="mb-menu-item">
                        <a href="#global-tour" class="mb-menu-item-link close-sidebar anchor"><span>Выездной туризм</span></a>
                    </li>
                    <li class="mb-menu-item">
                        <a href="#local-tourism" class="mb-menu-item-link close-sidebar anchor"><span>Внутренний туризм</span></a>
                    </li>
                    <li class="mb-menu-item">
                        <a href="#about" class="mb-menu-item-link close-sidebar anchor"><span>О компании</span></a>
                    </li>
                    <li class="mb-menu-item">
                        <a href="#faq" class="mb-menu-item-link close-sidebar anchor"><span>Частые вопросы</span></a>
                    </li>
                    <li class="mb-menu-item">
                        <a href="#comment" class="mb-menu-item-link close-sidebar anchor"><span>Наши отзывы</span></a>
                    </li>
                    <li class="mb-menu-item">
                        <a href="#team" class="mb-menu-item-link close-sidebar anchor"><span>Наша команда</span></a>
                    </li>
                    <li class="mb-menu-item">
                        <a href="#contact" class="mb-menu-item-link close-sidebar anchor"><span>Контакты</span></a>
                    </li>
                </ul>
          </div>
    </div>
    <!-- ****************************************** SideBar -->

    <!-- ****************************************** Modal Form -->
        <div id="modal-form" class="modal-form" data-iziModal-title="Форма заявки">    
            <div class="form">
                    <form>
                        <div class="form__wrapper">
                            <input autofocus="false" required name="area" placeholder="Направление" type="text" class="form__input">
                            <input autofocus="false" required name="phone" placeholder="+7 777 154 44 38" type="tel" class="tel-mask form__input">
                            <input autofocus="false" required name="name" placeholder="Ваше имя" type="text" class="form__input">
                            <button class="form__button" type="submit">Отправить заявку</button>
                            <label class="form__checked">
                                <input autofocus="false" required type="checkbox" name="agreed">
                                <span>Согласен(-а) на обработку данных</span>
                            </label>
                        </div>
                    </form>
                </div>
        </div>
    <!-- ****************************************** Modal Form -->

    <!-- ****************************************** Success modal -->
        <div id="modal-success" class="modal-success" data-izimodal-transitionin="bounceInDown"
                data-izimodal-transitionout="fadeOutUp" 
        >
            <h5>Ваша заявка успешно было отправлено.</h5>
            <h6 >В скором времени мы свяжемся с вами.</h6>
            <button data-izimodal-close="" class="modal-success__close">
                    &#10008;            
            </button>
        </div>
    <!-- ****************************************** Success modal -->

    <!-- ****************************************** Modal Succes -->
    <!-- ****************************************** Modal Succes -->
    
    
    <script src="libs/jquery/dist/jquery.min.js"></script>
    <script src="libs/slick/slick/slick.js"></script>
    <script src="libs/accordion/accordion.min.js"></script>
    <script src="libs/simpler-sidebar/src/simpler-sidebar.js"></script>
    <script src="libs/iziModal/js/iziModal.min.js"></script>
    <script src="libs/maskinput/maskinput.js"></script>
    <script src="libs/aos/aos.js"></script>
    <script src="js/scripts.js"></script>


<?php echo $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

