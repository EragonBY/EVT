<?php
header('Content-type: text/plain');
  $title = htmlspecialchars($_POST['title']);
  $text  = htmlspecialchars($_POST['text']);

  echo  $title;
  echo "\n";
  echo  $text;

?>