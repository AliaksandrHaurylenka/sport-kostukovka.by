<?php

// стартовый путь ('http://mydomain.ru/')
$startPath = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . '/';
// максимальный размер файла 512Кбайт (512*1024=524288)
const MAX_FILE_SIZE = 524288;
// директория для хранения загруженных файлов
$uploadPath = dirname(dirname(__FILE__)) . '/uploads/';
// разрешённые расширения файлов
$allowedExtensions = array('gif', 'jpg', 'png');

// от какого email будет отправляться письмо
//const MAIL_FROM = 'goric0312@mail.ru';
const MAIL_FROM = 'mail@sport-kostukovka.by';
// от какого имени будет отправляться письмо
const MAIL_FROM_NAME = 'Web-freelancer';
// тема письма
const MAIL_SUBJECT = 'Сообщение с сайта Web-freelancer';
// кому необходимо отправить письмо
//const MAIL_ADDRESS = ['aliaksandr.haurylenka@gmail.com', 'goric0312@mail.ru'];
//const MAIL_ADDRESS = array('aliaksandr.haurylenka@gmail.com', 'goric0312@mail.ru');
const MAIL_ADDRESS = 'aliaksandr.haurylenka@gmail.com';

// настройки mail для информирования пользователя о доставке сообщения
const MAIL_SUBJECT_CLIENT = 'Ваше сообщение доставлено';