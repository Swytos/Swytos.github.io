<?php
unset($_COOKIE['id']);
unset($_COOKIE['login']);
setcookie('id', '', -1, '/');
setcookie('login', '', -1, '/');
header('Location: http://dip/index.php');
?>