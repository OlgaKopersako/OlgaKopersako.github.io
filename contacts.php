<?
if (isset ($_POST['messageFF'])) {
  mail ("свой@yandex.ru",
        "заполнена контактная форма с ".$_SERVER['HTTP_REFERER'],
        "Имя: ".$_POST['nameFF']."\nEmail: ".$_POST['contactFF']."\nСообщение: ".$_POST['messageFF']);
  echo ('<p style="color: green">Ваше сообщение получено, спасибо!</p>');
}
?>
