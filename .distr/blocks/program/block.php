{% from './data.njk' import data as items %}
<section class="program" id="program">
    <div class="container">
        <h2 class="program__title">Направления обучения</h2>
        <div class="program__block">
        {% for item in items %}
            <a {% if item.href %} href="{{ item.href }}" target="_blank" {% else %} href="#popup-program" data-fancybox {% endif %} class="program__item item-{{ item.nmb | safe }}">
                <div class="program__item-info">
                    <p class="program__item-title">{{ item.title | safe }}</p>
                    <p class="program__item-show">Подробнее <img src="img/program/arrow.svg" alt="" class="lazy"></p>
                </div>
                <div class="program__item-pic">
                    <img src="img/program/{{ item.nmb | safe }}.svg" alt="pic" class="lazy">
                </div>
                <div class="program__item-hidden" hidden>
                    <div class="program__item-description">{{ item.description | safe }}</div>
                </div>
            </a>
        {% endfor %}
        </div>
    </div>
</section>

