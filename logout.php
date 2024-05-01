<?php 

session_destroy();

echo "<script>alert('Você fez o logoff, faça o login para continuar ! '); window.location.href = 'login.html';</script>";

?>