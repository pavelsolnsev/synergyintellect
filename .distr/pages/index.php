{% extends "default.php" %}

{% block blocks %}
    {% set IS_MAIN = true %}
    {% include 'header/block.php' %}
    {% include 'main/block.php' %}
    <?php if ( $version == 'webinar' ) { ?>
    <?php } else { ?>
    {% include 'about/block.php' %}
    {% include 'program/block.php' %}
    {% include 'who/block.php' %}
    {% include 'mission/block.php' %}
    {% include 'format/block.php' %}
    {% include 'what/block.php' %}
    {% include 'outro/block.php' %}
    <a href="#popup-reg" class="footer__btn" data-fancybox><?=$btn?></a>
    <?php } ?>

{% endblock %}

{% block popups %}
    {% include 'popups/block.php' %}
{% endblock %}