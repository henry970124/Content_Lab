<?php
setcookie('jwt_token', '', time() - 3600, '/');

header('Location: /?page=login');
exit();
?>
