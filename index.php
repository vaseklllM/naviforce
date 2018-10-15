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
    require_once 'struct/index.html';
?>
