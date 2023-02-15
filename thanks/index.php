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
    
    
<section class="thanks" id="thanks">
    <div class="container">
        <h2 class="thanks__title">Спасибо!</h2>
        <p class="thanks__description">Менеджер свяжется с Вами в ближайшее время.</p>
            <?php if ( $version == 'webinar' ) { ?>
            <?php } else { ?>
            <div class="thanks__gift">
                <img src="img/main/gift.png" alt>
            </div>
            <div class="form__item form__button">
                <a href="https://t.me/synergyintellect_bot?start=nhWw4U2-254437"  class="btn" type="submit">Получить подарок</a>
            </div>
            <?php } ?>
    </div>
</section>







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