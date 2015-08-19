<?php

class Head{

  function start($title = ""){
    echo '<head>';
    echo '<title>'. $title .'</title>';

  }

  function addCSS($location){
    echo '<link rel="stylesheet" type="text/css" href="'.$location.'">';
  }

  function close(){
    echo '</head>';
  }
}

?>
