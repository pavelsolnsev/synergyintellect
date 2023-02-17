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
                {{ form.form( 'form-reg', title='Запишитесь на консультацию и получите подарок', button='Получить подарок') }}
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