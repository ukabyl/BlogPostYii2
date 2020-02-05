<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

    <!-- ****************************************** Main -->
    <main class="main">
        <div class="container"> 
            <div class="row align-items-center main_bg_mb"> 
                    <div class="col-xl-8 col-lg-7 col-12" >
                        <h1 class="main__title" data-aos="fade-up" data-aos-duration="1000">
                            Ищите лучшие туры?
                        </h1>
                        <button class="main__button" data-izimodal-open="#modal-form" data-aos="fade-up" data-aos-duration="2000">
                            Экономьте время и деньги
                        </button>
                        <div class="main__text" data-aos="fade-up" data-aos-duration="3000">    
                            Мы подберем для Вас идеальный тур <br>  
                            на основе ваших пожеланий за <b>30 минут!</b>
                        </div>

                        <button class="button-default main__button-default" data-izimodal-open="#modal-form" data-aos="fade-up" data-aos-duration="3000">
                            Оставить заявку
                        </button>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-12" >
                        <div class="main__form form" data-aos="fade-down" data-aos-duration="2000">
                            <span class="form__title">
                                Форма заявки
                            </span>
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
            </div>
            <div class="main__cards main-cards">
                <div class="main-cards__item" data-aos="fade-down" data-aos-duration="500">
                    <div class="main-cards__item-img">
                        <img src="img/clock-min.png" class="img-fluid">
                    </div>
                    <div class="main-cards__item-title">
                        Работаем без перерывов
                        и выходных
                    </div>
                </div>
                <div class="main-cards__item" data-aos="fade-down" data-aos-duration="600">
                    <div class="main-cards__item-img">
                        <img src="img/guarantee-price-min.png" class="img-fluid">
                    </div>
                    <div class="main-cards__item-title">
                        Гарантия лучшей цены
                        от 20 туроператоров
                        Казахстана
                    </div>
                </div>
                <div class="main-cards__item" data-aos="fade-down" data-aos-duration="700">
                    <div class="main-cards__item-img">
                        <img src="img/payment-min.png" class="img-fluid">
                    </div>
                    <div class="main-cards__item-title">
                        Наличный безналичный
                        расчет все закрывающие
                        документы
                    </div>
                </div>
                <div class="main-cards__item" data-aos="fade-down" data-aos-duration="800">
                    <div class="main-cards__item-img">
                        <img src="img/heart-min.png" class="img-fluid">
                    </div>
                    <div class="main-cards__item-title">
                        Заботимся о каждом клиенте
                        вплоть до возращения
                        на Родину.
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- ****************************************** Main -->

    <!-- ****************************************** Best Tours -->
    <section id="best-tour" class="best-tour">
        <div class="container">
            <h2 class="section__title">
                <span class="section__title_accent">Горячие</span>
                туры и <span class="section__title_accent">лучшие</span>
                предложения
                <span class="section__title-stick"></span>
            </h2>
            <div class="best-tour-cards best-tour__cards">
                <div class="slider-default">
                    <div class="best-tour-cards__item">
                        <span class="best-tour-cards__item-title">
                            Таиланд 150000 тнг
                        </span>
                        <p class="best-tour-cards__item-text">
                            3* - отель, на базе завтраков. Цена указана на 1 ч. при двухместном размещении.
                        </p>
                        <button class="button-default" data-izimodal-open="#modal-form">Получить описание тура</button>
                    </div>
                    <div class="best-tour-cards__item">
                        <span class="best-tour-cards__item-title">
                            Таиланд 150000 тнг
                        </span>
                        <p class="best-tour-cards__item-text">
                            3* - отель, на базе завтраков. Цена указана на 1 ч. при двухместном размещении.
                        </p>
                        <button class="button-default" data-izimodal-open="#modal-form">Получить описание тура</button>
                    </div>
                    <div class="best-tour-cards__item">
                        <span class="best-tour-cards__item-title">
                            Таиланд 150000 тнг
                        </span>
                        <p class="best-tour-cards__item-text">
                            3* - отель, на базе завтраков. Цена указана на 1 ч. при двухместном размещении.
                        </p>
                        <button class="button-default" data-izimodal-open="#modal-form">Получить описание тура</button>
                    </div>
                    <div class="best-tour-cards__item">
                        <span class="best-tour-cards__item-title">
                            Таиланд 150000 тнг
                        </span>
                        <p class="best-tour-cards__item-text">
                            3* - отель, на базе завтраков. Цена указана на 1 ч. при двухместном размещении.
                        </p>
                        <button class="button-default" data-izimodal-open="#modal-form">Получить описание тура</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****************************************** Best Tours -->

    <!-- ****************************************** News -->
    <section class="news section">
        <div class="container">
            <h2 data-aos="fade-up" data-aos-duration="1500" class="news__title">Будьте в курсе самых <b>выгодных предложений</b></h2>
            <p class="news__text" data-aos="fade-up" data-aos-duration="2000">
                Оставьте данные и получайте свежую информацию <br>
                по горячим турам
            </p>
            <button data-aos="fade-up" data-aos-duration="3000" class="button-default news__button" data-izimodal-open="#modal-form">
                Быть в курсе
            </button>           
        </div>
    </section>
    <!-- ****************************************** News -->

    <!-- ****************************************** Popular Tour -->
    <section id="global-tour" class="popular-tour section">
        <div class="container">
            <h2 data-aos="fade-up" data-aos-duration="1500" class="section__title">
                Популярные направления
                <span class="section__title-stick"></span>
            </h2>
            <p data-aos="fade-up" data-aos-duration="2000" class="section__text">
                Мы подберем для Вас идеальный тур на основе ваших пожеланий за <b class="section__text-accent">30 минут!</b>
            </p>

            <div class="popular-tour__cards mini-cards">
                <div class="mini-cards__item">
                    <div class="mini-cards__item-img">
                        <img src="img/popular-tour-placeholder-min.png">
                    </div>
                    <div class="mini-cards__item-country">
                        <img src="img/country-placeholder.png" alt="Австрия">
                        <span>Австрия</span>
                    </div>
                    <div class="mini-cards__item-price">
                        <span>от </span> <b>28 626 руб.</b>
                    </div>
                </div>
                <div class="mini-cards__item">
                    <div class="mini-cards__item-img">
                        <img src="img/popular-tour-placeholder-min.png">
                    </div>
                    <div class="mini-cards__item-country">
                        <img src="img/country-placeholder.png" alt="Австрия">
                        <span>Австрия</span>
                    </div>
                    <div class="mini-cards__item-price">
                        <span>от </span> <b>28 626 руб.</b>
                    </div>
                </div>
                <div class="mini-cards__item">
                    <div class="mini-cards__item-img">
                        <img src="img/popular-tour-placeholder-min.png">
                    </div>
                    <div class="mini-cards__item-country">
                        <img src="img/country-placeholder.png" alt="Австрия">
                        <span>Австрия</span>
                    </div>
                    <div class="mini-cards__item-price">
                        <span>от </span> <b>28 626 руб.</b>
                    </div>
                </div>
                <div class="mini-cards__item">
                    <div class="mini-cards__item-img">
                        <img src="img/popular-tour-placeholder-min.png">
                    </div>
                    <div class="mini-cards__item-country">
                        <img src="img/country-placeholder.png" alt="Австрия">
                        <span>Австрия</span>
                    </div>
                    <div class="mini-cards__item-price">
                        <span>от </span> <b>28 626 руб.</b>
                    </div>
                </div>
                <div class="mini-cards__item">
                    <div class="mini-cards__item-img">
                        <img src="img/popular-tour-placeholder-min.png">
                    </div>
                    <div class="mini-cards__item-country">
                        <img src="img/country-placeholder.png" alt="Австрия">
                        <span>Австрия</span>
                    </div>
                    <div class="mini-cards__item-price">
                        <span>от </span> <b>28 626 руб.</b>
                    </div>
                </div>
                <div class="mini-cards__item">
                    <div class="mini-cards__item-img">
                        <img src="img/popular-tour-placeholder-min.png">
                    </div>
                    <div class="mini-cards__item-country">
                        <img src="img/country-placeholder.png" alt="Австрия">
                        <span>Австрия</span>
                    </div>
                    <div class="mini-cards__item-price">
                        <span>от </span> <b>28 626 руб.</b>
                    </div>
                </div>
                <div class="mini-cards__item">
                    <div class="mini-cards__item-img">
                        <img src="img/popular-tour-placeholder-min.png">
                    </div>
                    <div class="mini-cards__item-country">
                        <img src="img/country-placeholder.png" alt="Австрия">
                        <span>Австрия</span>
                    </div>
                    <div class="mini-cards__item-price">
                        <span>от </span> <b>28 626 руб.</b>
                    </div>
                </div>
                <div class="mini-cards__item">
                    <div class="mini-cards__item-img">
                        <img src="img/popular-tour-placeholder-min.png">
                    </div>
                    <div class="mini-cards__item-country">
                        <img src="img/country-placeholder.png" alt="Австрия">
                        <span>Австрия</span>
                    </div>
                    <div class="mini-cards__item-price">
                        <span>от </span> <b>28 626 руб.</b>
                    </div>
                </div>
                <div class="mini-cards__item">
                    <div class="mini-cards__item-img">
                        <img src="img/popular-tour-placeholder-min.png">
                    </div>
                    <div class="mini-cards__item-country">
                        <img src="img/country-placeholder.png" alt="Австрия">
                        <span>Австрия</span>
                    </div>
                    <div class="mini-cards__item-price">
                        <span>от </span> <b>28 626 руб.</b>
                    </div>
                </div>
                <div class="mini-cards__item">
                    <div class="mini-cards__item-img">
                        <img src="img/popular-tour-placeholder-min.png">
                    </div>
                    <div class="mini-cards__item-country">
                        <img src="img/country-placeholder.png" alt="Австрия">
                        <span>Австрия</span>
                    </div>
                    <div class="mini-cards__item-price">
                        <span>от </span> <b>28 626 руб.</b>
                    </div>
                </div>
                <div class="mini-cards__item">
                    <div class="mini-cards__item-img">
                        <img src="img/popular-tour-placeholder-min.png">
                    </div>
                    <div class="mini-cards__item-country">
                        <img src="img/country-placeholder.png" alt="Австрия">
                        <span>Австрия</span>
                    </div>
                    <div class="mini-cards__item-price">
                        <span>от </span> <b>28 626 руб.</b>
                    </div>
                </div>
                <div class="mini-cards__item">
                    <div class="mini-cards__item-img">
                        <img src="img/popular-tour-placeholder-min.png">
                    </div>
                    <div class="mini-cards__item-country">
                        <img src="img/country-placeholder.png" alt="Австрия">
                        <span>Австрия</span>
                    </div>
                    <div class="mini-cards__item-price">
                        <span>от </span> <b>28 626 руб.</b>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****************************************** Popular Tour -->

    <!-- ****************************************** Local Touris -->
    <section id="local-tourism section" class="local-tourism">
        <div class="container">
            <h2 data-aos="fade-up" data-aos-duration="1500" class="section__title">
                Внутренний туризм
                <span class="section__title-stick"></span>
            </h2>
            <p class="section__text" data-aos="fade-up" data-aos-duration="2000">
                Современный Казахстан манит самыми разнообразными экскурсиями и программами: знаменитый высокогорный каток Медео, первый в мире космодром Байконур, грандиозный каньон Чарын, уникальные суфийские памятники, древние города Тараз, Шымкент и Туркестан. Войлочные юрты, целебный кумыс, бескрайние степи - Казахстан запомнится вам яркой и своеобразной культурой кочевников.     
            </b>
            </p>
            <div class="local-tourism__cards local-tourism-cards">
                <div class="local-tourism-cards__item">
                    <div class="local-tourism-cards__item-title">
                        Название экскурсии
                    </div>
                    <div class="local-tourism-cards__item-price">
                        <span>от</span> <b>124 000 тг.</b>
                    </div>
                    <button class="local-tourism-cards__item-btn" data-izimodal-open="#modal-form">
                        Подробнее
                    </button>
                </div>
                <div class="local-tourism-cards__item">
                    <div class="local-tourism-cards__item-title">
                        Название экскурсии
                    </div>
                    <div class="local-tourism-cards__item-price">
                        <span>от</span> <b>124 000 тг.</b>
                    </div>
                    <button class="local-tourism-cards__item-btn" data-izimodal-open="#modal-form">
                        Подробнее
                    </button>
                </div>
                <div class="local-tourism-cards__item">
                    <div class="local-tourism-cards__item-title">
                        Название экскурсии
                    </div>
                    <div class="local-tourism-cards__item-price">
                        <span>от</span> <b>124 000 тг.</b>
                    </div>
                    <button class="local-tourism-cards__item-btn" data-izimodal-open="#modal-form">
                        Подробнее
                    </button>
                </div>
                <div class="local-tourism-cards__item">
                    <div class="local-tourism-cards__item-title">
                        Название экскурсии
                    </div>
                    <div class="local-tourism-cards__item-price">
                        <span>от</span> <b>124 000 тг.</b>
                    </div>
                    <button class="local-tourism-cards__item-btn" data-izimodal-open="#modal-form">
                        Подробнее
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- ****************************************** Local Touris -->

    <!-- ****************************************** About -->
    <section id="about" class="about section">
        <div class="container">
            <h2 class="section__title" data-aos="fade-up" data-aos-duration="1500">
                О компании
                <span class="section__title-stick"></span>
            </h2>
            <p class="section__text" data-aos="fade-up" data-aos-duration="2000">
                Компания «GARANT Tour» - турфирма которой доверяют свое время и свой отдых, семейный либо деловая поездка. Турфирма «GARANT Tour» удостоена высокой награды Turkistan Tourism Awards 2019 г. Здесь трудятся высококвалифицированные специалисты, которые готовы сделать Ваш отдых интересным и не забываемым. Профессиональные менеджеры агентства доступ которых 24\7, организуют Вам путешествия максимально удовлетворяющие все потребности гостя. «GARANT Tour» работает только с надежными партнерами, поэтому гарантирует высокое качество всех туров. Особое внимание уделяем развитию внутреннего туризма и в этом направление предоставляем широкий спектр услуг. Мы ценим Ваше время и Ваше доверие!  
            </b>
            </p>
        </div>
    </section>
    <!-- ****************************************** About -->

    <!-- ****************************************** Team -->
    <section id="team" class="team section">
        <div class="container">
            <h2 class="section__title">
                Наша компания в лицах
                <span class="section__title-stick"></span>
            </h2>
            <div class="team__cards team-cards">
                <div class="team-cards__item">
                    <div class="team-cards__person">
                        <img src="img/employee-placeholder-min.png">
                    </div>
                    <div class="team-cards__name">
                        Дина Колесникова
                    </div>
                    <div class="team-cards__job">
                        Менеджер компании
                    </div>
                </div>
                <div class="team-cards__item">
                    <div class="team-cards__person">
                        <img src="img/employee-placeholder-min.png">
                    </div>
                    <div class="team-cards__name">
                        Дина Колесникова
                    </div>
                    <div class="team-cards__job">
                        Менеджер компании
                    </div>
                </div>
                <div class="team-cards__item">
                    <div class="team-cards__person">
                        <img src="img/employee-placeholder-min.png">
                    </div>
                    <div class="team-cards__name">
                        Дина Колесникова
                    </div>
                    <div class="team-cards__job">
                        Менеджер компании
                    </div>
                </div>
                <div class="team-cards__item">
                    <div class="team-cards__person">
                        <img src="img/employee-placeholder-min.png">
                    </div>
                    <div class="team-cards__name">
                        Дина Колесникова
                    </div>
                    <div class="team-cards__job">
                        Менеджер компании
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****************************************** Team -->

    <!-- ****************************************** FAQ -->
    <section id="faq" class="faq section">
        <div class="container">
            <h2 class="section__title">
                Часто задаваемые вопросы
                <span class="section__title-stick"></span>
            </h2>
            <div class="faq__content">
                <div class="faq__tab faq-tab tab">
                    <ul class="tab__nav faq-tab__nav">
                        <li class="tab__nav-item faq-tab__nav-item">
                            <span class="faq-tab__nav-link" data-link="#0">Выбор тура</span>
                        </li>
                        <li class="tab__nav-item faq-tab__nav-item">
                            <span class="faq-tab__nav-link" data-link="#1">Оплата тура</span>                       
                        </li>
                        <li class="tab__nav-item faq-tab__nav-item">
                            <span class="faq-tab__nav-link" data-link="#2">После покупки тура</span>
                        </li>
                        <li class="tab__nav-item faq-tab__nav-item">
                            <span class="faq-tab__nav-link" data-link="#3">Во время отдыха</span>
                        </li>
                        <li class="tab__nav-item faq-tab__nav-item">
                            <span class="faq-tab__nav-link" data-link="#4">Визы</span>
                        </li>
                        <li class="tab__nav-item faq-tab__nav-item">
                            <span class="faq-tab__nav-link" data-link="#5">После путешествия</span>
                        </li>
                    </ul>
                    <div class="tab__content faq-tab__content">
                        <div id="0" class="tab__content-item faq-tabs__content-item">
                            <ul class="faq-accordion accordionjs">

                            <!-- Section 1 -->
                            <li>
                                <div>В чем отличие Travelata.ru от обычных турагентств? </div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, voluptas!
                                </div>
                            </li>

                            <!-- Section 2 -->
                            <li>
                                <div>Почему у вас выгоднее покупать туры чем в других агентствах?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </li>

                            <!-- Section 3 -->
                            <li>
                                <div>Как найти конкретный отель в системе поиска?</div>
                                <div>
                                    Lorem ipsum dolor sit amet.
                                </div>
                            </li>

                            <!-- Section 4 -->
                            <li>
                                <div>Стоимость тура на сайте является актуальной? Могут ли быть доплаты?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil maiores consectetur libero temporibus perspiciatis minus obcaecati fugiat aspernatur similique assumenda atque eos, molestias eveniet nulla repellat? Ratione possimus omnis consectetur?
                                </div>
                            </li>

                            <!-- Section 5 -->
                            <li>
                                <div>Где на сайте можно найти "горящие" предложения?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </li>

                            <!-- Section 6 -->
                            <li>
                                <div>Как я могу проверить надежность туроператора до момента покупки тура?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit totam maxime odit quo, harum unde.
                                </div>
                            </li>

                            </ul>
                        </div>
                        <div id="1" class="tab__content-item faq-tabs__content-item">
                            <ul class="faq-accordion accordionjs">

                            <!-- Section 1 -->
                            <li>
                                <div>В чем отличие Travelata.ru от обычных турагентств? </div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, voluptas!
                                </div>
                            </li>

                            <!-- Section 2 -->
                            <li>
                                <div>Почему у вас выгоднее покупать туры чем в других агентствах?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </li>

                            <!-- Section 3 -->
                            <li>
                                <div>Как найти конкретный отель в системе поиска?</div>
                                <div>
                                    Lorem ipsum dolor sit amet.
                                </div>
                            </li>

                            <!-- Section 4 -->
                            <li>
                                <div>Стоимость тура на сайте является актуальной? Могут ли быть доплаты?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil maiores consectetur libero temporibus perspiciatis minus obcaecati fugiat aspernatur similique assumenda atque eos, molestias eveniet nulla repellat? Ratione possimus omnis consectetur?
                                </div>
                            </li>

                            <!-- Section 5 -->
                            <li>
                                <div>Где на сайте можно найти "горящие" предложения?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </li>

                            <!-- Section 6 -->
                            <li>
                                <div>Как я могу проверить надежность туроператора до момента покупки тура?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit totam maxime odit quo, harum unde.
                                </div>
                            </li>

                            </ul>
                        </div>
                        <div id="2" class="tab__content-item faq-tabs__content-item">
                            <ul class="faq-accordion accordionjs">

                            <!-- Section 1 -->
                            <li>
                                <div>В чем отличие Travelata.ru от обычных турагентств? </div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, voluptas!
                                </div>
                            </li>

                            <!-- Section 2 -->
                            <li>
                                <div>Почему у вас выгоднее покупать туры чем в других агентствах?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </li>

                            <!-- Section 3 -->
                            <li>
                                <div>Как найти конкретный отель в системе поиска?</div>
                                <div>
                                    Lorem ipsum dolor sit amet.
                                </div>
                            </li>

                            <!-- Section 4 -->
                            <li>
                                <div>Стоимость тура на сайте является актуальной? Могут ли быть доплаты?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil maiores consectetur libero temporibus perspiciatis minus obcaecati fugiat aspernatur similique assumenda atque eos, molestias eveniet nulla repellat? Ratione possimus omnis consectetur?
                                </div>
                            </li>

                            <!-- Section 5 -->
                            <li>
                                <div>Где на сайте можно найти "горящие" предложения?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </li>

                            <!-- Section 6 -->
                            <li>
                                <div>Как я могу проверить надежность туроператора до момента покупки тура?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit totam maxime odit quo, harum unde.
                                </div>
                            </li>

                            </ul>
                        </div>
                        <div id="3" class="tab__content-item faq-tabs__content-item">
                            <ul class="faq-accordion accordionjs">

                            <!-- Section 1 -->
                            <li>
                                <div>В чем отличие Travelata.ru от обычных турагентств? </div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, voluptas!
                                </div>
                            </li>

                            <!-- Section 2 -->
                            <li>
                                <div>Почему у вас выгоднее покупать туры чем в других агентствах?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </li>

                            <!-- Section 3 -->
                            <li>
                                <div>Как найти конкретный отель в системе поиска?</div>
                                <div>
                                    Lorem ipsum dolor sit amet.
                                </div>
                            </li>

                            <!-- Section 4 -->
                            <li>
                                <div>Стоимость тура на сайте является актуальной? Могут ли быть доплаты?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil maiores consectetur libero temporibus perspiciatis minus obcaecati fugiat aspernatur similique assumenda atque eos, molestias eveniet nulla repellat? Ratione possimus omnis consectetur?
                                </div>
                            </li>

                            <!-- Section 5 -->
                            <li>
                                <div>Где на сайте можно найти "горящие" предложения?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </li>

                            <!-- Section 6 -->
                            <li>
                                <div>Как я могу проверить надежность туроператора до момента покупки тура?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit totam maxime odit quo, harum unde.
                                </div>
                            </li>

                            </ul>
                        </div>
                        <div id="4" class="tab__content-item faq-tabs__content-item">
                            <ul class="faq-accordion accordionjs">

                            <!-- Section 1 -->
                            <li>
                                <div>В чем отличие Travelata.ru от обычных турагентств? </div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, voluptas!
                                </div>
                            </li>

                            <!-- Section 2 -->
                            <li>
                                <div>Почему у вас выгоднее покупать туры чем в других агентствах?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </li>

                            <!-- Section 3 -->
                            <li>
                                <div>Как найти конкретный отель в системе поиска?</div>
                                <div>
                                    Lorem ipsum dolor sit amet.
                                </div>
                            </li>

                            <!-- Section 4 -->
                            <li>
                                <div>Стоимость тура на сайте является актуальной? Могут ли быть доплаты?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil maiores consectetur libero temporibus perspiciatis minus obcaecati fugiat aspernatur similique assumenda atque eos, molestias eveniet nulla repellat? Ratione possimus omnis consectetur?
                                </div>
                            </li>

                            <!-- Section 5 -->
                            <li>
                                <div>Где на сайте можно найти "горящие" предложения?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </li>

                            <!-- Section 6 -->
                            <li>
                                <div>Как я могу проверить надежность туроператора до момента покупки тура?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit totam maxime odit quo, harum unde.
                                </div>
                            </li>

                            </ul>
                        </div>
                        <div id="5" class="tab__content-item faq-tabs__content-item">
                            <ul class="faq-accordion accordionjs">

                            <!-- Section 1 -->
                            <li>
                                <div>В чем отличие Travelata.ru от обычных турагентств? </div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, voluptas!
                                </div>
                            </li>

                            <!-- Section 2 -->
                            <li>
                                <div>Почему у вас выгоднее покупать туры чем в других агентствах?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </li>

                            <!-- Section 3 -->
                            <li>
                                <div>Как найти конкретный отель в системе поиска?</div>
                                <div>
                                    Lorem ipsum dolor sit amet.
                                </div>
                            </li>

                            <!-- Section 4 -->
                            <li>
                                <div>Стоимость тура на сайте является актуальной? Могут ли быть доплаты?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil maiores consectetur libero temporibus perspiciatis minus obcaecati fugiat aspernatur similique assumenda atque eos, molestias eveniet nulla repellat? Ratione possimus omnis consectetur?
                                </div>
                            </li>

                            <!-- Section 5 -->
                            <li>
                                <div>Где на сайте можно найти "горящие" предложения?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </li>

                            <!-- Section 6 -->
                            <li>
                                <div>Как я могу проверить надежность туроператора до момента покупки тура?</div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit totam maxime odit quo, harum unde.
                                </div>
                            </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****************************************** FAQ -->

    <!-- ****************************************** Comment -->
    <section id="comment" class="comment section">
        <div class="container">
            <h2 class="section__title">
                Отзывы наших счастливых клиентов
                <span class="section__title-stick"></span>
            </h2>
            <div class="comment__cards comment-cards">
                <div class="comment-cards__item">
                    <div class="comment-cards__item-img">
                        <img src="img/comment-placeholder-min.png">
                    </div>
                    <div class="comment-cards__item-info">
                        <span>Египет</span>
                        <span>28.05.2019</span>
                    </div>
                    <div class="comment-cards__item-name">
                        Маша и Миша
                    </div>
                    <div class="comment-cards__item-text">
                        Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона
                    </div>
                </div>
                <div class="comment-cards__item">
                    <div class="comment-cards__item-img">
                        <img src="img/comment-placeholder-min.png">
                    </div>
                    <div class="comment-cards__item-info">
                        <span>Египет</span>
                        <span>28.05.2019</span>
                    </div>
                    <div class="comment-cards__item-name">
                        Маша и Миша
                    </div>
                    <div class="comment-cards__item-text">
                        Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона
                    </div>
                </div>
                <div class="comment-cards__item">
                    <div class="comment-cards__item-img">
                        <img src="img/comment-placeholder-min.png">
                    </div>
                    <div class="comment-cards__item-info">
                        <span>Египет</span>
                        <span>28.05.2019</span>
                    </div>
                    <div class="comment-cards__item-name">
                        Маша и Миша
                    </div>
                    <div class="comment-cards__item-text">
                        Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****************************************** Comment -->
