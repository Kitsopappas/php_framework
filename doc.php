<?php
class Doc {

  function start(){
    echo "<!DOCTYPE html>";
    echo "<html>";
  }

  function close() {
        print '</html>';
    }

  function body(){
      echo '<body>';
  }

  function bodyClose(){
      echo '</body>';
  }
}
?>
