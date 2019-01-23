
<?php

function print_array($r){

  if(is_array($r)){
    echo '<pre>';
    print_r($r);
    echo '</pre>';
  }else echo 'this is not an array!';


}
