<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "sirodzhovss@mail.ru";
  $subject = "Новое сообщение с сайта";
  $headers = "From: " . $name . "<" . $email . ">";
  $body = $message;

  if(mail($to, $subject, $body, $headers)){
    echo "Сообщение успешно отправлено!";
  } else{
    echo "Ошибка при отправке сообщения.";
  }
}
?>