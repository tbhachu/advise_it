<?php

$token = "";

  function random_strings()
  {
    $token = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    return substr(str_shuffle($token), 0, 6);
  }
?>