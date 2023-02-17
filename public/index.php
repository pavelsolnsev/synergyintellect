<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$version = isset($_GET['version']) ? urldecode( strtolower($_GET['version']) ) : '';
$partner = isset($_GET['partner']) ? urldecode( strtolower($_GET['partner']) ) : '';

include_once $ROOT . 'version.php';

include_once $ROOT . 'config.php';
include_once $ROOT . 'elastic.php';

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <base href="<?= $BASE_HREF ?>">

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?= $GTM_ID?>');</script>
  <!-- End Google Tag Manager -->

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(86751165, "init", {
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true,
          webvisor:true,
          ecommerce:"dataLayer"
    });
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/86751165" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->

  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <?php if ($keywords != null) { ?>
  <meta name="keywords" content="<?= $keywords ?>">
  <?php } ?>

  <title><?= $title ?></title>
  <meta property="og:title" content="<?= $title ?>">
  <meta property="og:description" content="<?= $description ?>">
  <meta property="og:url" content="//<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
  <meta property="og:image" content="//<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>img/common/share.jpg">
  <meta name="facebook-domain-verification" content="uf7bkn17s13o480dd1tmv7it3kw42o" />
  <link rel="image_src" href="//<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>img/common/share.jpg">

	<link rel="stylesheet" href="https://cdn.synergy.ru/libs/bootstrap/bootstrap-4.5.2.min.css">
  <link rel="stylesheet" href="https://cdn.synergy.ru/libs/fancybox/jquery.fancybox-3.5.7.min.css" />

  
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  

	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="shortcut icon">

</head>



