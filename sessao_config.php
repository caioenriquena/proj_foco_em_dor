<?php 
session_start();

if($_SESSION['usuario_id'] == null ){

    echo "<script>alert('Você deve se logar primeiro'); window.location.href = 'login.html';</script>";

}


?>







