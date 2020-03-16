<?php
# Общие настройки
$config							= array();
$config['sitelink']				= 'https://alesunix.github.io/'; # URL сайта, со слэшем на конце
$config['sitename']				= ''; # Заголовок сайта
$config['slogan']				= '

<div class="headerstyle">
<div class="tabstyle">
<img src="/i/Logo.png" alt="alesunix" >
Алиев Ильяс Алиевич <br><small>Программист (разработчик информационных систем)</small>
</div>
<div class="tabstyle">

</div>
<div class="tabstyle">
<small>Система контроля версий<br>  
<a href="https://github.com/alesunix">GitHub</a><br>  
<a href="https://api.whatsapp.com/send?phone=996559101255">WhatsApp</a></small>
</div>
<div class="tabstyle">
<small>
alesunix@gmail.com <br>  
+996 (559) 10 12 55 <br> 
+996 (312) 30 83 84 <br> 

</small>
</div></div>

'; # Слоган
$config['encoding']				= 'utf-8'; # Кодировка

$config['template']				= 'info'; # Шаблон

# Настройки доступа
$config['login']				= 'Complete'; # Логин админа
$config['password']				= '0555947676'; # Пароль админа

# Настройки доступа в закрытую зону
$config['access_login']			= 'admin'; # Логин
$config['access_password']		= 'Qaz159753'; # Пароль

### ОТПРАВКА СООБЩЕНИЙ ###

# Настройка отправки сообщений
$config['secretWord']					= 'sdfsdfgaghah'; # Секретное слово для генерации антиспама
$config['email']['receiver']			= 'alesunix@gmail.com'; # E-mail адрес, на который отправляется сообщение
$config['email']['subject']				= 'Письмо с сайта «' . $config['sitename'] . '»'; # Тема письма обратной связи

# Настройка формы
$config['form']['feedback']['subject']	= true; # Обязательно ли поле «Тема письма»

# Уведомления
$config['form']['feedbackSent']			= 'Сообщение отправлено администратору. Спасибо!<br>Сейчас вы будете перенаправлены на главную страницу.'; # Сообщение отправлено
$config['form']['notSent']				= 'Извините, письмо не было отправлено. Пожалуйста, повторите отправку.'; # Неудачная отправка
$config['form']['isSpam']				= 'Если вы видите данное сообщение, то скорее всего у вас отключен JavaScript. Включите его для отправки или просто отошлите письмо на ' . $config['email']['receiver']; # СПАМ?!
$config['form']['emptyEmail']			= 'Извините, e-mail не введён либо его формат неверен.'; # Нет мыла!
$config['form']['emptyName']			= 'Извините, имя не введено либо его формат неверен.'; # Нет имени!
$config['form']['emptyTopic']			= 'Извините, вы забыли указать тему письма.'; # Нет темы!
$config['form']['emptyMessage']			= 'Перед отправкой напишите сообшение.'; # Нет сообщения!