<body class="<?= $version ? 'version-' . $version : '' ?>">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $GTM_ID ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


  

  <div class="wrapper">
    
    
    <header class="header" id="header">
    <div class="container header__flex">
        <div class="header__content">
            <div class="header__menu">
                <svg class="ham hamRotate hamR" viewBox="0 0 100 100" width="50" onclick="this.classList.toggle('active')">
                    <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                    <path class="line middle" d="m 70,50 h -40" />
                    <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
                </svg>
            </div>
            <div class="header__logos">
                <img src="img/header/logo.png" alt="logo-synergy" class="header__logo">
            </div>
            <div class="header__nav">
                <?php if ( $version == 'webinar' ) { ?>
                <?php } else { ?>
                <a href="#about" class="header__nav-link scroll">О&nbsp;центре</a>
                <a href="#program" class="header__nav-link scroll">Направления обучения</a>
                <a href="#who" class="header__nav-link scroll">Для кого</a>
                <a href="#format" class="header__nav-link scroll">Формат обучения</a>
                <?php } ?>
            </div>
            <?php if ( $version == 'webinar' ) { ?>
            <?php } else { ?>
            <div class="header__list">
                <a href="#about" class="header__nav-link scroll">О&nbsp;центре</a>
                <a href="#program" class="header__nav-link scroll">Направления обучения</a>
                <a href="#who" class="header__nav-link scroll">Для кого</a>
                <a href="#format" class="header__nav-link scroll">Формат обучения</a>
            </div>
            <?php } ?>
        </div>
        <div class="header__flex-icons d-flex">
             <!-- <a href="https://www.instagram.com/intellect_synergy/" target="_blank" class="header__flex-icon">
                <svg width="35" height="35" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 44C34.1502 44 44 34.1502 44 22C44 9.84975 34.1502 0 22 0C9.84975 0 0 9.84975 0 22C0 34.1502 9.84975 44 22 44ZM17.4481 21.78C17.4481 19.3966 19.3931 17.4515 21.7765 17.4515C24.1599 17.4515 26.1049 19.3966 26.1049 21.78C26.1049 24.1634 24.1599 26.1085 21.7765 26.1085C19.3931 26.1085 17.4481 24.1634 17.4481 21.78ZM34.759 21.1243C34.7588 21.3426 34.7585 21.5612 34.7585 21.78C34.7585 22.0247 34.7589 22.269 34.7593 22.5132C34.7616 24.0576 34.7639 25.5929 34.6741 27.1379C34.5735 29.2161 34.1026 31.0572 32.5797 32.5802C31.0601 34.0999 29.2157 34.5739 27.1375 34.6746C25.5668 34.763 24.006 34.7613 22.4355 34.7595C22.2171 34.7593 21.9985 34.759 21.7797 34.759C21.5614 34.759 21.3433 34.7593 21.1252 34.7595C19.5568 34.7613 17.9956 34.763 16.422 34.6746C14.3438 34.5739 12.5027 34.1031 10.9798 32.5802C9.46013 31.0605 8.98603 29.2161 8.8854 27.1379C8.79701 25.567 8.79872 24.0036 8.80048 22.4345C8.8007 22.2165 8.80097 21.9983 8.80097 21.78C8.80097 21.5617 8.8007 21.3435 8.80048 21.1255C8.79872 19.557 8.79701 17.9959 8.8854 16.4221C8.98603 14.3439 9.45688 12.5028 10.9798 10.9798C12.4994 9.46013 14.3438 8.98608 16.422 8.8854C17.9928 8.79701 19.5536 8.79872 21.1241 8.80048C21.3425 8.8007 21.561 8.80097 21.7797 8.80097C21.9981 8.80097 22.2162 8.8007 22.4342 8.80048C24.0027 8.79872 25.5638 8.79701 27.1375 8.8854C29.2157 8.98608 31.0568 9.45692 32.5797 10.9798C34.0994 12.4995 34.5735 14.3439 34.6741 16.4221C34.7625 17.9929 34.7608 19.5537 34.759 21.1243ZM15.1166 21.78C15.1166 25.4656 18.091 28.44 21.7765 28.44C25.462 28.44 28.4364 25.4656 28.4364 21.78C28.4364 18.0944 25.462 15.12 21.7765 15.12C18.091 15.12 15.1166 18.0944 15.1166 21.78ZM27.1538 14.8472C27.1538 15.7077 27.8487 16.4026 28.7091 16.4026C28.9135 16.4029 29.1159 16.3629 29.3047 16.2848C29.4935 16.2067 29.6651 16.0921 29.8095 15.9477C29.954 15.8032 30.0686 15.6316 30.1466 15.4428C30.2247 15.254 30.2648 15.0516 30.2645 14.8472C30.2645 13.9867 29.5696 13.2918 28.7091 13.2918C27.8487 13.2918 27.1538 13.9867 27.1538 14.8472Z" fill="white"/>
                </svg>
            </a>
            <a href="https://www.facebook.com/Центр-Интеллекта-Синергия-327290458722362" target="_blank" class="header__flex-icon">
                <svg width="35" height="35" viewBox="0 0 46 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M46 22.1347C46 9.90976 35.703 0 23.0029 0C10.297 0.00274966 0 9.90976 0 22.1375C0 33.1829 8.4112 42.3392 19.4038 44V28.5332H13.5683V22.1375H19.4096V17.2568C19.4096 11.7108 22.8448 8.64767 28.0967 8.64767C30.6149 8.64767 33.2452 9.07937 33.2452 9.07937V14.5237H30.3447C27.4902 14.5237 26.599 16.2312 26.599 17.9828V22.1347H32.975L31.9574 28.5304H26.5962V43.9972C37.5888 42.3365 46 33.1801 46 22.1347Z" fill="white"/>
                </svg>
            </a>  -->
            <a href="https://vk.com/intellect_synergy" target="_blank"  class="header__flex-icon">
                <svg width="35" height="35" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22 0C9.84958 0 0 9.84958 0 22C0 34.1504 9.84958 44 22 44C34.1504 44 44 34.1504 44 22C44 9.84958 34.1504 0 22 0ZM30.4608 24.821C30.4608 24.821 32.4065 26.7415 32.8854 27.6329C32.8992 27.6512 32.906 27.6696 32.9106 27.6787C33.1054 28.0065 33.1512 28.2608 33.055 28.451C32.8946 28.7673 32.3446 28.9231 32.1567 28.9369H28.7192C28.4808 28.9369 27.9812 28.875 27.3762 28.4579C26.911 28.1325 26.4527 27.5985 26.0058 27.0783C25.339 26.3037 24.7615 25.6346 24.1794 25.6346C24.1054 25.6345 24.032 25.6461 23.9617 25.669C23.5217 25.811 22.9579 26.439 22.9579 28.1119C22.9579 28.6344 22.5454 28.9346 22.2544 28.9346H20.68C20.1437 28.9346 17.3502 28.7467 14.8752 26.1365C11.8456 22.9396 9.11854 16.5275 9.09562 16.4679C8.92375 16.0531 9.27896 15.8308 9.66625 15.8308H13.1381C13.601 15.8308 13.7523 16.1127 13.8577 16.3625C13.9815 16.6535 14.4352 17.8108 15.18 19.1125C16.3877 21.2346 17.1279 22.0962 17.7215 22.0962C17.8328 22.0949 17.9421 22.0666 18.04 22.0137C18.8146 21.5829 18.6702 18.8215 18.6358 18.2485C18.6358 18.1408 18.6335 17.0133 18.2371 16.4725C17.9529 16.0806 17.4694 15.9317 17.176 15.8767C17.2948 15.7128 17.4512 15.58 17.6321 15.4894C18.1637 15.2235 19.1217 15.1846 20.0727 15.1846H20.6021C21.6333 15.1983 21.8992 15.2648 22.2727 15.3588C23.029 15.5398 23.045 16.0279 22.9785 17.6985C22.9579 18.1729 22.9373 18.7092 22.9373 19.3417C22.9373 19.4792 22.9304 19.6258 22.9304 19.7817C22.9075 20.6319 22.88 21.5967 23.4804 21.9931C23.5587 22.0422 23.6492 22.0684 23.7417 22.0687C23.9502 22.0687 24.5781 22.0687 26.2785 19.1515C26.803 18.2125 27.2587 17.2367 27.6421 16.2319C27.6765 16.1723 27.7773 15.989 27.8965 15.9179C27.9844 15.8731 28.0819 15.8503 28.1806 15.8515H32.2621C32.7067 15.8515 33.0115 15.9179 33.0687 16.0898C33.1696 16.3625 33.0504 17.1944 31.1873 19.7175L30.3554 20.8152C28.6665 23.029 28.6665 23.1412 30.4608 24.821Z" fill="white"/>
                </svg>
            </a>
        </div> 
        <div class="header__info">
            <a href="tel:<?=$phone_link?>" class="header__phone">
                <img src="img/header/phone.svg" alt="logo-phone" class="header__phone-pic">
                <span><?=$phone?></span>
            </a>
            <!-- <a href="#popup-reg" class="header__btn" data-fancybox><?=$btn?></a> -->
        </div>
    </div>
