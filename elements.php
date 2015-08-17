<?php
class Element{

  function addText($name = "p", $data = "", $class = "", $id = "" ){
    echo '<' . $name . ' class="' . $class . '" id="' . $id . '">' .
    $data . '</' . $name . '>' ;
  }

  function addTextLink($name = "p", $data = "",$link = "http://google.com",$blank = false, $class = "", $id = "" ){
     if($blank == false){
      echo '<' . $name . ' class="' . $class . '" id="' . $id . '">' . '<a href="' . $link . '"' .
       "</a>" . $data. '</' . $name . '>' ;
     }else {
      echo '<' . $name . ' class="' . $class . '" id="' . $id . '">' . '<a href="' . $link . '" _target="blank"' .
       "</a>" . $data. '</' . $name . '>' ;
    }
  }
}

?>
