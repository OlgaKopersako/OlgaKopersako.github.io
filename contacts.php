<?
if (isset ($_POST['messageFF'])) {
  mail ("o.kopersako@gmail.com",
        "заполнена контактная форма ".
        "Имя: ".$_POST['nameFF']."\nEmail: ".$_POST['contactFF']."\nСообщение: ".$_POST['messageFF']);
  echo ('<p style="color: green">Ваше сообщение получено, спасибо!</p>');
}
?>
