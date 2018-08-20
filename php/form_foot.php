<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
<body>


<?php
if(!empty($_POST['email'] ))
{
$to = "sports-box@sports-box.h1n.ru";
$from = 'sports-box@sports-box.h1n.ru';
$subject = "Подписка";
$message = 'Email: '.$_POST['email'].';';
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: <sports-box@sports-box.h1n.ru>\r\n";
$result = mail($to, $subject, $message, $headers);

    if ($result){ 
        echo "<p>Спасибо, что вы с нами</p>";
    }
    else{
        echo "<p>Ошибка. Пожалуйста, попрбуйте еще раз</p>";
    }
}
else {
echo "<p>Обязательные поля не заполнены. Введите ваш email/p>";
}
?>

</body>
</html>