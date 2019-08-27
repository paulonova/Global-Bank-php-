<?php


function url_for($script_path){
  if($script_path[0] != '/'){
    $script_path= '/' . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function u($String=""){
  return urlencode($String);
}

function raw_u($String=""){
  return rawurlencode($String);
}

function h($String=""){
  return htmlspecialchars($String);
}

function error_404(){
  header($_SERVER["SERVER_PROTOCOL"] . "404 Not found");
  exit();
}

function error_500(){
  header($_SERVER["SERVER_PROTOCOL"] . "500 Internal server error");
  exit();
}

function redirect_to($location){
  header("Location:" . $location );
  exit;
}
  
?>
