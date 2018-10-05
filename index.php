<?php    
    $error_name="";
    $error_phone="";
    session_start ();   
    if(isset($_POST["send"])){
        $to = "vasia.motnin@gmail.com"; 
        $from = "NAVIFORCE@gmail.com"; 
        $subject = "Заказ часов naviforce";
        $name = htmlspecialchars ($_POST["name"]);        
        $phone = htmlspecialchars ($_POST["phone"]); 
        $TypeProduct = htmlspecialchars ($_POST["TypeProduct"]);         
        $smsmail = "Имя: $name <br> Номер телефона:  $phone <br> Назва продукта: $TypeProduct";       
        $error = false;
        if(strlen($name) == 0 ){
            $error_name="Введите имя";
            $error = true;
        }
        if(strlen($phone) == 0 ){
            $error_phone="Введите номер телефона";
            $error = true; 
        }
        if(!$error){ 
            $subject = "=?utf-8?B?".base64_encode($subject)."?=";                     
            $headers = "Content-type: text/html; charset=utf-8\r\n";            
            $headers .= "From: $from";
           // $headers .= "Reply-to: $from";         

            mail ($to, $subject, $smsmail, $headers);
            header ("Location: seccess.php?temppages=1");
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <title>clock</title>
</head>
<body>
	<div class="header">
        <div class="left">            
             <div class="black-backcround">
                <div class="position-left">
                    <div class="block-top">                        
                        <h1>Спецпредложение <br>
                            всего за 799 грн.
                        </h1>                        
                        <span>
                            До завершения акции:
                        </span>
                    </div>
                    <div class="block-time">                        
                        <div id="clockdiv">
                            <div>
                                <span class="days"></span>:                                
                            </div>
                            <div>
                                <span class="hours"></span>:
                            </div>
                            <div>
                                <span class="minutes"></span>:
                            </div>
                            <div>
                                <span class="seconds"></span>
                            </div>                          
                        </div>
                    </div>
                    <div class="block-bottom">
                        <span>Себестоимость модели NAVIFORCE 
                            NF9099 С Newchic составляет: 1600 грн.
                        </span>
                    </div>
                    <div class="block-button">
                        <a href="javascript://0" onclick="slowScroll ('#buy')"><button class="buy">Заказать</button></a>
                        <a href="javascript://0" onclick="slowScroll ('#more')"><button class="info">Узнать больше</button></a>
                    </div>
                </div>
            </div>            
        </div>
        <div class="right">
            <div class="position-right">
                <h1>Оригинальные Водонепроницаемые часы 
                        NAVIFORCE NF9099 С Newchic 
                </h1>
                <div class="img-min">
                    <img src="img/header/clock.png" alt="clock">
                </div>
            </div>
        </div>
        <div class="down-arrow">
            <img src="img/icon/chevron-down.svg" alt="">            
        </div>
    </div>  

    <div class="content-block-1" id="more">
        <div class="top-txt">
            <h1>
                <span class="left">ВИДЕООБЗОР</span>
                <span class="right">ЧАСОВ</span>
            </h1>
        </div>
        <div class="center-content">
            <div class="left">
                <div class="movie">
                    <iframe width="798" height="448.875" src="https://www.youtube.com/embed/zz4IsW9VyUI?rel=0;autoplay=0" frameborder="0" allow="autoplay; encrypted-media"  allowfullscreen></iframe>
                </div>
            </div>
            <div class="right">
                <div class="info-block">
                    <div class="info">
                        <div class="row">
                            <img src="img/icon/tint.svg" alt="tint">
                            <h2><span class="top">Водонепроницаемость:</span><br>
                                <span class="bottom">30м.</span>
                            </h2>
                        </div>
                        <p>
                            Будьте спокойны гуляя под дождём и умываясь 
                            с этими часами. Герметичность гарантирована 
                            высокими стандартами производства и строгими 
                            тестовыми испытаниями.
                        </p>
                    </div>
                    <div class="info">
                        <div class="row">
                            <img src="img/icon/circle-notch.svg" alt="circle-notch">
                            <h2><span class="top">Ремешок: Кожа, длинна</span><br>
                                <span class="bottom">240мм.</span>
                            </h2>
                        </div>
                        <p>
                            Кнопка блокировки на ремешке для комфорта 
                            при использовании предохраняет от случайного 
                            расстегивания.
                        </p>
                    </div>
                    <div class="info">
                        <div class="row">
                            <img src="img/icon/clock.svg" alt="clock">
                            <h2><span class="top">Циферблат: Время, Дата</span><br>
                                <span class="bottom">и Месяц.</span>
                            </h2>
                        </div>
                        <p>
                            Будьте спокойны гуляя под дождём и умываясь 
                            с этими часами. Герметичность гарантирована 
                            высокими стандартами производства и строгими 
                            тестовыми испытаниями.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
    <div class="content-block-2">        
        <div class="top-txt">
            <h1>
                <span class="left">ФОТОГРАФИИ</span>
                <span class="right">ЧАСОВ</span>
            </h1>
            <div class="txt-1">
                <h3>
                    naviforce
                </h3>
                <hr>
            </div>
        </div>
        <div class="center-block">
            <div class="white-border">
                <div class="img-1">
                    <img src="img/content-block-2/black-and-yellow.png" alt="black-and-yellow">
                </div>
            </div>
            <div class="white-border">
                <div class="img-2">
                    <img src="img/content-block-2/black-and-white.png" alt="black-and-white">
                </div>
            </div>
            <div class="white-border">
                <div class="img-3">
                    <img src="img/content-block-2/black-and-red.png" alt="black-and-red">
                </div>
            </div>
            <div class="white-border">
                <div class="img-4">
                    <img src="img/content-block-2/black-and-orange.png" alt="black-and-orange">
                </div>
            </div>
        </div>
        <div class="bottom-content">
            <div class="slider">
                <div class="slider-block"><img src="img/content-block-2/slider/img-1.png" alt="img-1"></div>
                <div class="slider-block"><img src="img/content-block-2/slider/img-2.png" alt="img-2"></div>
                <div class="slider-block"><img src="img/content-block-2/slider/img-3.png" alt="img-3"></div>
                <div class="slider-block"><img src="img/content-block-2/slider/img-4.png" alt="img-4"></div>
                <div class="slider-block"><img src="img/content-block-2/slider/img-5.png" alt="img-5"></div>
                <div class="slider-block"><img src="img/content-block-2/slider/img-6.png" alt="img-6"></div>
                <div class="slider-block"><img src="img/content-block-2/slider/img-7.png" alt="img-7"></div>
                <div class="slider-block"><img src="img/content-block-2/slider/img-8.png" alt="img-8"></div>
                <div class="slider-block"><img src="img/content-block-2/slider/img-9.png" alt="img-9"></div>
            </div>
        </div>
    </div>
    <div class="content-block-3">        
        <div class="top-txt">
            <h1>
                <span class="left">доставка и</span>
                <span class="right">оплата</span>
            </h1>
            <p>
                Получить ваш NAVIFORCE NF9099 С Newchic просто как раз-два-три!
            </p>
        </div>
        <div class="top-block-info">
            <div class="info-bl">
                <img src="img/icon/check-square.svg" alt="check-square">
                <h3>
                    Сделайте заявку <br>
                    на сайте
                </h3>
                <p>
                    Воспользуйтесь формой заказа и оставьте <br>
                    Ваш адрес, телефон и имя получателя.
                </p>
            </div> 
            <div class="info-bl">
                <img src="img/icon/phone-square.svg" alt="phone-square">
                <h3>
                    Подтвердите <br>
                    заказ
                </h3>
                <p>
                    Наш менеджер свяжется с Вами и уточнит <br>
                    адрес доставки.
                </p>
            </div>
            <div class="info-bl">
                <img src="img/icon/box-full.svg" alt="box-full">
                <h3>
                    Получите <br>
                    товар
                </h3>
                <p>
                    Получите товар в отделении новой почты.
                </p>
            </div>                       
        </div>
        <div class="bottom-block-info">
            <div class="left">
                <img src="img/icon/shield-alt.svg" alt="shield-alt">
                <h3>
                    Гарантия <br>
                    безопасности
                </h3>
                <p>
                    Мы не берем никакой предоплаты. Вы оплачиваете свой заказ только 
                    при получении лично в руки.
                </p>
                <p>
                    Гарантия на товар <br>
                    Перед отправкой мы проверяем каждый экземпляр часов на 
                    роботоспособность и отсутствие внешних дефектов.
                    Мы вернем деньги если вы обнаружите какой-либо изъян.
                </p>
                <p>
                    Мы соблюдаем Закон “О защите прав потребителей”
                </p>
                <p>
                    Для возврата денег Вам достаточно.
                </p>
                <div class="down">
                    <p>
                        Обратиться в службу поддержки клиентов.
                    </p>
                    <p>
                        Мы вернем Вам деньги за товар в полном объеме.
                    </p>
                </div>
            </div>
            <div class="right">
                    <img src="img/icon/truck.svg" alt="truck">
                    <h3>
                        Отправка товара <br>
                        происходит уже на следующий день
                    </h3>
                    <p>
                        Мы оперативно передадим Ваш заказ в службу доставки в тот же день.
                    </p>
                    <p>
                        Бесплатная доставка в отделение Новой почты.
                    </p>
                    <p>
                        Доставка часов происходит по всей Украине.
                    </p>
            </div>
        </div>
    </div>
    <div class="content-block-4" id="buy">
        <div class="top">
            <h1>
                <span class="span-top">
                    <span class="left">
                        ЗАКАЖИТЕ ЧАСЫ NAVIFORCE                         
                    </span>
                    <span class="right">
                        ПРЯМО СЕЙЧАС <br>
                    </span>
                </span>
                <span class="span-bottom">
                    <span class="left">
                        И ПОЛУЧИТЕ СКИДКУ
                    </span>
                    <span class="right">
                        50%
                    </span>
                </span>
            </h1>
        </div>
        <div class="content">
            <div class="left">
                <img src="img/content-block-4/clock.png" alt="clock">
            </div>
            <div class="right">
                <div class="buy">
                    <h1>
                        <span class="price">СТАРАЯ ЦЕНА:</span>
                        <span class="price-uah">1600 грн.</span> <br>
                        <span class="new-price">НОВАЯ ЦЕНА:</span>
                        <span class="new-price-uah">799 грн.</span>
                    </h1>
                    <hr>
                    <form autocomplete="on" name="feedback" method="post">
                        <input type="text" name="name" required placeholder="Введите ваше имя">
                        <span style="color:red;text-align: center;display: block;"><?php echo $error_name ?></span>
                        <br>  
                        <input type="text" name="phone" required placeholder="Введите ваш телефон">
                        <span style="color:red;text-align: center;display: block;"><?php echo $error_phone?></span>
                        <br> 
                        <div class="txt">
                            <span class="spantxt">Цвет:</span>
                        </div>
                        <select name="TypeProduct">
                            <option value="B Y BN Черно-желтый">B Y BN Черно-желтый</option>
                            <option value="B W B Черно-белый">B W B Черно-белый</option>
                            <option value="B R B Черно-красный">B R B Черно-красный</option>
                            <option value="B O L. BN Черно-оранжевый">B O L.BN Черно-оранжевый</option>
                        </select>  <br>    
                        <button type="submit" name="send">Заказать сейчас</button>
                    </form>              
                    <span class="time-txt">
                        До завершения акции:
                    </span>
                    <div class="block-time">                        
                        <div id="clockdivtwo">
                            <div>
                                <span class="days"></span>:  
                            </div>
                            <div>
                                <span class="hours"></span>:
                            </div>
                            <div>
                                <span class="minutes"></span>:
                            </div>
                            <div>
                                <span class="seconds"></span>
                            </div>  
                        </div>
                    </div>
                    <div class="bottom-text">
                        <span class="days">дни</span>
                        <span class="hours">часы</span>
                        <span class="minutes">минуты</span>
                        <span class="seconds">секунды</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-block-5">
        <div class="top">
            <h1>
                <span class="left">
                    ОТЗЫВЫ НАШИХ                       
                </span>
                <span class="right">
                    КЛИЕНТОВ  
                </span>
            </h1>
        </div>
        <div class="content">
            <div class="comment">
                <div class="left">
                    <img src="img/content-block-5/user-1.png" alt="user"> 
                </div>
                <div class="right">
                    <h3>
                        Мария Игнатовская
                    </h3>
                    <p>
                        Подарила эти часы мужу... не помню даже по какому поводу. Помню как они понравились ему. Еще ни одной жалобы от мужа не услышала, хотя угодить ему очень трудно. Понравилось в часах то что стекло очень грубое, сделано специально чтоб не царапалось и то что часы механические, не стают и не сбиваются.
                    </p>
                </div>
            </div>
            <div class="comment">
                <div class="left">
                    <img src="img/content-block-5/user-2.png" alt="user"> 
                </div>
                <div class="right">
                    <h3>
                        Ярослав Токарев
                    </h3>
                    <p>
                    Часы служат у меня очень долга, и работают без перебоя. А так же они водонепроницаемые, противоударное стекло. Пробовал положить их в воду на целый день, влага не попала, даже стекло не запотело. Что сказать отличные часы за свою стоимость, работают получше любых дорогих часов. 
                    </p>
                </div>
            </div>
            <div class="comment">
                <div class="left">
                    <img src="img/content-block-5/user-3.png" alt="user"> 
                </div>
                <div class="right">
                    <h3>
                        Александр Карлаш
                    </h3>
                    <p>
                    Ношу уже больше года, попадал с ним в море. Все пережили. Отличная модель за такую цену, внешний вид не потеряли. Достоинства часов - неубиваемые и стильные, недостатков нету.
                    </p>
                </div>
            </div>
            <div class="comment">
                <div class="left">
                    <img src="img/content-block-5/user-4.png" alt="user"> 
                </div>
                <div class="right">
                    <h3>
                        Иван Яковленко
                    </h3>
                    <p>
                    Годинник просто клас. Все працює відмінно, на руці лежить чудово. Класний, стильний. Довго думав який обрати і дуже задоволений, що вибрав саме цей, не вагайтесь з вибором обирайте його не пожалієте!!
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="js/slick.js"></script> 
    <script src="js/back-time.js"></script>   
    <script src="js/scroll.js"></script>       
</body>
</html>