</header>
    <section class="main" id="main">
    <div class="container">
        <h1 class="main__title">
            Synergy Intellect Center
            <span>Развитие потенциала 360&deg;</span>
        </h1>
        <div class="main__block">
            <div class="main__item">
                <p>10&nbsp;направлений <br>развития</p>
            </div>
            <div class="main__item">
                <p>Удобный <br>онлайн-формат</p>
            </div>
            <div class="main__item">
                <p>Доступ 24/7 <br>весь год</p>
            </div>
        </div>
        <div class="main__form">
            <?php if ( $version == 'webinar' ) { ?>
            
<form action="<?=$action?>&form=form-reg" class="form form_horisontal">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Запишитесь на консультацию и получите подарок</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__button">
                <button class="btn " type="submit">Отправить заявку</button>
            </div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">СОГЛАСЕН НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ, ПОЛУЧЕНИЕ РАССЫЛОК, А ТАКЖЕ С <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a></div>
            </label>
        </div>

        
    </div>
</form>
    
            <?php } else { ?>
            
<form action="<?=$action?>&form=form-reg" class="form form_horisontal">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Запишитесь на консультацию и получите подарок</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__button">
                <button class="btn " type="submit">Получить подарок</button>
            </div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">СОГЛАСЕН НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ, ПОЛУЧЕНИЕ РАССЫЛОК, А ТАКЖЕ С <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a></div>
            </label>
        </div>

        
    </div>
</form>

            <?php } ?>
        </div>
    </div>
