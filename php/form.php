<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
<body>


<?php
if(!empty($_POST['tel'] ))
{
$to = "sports-box@sports-box.h1n.ru";
$from = 'sports-box@sports-box.h1n.ru';
$subject = "Заказ готового набора";
$message = 'Название: '.$_POST['name'].'; Телефон: '.$_POST['tel'].';';
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: <sports-box@sports-box.h1n.ru>\r\n";
$result = mail($to, $subject, $message, $headers);

    if ($result){ 
        echo "<p>Ожидайте, наш менеджер свяжется с вами в течение часа</p>";
    }
    else{
        echo "<p>Ошибка. Пожалуйста, попрбуйте еще раз</p>";
    }
}
else {
echo "<p>Обязательные поля не заполнены. Введите ваш номер телефона</p>";
}
?>

</body>
</html>