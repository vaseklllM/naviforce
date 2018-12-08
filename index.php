<?php 
    session_start ();   
    if(isset($_POST["send"])){
        $to = "vasia.motnin@gmail.com"; 
        $from = "NAVIFORCE@gmail.com"; 
        $subject = "Заказ часов naviforce";
        $name = htmlspecialchars ($_POST["name"]);        
        $phone = htmlspecialchars ($_POST["phone"]); 
        $TypeProduct = htmlspecialchars ($_POST["TypeProduct"]);         
        $smsmail = "Имя: $name <br> Номер телефона:  $phone <br> Назва продукта: $TypeProduct";       
        $subject = "=?utf-8?B?".base64_encode($subject)."?=";                     
        $headers = "Content-type: text/html; charset=utf-8\r\n";            
        $headers .= "From: $from";        

        mail ($to, $subject, $smsmail, $headers);
        header ("Location: seccess.php?temppages=1");
        exit;
    }
    
    
    $datetime1 = new DateTime(date("Ymd"));//Получаем текущую дату
    $datetime2 = new DateTime('20181220');//Дата события, где 2017-это год, 09-это месяц и 10 - день события     
     
    $datetime3 = new DateTime(date("H:i:s"));//Получаем текущее время
    $datetime4 = new DateTime('23:59:59');//Время события где первые 00 - Это часы, вторые - это минуты и последние - это сек     
     
    $interval1 = $datetime1->diff($datetime2);
    $interval2 = $datetime3->diff($datetime4);    
    
    // echo $interval1->format('До события: %y Лет %m Месяцев %d Дней');
    // echo $interval2->format(' %h Часов %i Минут %s Секунд');
    
    $realtimeday = $interval1->format('%d');
    $realtimehours = $interval2->format('%h');
    $realtimeminutes = $interval2->format('%i');
    $realtimesecounds = $interval2->format('%s');

    
    // переводжу в секунды
    $newDay = $realtimeday * 24 * 60 * 60; 
    $newHours = $realtimehours * 60 * 60;
    $newMinutes = $realtimeminutes * 60;
    $time = $newDay + $newHours + $newMinutes + $realtimesecounds;
    
    require_once 'struct/index.html'; 

    echo ('<script>');
    require_once 'js/back-time.js';
    echo ('</script>');    
?>