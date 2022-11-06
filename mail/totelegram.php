<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (!empty($_POST['title'])){
  if (isset($_POST['title'])) {
    if (!empty($_POST['title'])){
      $title = strip_tags($_POST['title']);
      $titleFieldset = "Имя: ";
    }
  }
}
if (!empty($_POST['email'])){
  if (isset($_POST['email'])) {
    if (!empty($_POST['email'])){
      $email = strip_tags($_POST['email']);
      $emailFieldset = "Почта: ";
    }
  }
}
if (!empty($_POST['content'])){
  if (isset($_POST['content'])) {
    if (!empty($_POST['content'])){
      $content = strip_tags($_POST['content']);
      $contentFieldset = "Содержание: ";
    }
  }
}
if (!empty($_POST['test'])){
  if (isset($_POST['test'])) {
    if (!empty($_POST['test'])){
      $test = strip_tags($_POST['test']);
      $testFieldset = "Номер: ";
    }
  }
}


$token = "5663907804:AAHN3uiWMi_oSNBRV5xqfH-Dx0Vmi1Uv4bA";
$chat_id = "-607552379";
$arr = array(
  $titleFieldset => $title,
  $testFieldset => $test,
  $emailFieldset => $email,
  $contentFieldset => $content,
);
$txt = '';
foreach($arr as $key => $value) {
  $txt .= "<i><b>".$key."</b></i> ".$value."%0A";   
};
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

}
?>