</section>
    <?php if ( $version == 'webinar' ) { ?>
    <?php } else { ?>
    <section class="about lazy" id="about">
    <div class="container">
        <h2 class="about__title">О Центре</h2>
        <div class="about__block">
            <div class="about__item about__item-1">
                <p class="about__text-big">Центр интеллекта &laquo;Синергия&raquo;&nbsp;&mdash; ведущий образовательный центр по&nbsp;развитию когнитивных навыков. Центр нацелен на&nbsp;создание комфортной образовательной среды для всестороннего развития интеллектуальных возможностей человека.</p>
                <p class="about__text">В&nbsp;Центре интеллекта &laquo;Синергия&raquo; участники программ получат новые знания о&nbsp;своем теле, мозге и&nbsp;мышлении, узнают о&nbsp;своих сильных сторонах и&nbsp;зонах роста, подберут комфортные методы поддержания ментального здоровья, внутреннего баланса и&nbsp;мыслительной активности.</p>
            </div>
            <div class="about__item about__item-2">
                <img src="img/about/number.png" alt="10" class="lazy about__pic">
                <p class="about__text-big">основных направлений развития интеллекта, которые помогут вам стать еще умнее!</p>
            </div>
        </div>
    </div>
</section>
    
<section class="program" id="program">
    <div class="container">
        <h2 class="program__title">Направления обучения</h2>
        <div class="program__block">
        
            <a  href="#popup-program" data-fancybox  class="program__item item-01">
                <div class="program__item-info">
                    <p class="program__item-title">Креативность</p>
                    <p class="program__item-show">Подробнее <img src="img/program/arrow.svg" alt="" class="lazy"></p>
                </div>
                <div class="program__item-pic">
                    <img src="img/program/01.svg" alt="pic" class="lazy">
                </div>
                <div class="program__item-hidden" hidden>
                    <div class="program__item-description">
        <p>Программа находится на стадии доработки.</p>
    </div>
                </div>
            </a>
        
            <a  href="#popup-program" data-fancybox  class="program__item item-02">
                <div class="program__item-info">
                    <p class="program__item-title">Системное мышление</p>
                    <p class="program__item-show">Подробнее <img src="img/program/arrow.svg" alt="" class="lazy"></p>
                </div>
                <div class="program__item-pic">
                    <img src="img/program/02.svg" alt="pic" class="lazy">
                </div>
                <div class="program__item-hidden" hidden>
                    <div class="program__item-description">
        <p>Программа находится на стадии доработки.</p>
    </div>
                </div>
            </a>
        
            <a  href="#popup-program" data-fancybox  class="program__item item-03">
                <div class="program__item-info">
                    <p class="program__item-title">Логика</p>
                    <p class="program__item-show">Подробнее <img src="img/program/arrow.svg" alt="" class="lazy"></p>
                </div>
                <div class="program__item-pic">
                    <img src="img/program/03.svg" alt="pic" class="lazy">
                </div>
                <div class="program__item-hidden" hidden>
                    <div class="program__item-description">
        <p>Программа находится на стадии доработки.</p>
    </div>
                </div>
            </a>
        
            <a  href="https://synergyintellect.ru/memory/" target="_blank"  class="program__item item-04">
                <div class="program__item-info">
                    <p class="program__item-title">Сверхпамять</p>
                    <p class="program__item-show">Подробнее <img src="img/program/arrow.svg" alt="" class="lazy"></p>
                </div>
                <div class="program__item-pic">
                    <img src="img/program/04.svg" alt="pic" class="lazy">
                </div>
                <div class="program__item-hidden" hidden>
                    <div class="program__item-description">
        <p>Память человека неразрывно связана с&nbsp;мыслительной активностью. Чем больше информации мы&nbsp;удерживаем в&nbsp;памяти, тем лучше мозгу удается ее&nbsp;аккумулировать и&nbsp;сохранить. Вот почему очень важно развивать память и&nbsp;использовать проверенные мнемонические техники.</p>
        <p>Мозг нейропластичен&nbsp;&mdash; он&nbsp;постоянно адаптируется к&nbsp;новым условиям и&nbsp;наращивает потенциал. Формирование и&nbsp;укрепление нейронных связей зависит от&nbsp;того, как часто человек узнает что-то новое и&nbsp;запоминает эту информацию. Исследования показали, что регулярные тренировки памяти увеличивают показатели интеллекта у&nbsp;людей всех возрастов и&nbsp;улучшают память пожилых, возвращая ее&nbsp;к&nbsp;показателям среднего возраста.</p>
        <p>Курс тренировки памяти включает более 30&nbsp;упражнений, развивающих различные виды памяти (механическую, зрительную, слуховую, кинестетическую, ассоциативную), техники запоминания, тренажеры и&nbsp;последние разработки специалистов Центра интеллекта в&nbsp;области развития способности запоминания.</p>
        <p>Присоединяйтесь к&nbsp;одной из&nbsp;программ профиля и&nbsp;узнайте, как учить иностранные языки, читать книги, смотреть фильмы, не&nbsp;забывая ничего из&nbsp;пройденного.</p>
    </div>
                </div>
            </a>
        
            <a  href="https://synergyintellect.ru/fastread/" target="_blank"  class="program__item item-05">
                <div class="program__item-info">
                    <p class="program__item-title">Скорочтение</p>
                    <p class="program__item-show">Подробнее <img src="img/program/arrow.svg" alt="" class="lazy"></p>
                </div>
                <div class="program__item-pic">
                    <img src="img/program/05.svg" alt="pic" class="lazy">
                </div>
                <div class="program__item-hidden" hidden>
                    <div class="program__item-description"></div>
                </div>
            </a>
        
            <a  href="https://synergyintellect.ru/calligraphy4kids/" target="_blank"  class="program__item item-06">
                <div class="program__item-info">
                    <p class="program__item-title">Каллиграфия для детей и подростков</p>
                    <p class="program__item-show">Подробнее <img src="img/program/arrow.svg" alt="" class="lazy"></p>
                </div>
                <div class="program__item-pic">
                    <img src="img/program/06.svg" alt="pic" class="lazy">
                </div>
                <div class="program__item-hidden" hidden>
                    <div class="program__item-description"></div>
                </div>
            </a>
        
            <a  href="#popup-program" data-fancybox  class="program__item item-07">
                <div class="program__item-info">
                    <p class="program__item-title">Внимание</p>
                    <p class="program__item-show">Подробнее <img src="img/program/arrow.svg" alt="" class="lazy"></p>
                </div>
                <div class="program__item-pic">
                    <img src="img/program/07.svg" alt="pic" class="lazy">
                </div>
                <div class="program__item-hidden" hidden>
                    <div class="program__item-description">
        <p>Программа находится на стадии доработки.</p>
    </div>
                </div>
            </a>
        
            <a  href="#popup-program" data-fancybox  class="program__item item-08">
                <div class="program__item-info">
                    <p class="program__item-title">Интеллектуальные игры</p>
                    <p class="program__item-show">Подробнее <img src="img/program/arrow.svg" alt="" class="lazy"></p>
                </div>
                <div class="program__item-pic">
                    <img src="img/program/08.svg" alt="pic" class="lazy">
                </div>
                <div class="program__item-hidden" hidden>
                    <div class="program__item-description">
       <p>Программа находится на стадии доработки.</p>
    </div>
                </div>
            </a>
        
            <a  href="https://synergy.ru/lp/calligraphy/" target="_blank"  class="program__item item-09">
                <div class="program__item-info">
                    <p class="program__item-title">Каллиграфия</p>
                    <p class="program__item-show">Подробнее <img src="img/program/arrow.svg" alt="" class="lazy"></p>
                </div>
                <div class="program__item-pic">
                    <img src="img/program/09.svg" alt="pic" class="lazy">
                </div>
                <div class="program__item-hidden" hidden>
                    <div class="program__item-description">
        <p>Мозг&nbsp;&mdash; самый искушенный любитель поесть. Образ жизни и&nbsp;питание человека определяет интеллектуальные результаты, уровень работоспособности и&nbsp;креативности. Чтобы добиться наилучших результатов, стоит скорректировать план питания и&nbsp;выработать новые здоровые привычки, чтобы мозг оставался здоровым и&nbsp;продуктивным.</p>
        <p>В&nbsp;рамках курса вы&nbsp;узнаете, как рацион влияет на&nbsp;мозговую деятельность, почему важно регулярно выводить токсины из&nbsp;организма, что помогает защититься от&nbsp;негативного воздействия на&nbsp;работу мозга, какие витамины лучше всего влияют на&nbsp;темп умственной работы и&nbsp;правда&nbsp;ли, что кофе и&nbsp;вино полезны для здоровья.</p>
        <p>Программа обучения включает описание различных диет и&nbsp;видеотрансляции кулинарного приготовления полезных для мозговой деятельности блюд.</p>
        <p>Присоединяйтесь к&nbsp;курсу, чтобы научиться поддерживать ум&nbsp;и&nbsp;тело в&nbsp;порядке, узнать, чем кормить ваш мозг, и&nbsp;как совместить приятное с&nbsp;полезным.</p>
    </div>
                </div>
            </a>
        
            <a  href="https://synergyintellect.ru/camp/" target="_blank"  class="program__item item-10">
                <div class="program__item-info">
                    <p class="program__item-title">Synergy Intellect Camp</p>
                    <p class="program__item-show">Подробнее <img src="img/program/arrow.svg" alt="" class="lazy"></p>
                </div>
                <div class="program__item-pic">
                    <img src="img/program/10.svg" alt="pic" class="lazy">
                </div>
                <div class="program__item-hidden" hidden>
                    <div class="program__item-description">
        <p>Мозг&nbsp;&mdash; самый искушенный любитель поесть. Образ жизни и&nbsp;питание человека определяет интеллектуальные результаты, уровень работоспособности и&nbsp;креативности. Чтобы добиться наилучших результатов, стоит скорректировать план питания и&nbsp;выработать новые здоровые привычки, чтобы мозг оставался здоровым и&nbsp;продуктивным.</p>
        <p>В&nbsp;рамках курса вы&nbsp;узнаете, как рацион влияет на&nbsp;мозговую деятельность, почему важно регулярно выводить токсины из&nbsp;организма, что помогает защититься от&nbsp;негативного воздействия на&nbsp;работу мозга, какие витамины лучше всего влияют на&nbsp;темп умственной работы и&nbsp;правда&nbsp;ли, что кофе и&nbsp;вино полезны для здоровья.</p>
        <p>Программа обучения включает описание различных диет и&nbsp;видеотрансляции кулинарного приготовления полезных для мозговой деятельности блюд.</p>
        <p>Присоединяйтесь к&nbsp;курсу, чтобы научиться поддерживать ум&nbsp;и&nbsp;тело в&nbsp;порядке, узнать, чем кормить ваш мозг, и&nbsp;как совместить приятное с&nbsp;полезным.</p>
    </div>
                </div>
            </a>
        
            <a  href="https://synergy.ru/lp/emotionalintellect/" target="_blank"  class="program__item item-11">
                <div class="program__item-info">
                    <p class="program__item-title">Эмоциональный интеллект</p>
                    <p class="program__item-show">Подробнее <img src="img/program/arrow.svg" alt="" class="lazy"></p>
                </div>
                <div class="program__item-pic">
                    <img src="img/program/11.svg" alt="pic" class="lazy">
                </div>
                <div class="program__item-hidden" hidden>
                    <div class="program__item-description">
        <p>Эмпатия, толерантность и&nbsp;доброта стали навыками, без которых невозможно выстроить здоровые связи в&nbsp;современном мире. Чтобы научиться слушать и&nbsp;слышать собеседника, важно развить в&nbsp;себе способность относиться к&nbsp;другому, как к&nbsp;себе. Работа с&nbsp;чувствами&nbsp;&mdash; серьезный труд, который спустя время обязательно принесет много радости.</p>
        <p>В&nbsp;рамках курса вам предстоит изучить основы психологии, философии и&nbsp;биологии, участвовать в&nbsp;групповых практиках, тренировать чувствительность, взаимодействовать с&nbsp;другими участниками, разбирать тематическую литературу и&nbsp;разбирать пройденное с&nbsp;преподавателями программы.</p>
        <p>Присоединяйтесь к&nbsp;программе, чтобы уметь найти подход к&nbsp;любому человеку, научиться быть добрее и&nbsp;контактнее, улучшить свои взаимоотношения с&nbsp;семьей, коллегами и&nbsp;окружающими и&nbsp;по-настоящему узнать себя.</p>
    </div>
                </div>
            </a>
        
            <a  href="#popup-program" data-fancybox  class="program__item item-12">
                <div class="program__item-info">
                    <p class="program__item-title">Спорт</p>
                    <p class="program__item-show">Подробнее <img src="img/program/arrow.svg" alt="" class="lazy"></p>
                </div>
                <div class="program__item-pic">
                    <img src="img/program/12.svg" alt="pic" class="lazy">
                </div>
                <div class="program__item-hidden" hidden>
                    <div class="program__item-description">
       <p>Программа находится на стадии доработки.</p>
    </div>
                </div>
            </a>
        
        </div>
    </div>
</section>


    
<section class="who lazy" id="who">
    <div class="container">
        <h2 class="who__title">Для кого и почему</h2>
        <div class="who__block">
            <div class="who__item">
                <div class="who__item-pic">
                    <img src="img/who/icon-01.svg" alt="" class="lazy">
                </div>
                <div class="who__item-content">
                    <p class="who__item-title">Дети&nbsp;8+</p>
                    <ul class="who__item-list">
                        <li>слабый интерес к&nbsp;учебе</li>
                        <li>низкая успеваемость</li>
                        <li>сложности в&nbsp;общении</li>
                        <li>неуверенность в&nbsp;себе</li>
                        <li>сложности с&nbsp;освоением новых навыков</li>
                    </ul>
                </div>
            </div>
            <div class="who__item">
                <div class="who__item-pic">
                    <img src="img/who/icon-02.svg" alt="" class="lazy">
                </div>
                <div class="who__item-content">
                    <p class="who__item-title">Взрослые</p>
                    <ul class="who__item-list">
                        <li>отсутствие карьерного роста</li>
                        <li>неудовлетворенность собой и&nbsp;своими достижениями</li>
                        <li>низкие коммуникативные навыки</li>
                        <li>неумение принимать решения</li>
                        <li>слабая память и&nbsp;внимание</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>





    <section class="mission lazy" id="mission">
    <div class="container">
        <h2 class="mission__title">Миссия Центра</h2>
        <div class="mission__block">
            <div class="mission__item mission__item-1">
                <p class="mission__text-big">Наша миссия&nbsp;&mdash; повышение интеллектуального потенциала человечества. Центр интеллекта &laquo;Синергия&raquo;&nbsp;&mdash; общедоступная образовательная площадка, присоединиться к&nbsp;которой может любой желающий, вне зависимости от&nbsp;возраста, гражданства и&nbsp;уровня подготовки.</p>
                <p class="mission__text">Центр нацелен на&nbsp;создание комфортной и&nbsp;разнообразной среды для многостороннего развития интеллектуальных возможностей человека. Программы по&nbsp;каждому из&nbsp;направлений включают актуальные профессиональные методики, упражнения и&nbsp;тренажеры для умственного и&nbsp;физического здоровья.</p>
                <p class="mission__text">Специалисты Центра интеллекта станут персональными интеллект-коучами для подопечных: составят индивидуальный план обучения, проинструктируют по&nbsp;программам, помогут добиться хороших результатов.</p>
            </div>
            <div class="mission__item mission__item-2"></div>
        </div>
    </div>
</section>
    <section class="format lazy" id="format">
    <div class="container format__bg">
        <h2 class="format__title">Формат обучения</h2>
        <div class="format__block">
            <div class="format__item">
                <div class="format__item-dot"></div>
                <p class="format__item-text">Все образовательные программы Центра интеллекта &laquo;Синергии&raquo; доступны пользователям в&nbsp;онлайн-формате на&nbsp;собственной платформе проекта. Чтобы присоединиться к&nbsp;обучению, нужно зарегистрироваться, пройти тестирование и&nbsp;выбрать интересующие вас курсы.</p>
            </div>
            <div class="format__item">
                <div class="format__item-dot"></div>
                <p class="format__item-text">Материалы и&nbsp;чат с&nbsp;персональными коучами будут доступны в&nbsp;личном кабинете. Там будет отображаться ваш прогресс с&nbsp;начала прохождения курса, комментарии преподавателей и&nbsp;бонусный контент для закрепления полученных знаний.</p>
            </div>
        </div>
        <div class="format__form">
            
<form action="<?=$action?>&form=form-reg" class="form form_horisontal">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Запишитесь на консультацию и получите подарок</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__button">
                <button class="btn " type="submit">Получить подарок</button>
            </div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">СОГЛАСЕН НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ, ПОЛУЧЕНИЕ РАССЫЛОК, А ТАКЖЕ С <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a></div>
            </label>
        </div>

        
    </div>
</form>

        </div>
    </div>
</section>
    <section class="what lazy" id="what">
    <div class="container">
        <h2 class="what__title">Что вы получите</h2>
        <div class="what__block">
            <div class="what__item">
                <div class="what__item-dot"></div>
                <p class="what__item-text">Научитесь быстро усваивать большой объем данных</p>
            </div>
            <div class="what__item">
                <div class="what__item-dot"></div>
                <p class="what__item-text">Сможете быстрее и&nbsp;эффективнее осваивать новые навыки</p>
            </div>
            <div class="what__item">
                <div class="what__item-dot"></div>
                <p class="what__item-text">Научитесь мгновенно принимать верные решения</p>
            </div>
            <div class="what__item">
                <div class="what__item-dot"></div>
                <p class="what__item-text">Разовьете аналитические способности</p>
            </div>
            <div class="what__item">
                <div class="what__item-dot"></div>
                <p class="what__item-text">Повысите мотивацию к&nbsp;самообучению</p>
            </div>
        </div>
    </div>
</section>
    <section class="outro" id="outro">
    <div class="container">
        <div class="outro__block">
            <div class="outro__content">
                <div class="outro__info">
                    <h2 class="outro__title">Synergy Intellect Center</h2>
                    <p class="outro__subtitle">Развитие <br>потенциала 360&deg;</p>
                </div>
                <img src="img/header/logo.png" alt="" class="lazy outro__pic">
            </div>
            <div class="outro__form">
                
<form action="<?=$action?>&form=form-reg" class="form form_horisontal">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Запишитесь на консультацию и получите подарок</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__button">
                <button class="btn " type="submit">Получить подарок</button>
            </div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">СОГЛАСЕН НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ, ПОЛУЧЕНИЕ РАССЫЛОК, А ТАКЖЕ С <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a></div>
            </label>
        </div>

        
    </div>
</form>

                <div class="outro__footer">
                    <a href="tel:<?=$phone_link?>" class="outro__phone">
                        <img src="img/header/phone.svg" alt="logo-phone" class="outro__phone-pic">
                        <span><?=$phone?></span>
                    </a>
                    <div class="outro__footer-info">
                        <p>2020 Центр Интеллекта &laquo;Синергия&raquo;</p>
                        <a href="#privacy" class="fancybox">Политика конфиденциальности</a>,
                        <a href="#">Политика безопасности </a>,
                        <a href="#">Публичная оферта</a>.
                        <p>Разработка и продвижение:</p>
                        <a href="http://sydi.ru" target="_blank">Synergy Digital</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <a href="#popup-reg" class="footer__btn" data-fancybox><?=$btn?></a>
    <?php } ?>



    <section class="popups" hidden>
			
    <div class="popup popup-registration" id="popup-reg">
    <a class="popup__close" data-fancybox-close title="Закрыть"></a>
    
