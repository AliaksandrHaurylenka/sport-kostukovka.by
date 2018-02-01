<?php

// стартовый путь ('http://mydomain.ru/')
$startPath = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . '/';

// от какого email будет отправляться письмо
const MAIL_FROM = 'mail@sport-kostukovka.by';
// от какого имени будет отправляться письмо
const MAIL_FROM_NAME = 'Костюковка-Спорт';
// тема письма
const MAIL_SUBJECT = 'Сообщение с сайта Костюковка-Спорт';
// кому необходимо отправить письмо
// const MAIL_ADDRESS = 'aliaksandr.haurylenka@gmail.com';
$bcc = ['mail@sport-kostukovka.by', 'aliaksandr.haurylenka@gmail.com'];

// настройки mail для информирования пользователя о доставке сообщения
const MAIL_SUBJECT_CLIENT = 'Ваше сообщение доставлено';