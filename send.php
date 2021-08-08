<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?
$fio=$_POST['fio'];
$mail=$_POST['mail'];
$text=$_POST['text'];
$phone=$_POST['phone'];
?>
</head>
<body>
<?
if (mail("arsen652974nbnb@mail.ru", "Заявка с сайта", "ФИО:".$fio.". Телефон:".$phone.". Текст о себе:".$text."" ,"From: ".$mail." \r\n"))
{     echo "сообщение успешно отправлено";
} else {
   echo "при отправке сообщения возникли ошибки";
}?>
?>
  
</body>
</html>
