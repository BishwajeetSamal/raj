<?php
if(isset($_POST["set"])){
  print_r($_POST);
  file_put_contents("json_data_save.txt", json_encode($_POST));
}

if(isset($_POST["get"])){
  $contens= file_get_contents("test.txt");
  echo (json_encode(array('status' => "success","data"=> json_decode($contens) )));
}