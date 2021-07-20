<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('log_errors', 'On');
ini_set('error_log', 'php_errors.log');
?>
<?//php require($_SERVER['DOCUMENT_ROOT'].'/Test_Generator/header.php');?>
<?php require(__DIR__.'/header.php');?>

<div class="main-block__wrapper">
    <div class="main-block__content">
        <div class="main-block__slider slick-container">
            <div class="slide">
                <div class="slide-text">
                    <h3>Увеличили CTR на 235% за 14 дней</h3>
                    <p>Комплексный аудит вашего сайта легкий способ повысить позиции 1</p>
                </div>
                <div class="slide-pic">
                    <img src="img/pic1.png">
                </div>
            </div>
            <div class="slide">
                <div class="slide-text">
                    <h3>Увеличили CTR на 235% за 14 дней</h3>
                    <p>Комплексный аудит вашего сайта легкий способ повысить позиции 2</p>
                </div>
                <div class="slide-pic">
                    <img src="img/pic2.png">
                </div>
            </div>
        </div>
        
        <div class="main-block__content_company">
            <div class="main-block__content_advantages">
                <h3 class="header">Почему мы</h3>
                <p class="text">
                    А25 — крупное интернет-агентство, основанное в 1997 году, которое специализируется на создании и продвижении сайтов и интернет-магазинов, SEO, оптимизация быстродействия сайтов. С 25 октября 2006 года командой А25 (тогда еще А25 работала как веб-студия по созданию простых сайтов и интернет-магазинов, не специализируясь на сложных разработках) реализовано более 3525 долгосрочных проектов.
                    <br><br>
                    В портфолио А25: редизайн сайтов и интернет-магазинов на UMI.CMS: подключение нового отрисованного дизайна на сайт без нарушения работы основного функционала (как на тестовом сервере для разработки, так и на основном сервере); адаптация сайта под мобильную версию: доработка существующего дизайна для удобного и приятного представления сайта на разных устройствах. Кейсы по интернет-маркетингу включают следующие группы реализованных проектов: настройка контроля продаж и комплексной аналитики для интернет-магазина: подключение AMO CRM для прозрачной организации процесса продаж, подключение системы комплексной аналитики Roistat для контроля влияния различных каналов привлечения трафика на продажи и для экономии рекламного бюджета.
                    <br><br>
                    Кейсы А25 по SEO и поисковому продвижению сайтов: выведение сайтов в ТОП по сложным поисковым запросам, вывод сайтов из-под санкций, возврат поисковых позиций после переделки сайта. Кейсы по технической оптимизации сайта онлайн: оптимизация и ускорение отклика сайтов на UMI.CMS; уменьшение времени загрузки страницы, уменьшения нагрузки на сервер, оптимизация структуры данных UMI.CMS, очистка от накопившегося мусора, корректный переезд на другой хостинг. Кейсы по ускорению сайта и наличию адаптивной версии: оптимизация сайтов по критериям Google PageSpeed, приведение сайтов в максимально возможное соответствие требованиям Google PageSpeed (как в мобильной, так и в стационарной версии).
                    <br><br>
                    Кейсы по разработке сервисов и инcтрументов: разработка персонального логистического инструмента для руководителя компании и менеджеров на основе Яндекс.Маршрутов: построение маршрутов по заранее заданным в базе точкам, расчет наиболее оптимальных маршрутов, сохранение избранных маршрутов, печать маршрутного листа.
                </p>
            </div>
            <div class="main-block__content_comment">
                <h3 class="header">Отзывы</h3>
                <p class="text">
                    Официальный дилер автомобилей Skoda Автогамма благодарит интернет-агентство А25 www.avto-gamma.ru за продвижение и развитие сайта. Мы очень довольны результатами проделанной работы, о чем говорят прочные позиции нашего сайта в глазах целевой аудитории и увеличение числа покупок среди посетителей сайта.
                    <br><br>
                    Хочу поблагодарить компанию А25 за проделанную очень полезную работу. Теперь клиенту не надо звонить и предлагать варианты доставки - он сам их видит в корзине с расположением пунктов получения на карте и сам выбирает.
                    <br><br>
                    Автор статьи поскромничал, умолчав о том, что заказы клиентов автоматически поступают в модуль службы доставки СДЭК, остается подтвердить заказ нажатием одной кнопки и в результате создается готовая накладная, зарегистрированная в службе доставки. Клиент при отправке заказа создал документ для отправки. Сотруднику интернет магазина остается только сдать посылку.
                    <br><br>
                    Отдельное спасибо сотруднику компании А25 Александру Хигай и директору Владимиру Лапардину. В процессе настройки модуля они предложили и реализовали несколько полезных идей. Сервис стал лучше, клиенты интернет магазина довольны. Спасибо!
                </p>
            </div>
        </div>
        
        <div class="main-block__content_form">
            <h3 class="form__header">Заказать</h3>
            <div class="form__block">
                <form enctype="multipart/form-data" method="POST" action="">
                    <!--label class="form-label">Введите имя:</label-->
                    <input type="text" class="form-input" name="name" placeholder="Имя" required>
                    <!--label class="form-label">Введите телефон:</label-->
                    <input type="tel" class="form-input" name="phone" pattern="(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?" placeholder="8 (000) 000-00-00" required>
                    <!--label class="form-label">Введите E-mail:</label-->
                    <input type="email" class="form-input form-input--position" name="email" placeholder="E-mail" required>
                    <input type="hidden" name="key" id="visitor_uid">
                    <button type="submit" name="upload" class="btn submit-button">
                            <span>Отправить</span>
                    </button>
                    <p class="data-info">Передавая нам свои персональные данные, Вы соглашаетесь на обработку ваших персональных данных</p>
                </form>

            </div>
        </div>
    </div>

    <div class="main-block__response">
        <div class="main-block__response_wrapper">
            <div class="main-block__response_box">
                <div class="response-close">X</div>
                <div class="response-position response-mail">
                    <p class="label">Почта email </p>
                </div>
                <div class="response-position response-link">
                    <p class="label">Контакт с БД link </p>
                </div>
                <div class="response-position response-write">
                    <p class="label">Запись в БД write </p>
                </div>
                <div class="response-position response-error">
                    <p class="label">Ошибка контакта или записи в БД write </p>
                </div>
                <div class="response-position response-last">
                    <p class="label">Последняя запись в БД last </p>
                </div>
            </div>
        </div>
    </div>

</div>
<?//php require($_SERVER['DOCUMENT_ROOT'].'/Test_Generator/footer_generator.php');?>
<?php require(__DIR__.'/footer.php');?>
