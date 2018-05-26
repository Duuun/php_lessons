<?php
  sleep(1);

  header('Content-type: text/plain; charset=utf-8');
  if(isset($_POST['name'])) {
    $name = $_POST['name'];
    $msg = nl2br($name);
    echo $msg;
  } else {
    echo "FAILED.";
  }