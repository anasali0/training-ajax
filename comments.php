<?php
  $comments = array('Thanks', 'Thanks You', 'Good');
  if(isset($_POST['comments'])){
    array_push($comments, $_POST['comments']);
  }

  foreach($comments as $com) {
    echo $com . ' <br>';
  }