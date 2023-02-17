<?php

$land = 'intellect';
$unit ='synergy';
$type = 'intellect';
$graccount = '';
$grcampaign = '';
$title = 'Центр Интеллекта &laquo;Синергия&raquo;';
$description = 'Центр Интеллекта &laquo;Синергия&raquo; | Развитие потенциала 360&deg;';
$keywords = 'Центр Интеллекта &laquo;Синергия&raquo; Развитие потенциала 360&deg;';
$btn = 'Получить подарок';

$phone = '+7 (495) 280-01-79';
$phone_link = '+74952800179';
$phone2 = '';
$phone_link2 = '';
$mail = '';

$quote_id = '';
$GTM_ID = 'GTM-XXXXXX';


switch ($version) {
    case '':
    break;
}


$action = implode(array(
    'https://syn.su/lander.php?r=land/index',
    '&land='.$land,
    '&unit='.$unit,
    '&type='.$type,
    '&version='.$version,
    '&partner='.$partner,
    '&graccount='.$graccount,
    '&grcampaign='.$grcampaign,
    '&quote_id='.$quote_id,
    '&ignore-thanksall=1'
    ));
