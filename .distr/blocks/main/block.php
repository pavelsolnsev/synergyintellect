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
            {{ form.form( 'form-reg', title='Запишитесь на консультацию и получите подарок', button='Отправить заявку') }}    
            <?php } else { ?>
            {{ form.form( 'form-reg', title='Запишитесь на консультацию и получите подарок', button='Получить подарок') }}
            <?php } ?>
        </div>
    </div>
</section>