<?
session_start();

session_unset();
session_destroy();

echo "Session cerrada. <a href= 'login.html'> volver al login </a>";
?>