<form action="<?=$action?>&form=form-reg" class="form form_horisontal">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Запишитесь на бесплатное пробное занятие и получите подарок.</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__button">
                <button class="btn " type="submit">Получить подарок</button>
            </div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">СОГЛАСЕН НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ, ПОЛУЧЕНИЕ РАССЫЛОК, А ТАКЖЕ С <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a></div>
            </label>
        </div>

        
    </div>
</form>

</div>


<div class="popup popup-program" id="popup-program">
	<a class="popup__close" data-fancybox-close title="Закрыть"></a>
	<div class="popup-program-content">
		<div class="popup-program-top">
			<h2 class="popup-program-title">Креативность</h2>
			<div class="popup-program-pic">
				<img src="img/program/01.svg" alt="pic" class="lazy ">
			</div>
		</div>
		<div class="popup-program-description">
			<p>Мозг&nbsp;&mdash; самый искушенный любитель поесть. Образ жизни и&nbsp;питание человека определяет интеллектуальные результаты, уровень работоспособности и&nbsp;креативности. Чтобы добиться наилучших результатов, стоит скорректировать план питания и&nbsp;выработать новые здоровые привычки, чтобы мозг оставался здоровым и&nbsp;продуктивным.</p>
			<p>В&nbsp;рамках курса вы&nbsp;узнаете, как рацион влияет на&nbsp;мозговую деятельность, почему важно регулярно выводить токсины из&nbsp;организма, что помогает защититься от&nbsp;негативного воздействия на&nbsp;работу мозга, какие витамины лучше всего влияют на&nbsp;темп умственной работы и&nbsp;правда&nbsp;ли, что кофе и&nbsp;вино полезны для здоровья.</p>
			<p>Программа обучения включает описание различных диет и&nbsp;видеотрансляции кулинарного приготовления полезных для мозговой деятельности блюд.</p>
			<p>Присоединяйтесь к&nbsp;курсу, чтобы научиться поддерживать ум&nbsp;и&nbsp;тело в&nbsp;порядке, узнать, чем кормить ваш мозг, и&nbsp;как совместить приятное с&nbsp;полезным.</p>
		</div>
	</div>
    
<form action="<?=$action?>&form=form-reg" class="form form_horisontal">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Запишитесь на бесплатное пробное занятие и получите подарок.</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__button">
                <button class="btn " type="submit">Получить подарок</button>
            </div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">СОГЛАСЕН НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ, ПОЛУЧЕНИЕ РАССЫЛОК, А ТАКЖЕ С <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a></div>
            </label>
        </div>

        
    </div>
</form>

</div>



		</section>

    <a href="http://sydi.ru" style="display: none">Synergy Digital</a>

  </div><!-- wrapper -->


  
  <script src="https://cdn.synergy.ru/libs/jquery/jquery-3.4.1.js"></script>
  <script src="https://cdn.synergy.ru/libs/fancybox/jquery.fancybox-3.5.7.min.js"></script>
  <script src="js/main.js"></script>

  <script src="https://syn.su/js/lander.js"></script>


</body>
</html>