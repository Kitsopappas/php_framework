<?php

class Head{

  function __costruct($title = "Chris"){
    echo '<title>'. $title .'</title>';

  }

  function close(){
    echo '</head>';
  }
}

?>
