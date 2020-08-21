<?php
  $email = 'USER@EXAMPLE.com';
  echo stristr($email, 'r'); // outputs ER@EXAMPLE.com
  echo stristr($email, 'r', true); // A partir do PHP 5.3.0, mostra US
?>