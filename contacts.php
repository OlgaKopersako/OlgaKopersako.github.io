<?
if (isset ($_POST['messageFF'])) {
  mail ("o.kopersako@gmail.com",
        "заполнена контактная форма "."https://github.com/OlgaKopersako/olgakopersako.github.io/contacts.php=".urlencode("https://github.com/OlgaKopersako/olgakopersako.github.io/index.html")
        "Имя: ".$_POST['nameFF']."\nEmail: ".$_POST['contactFF']."\nСообщение: ".$_POST['messageFF']);
  echo ('<p style="color: green">Ваше сообщение получено, спасибо!</p>');
}
?>
