<?php
// Habilita ou esconde as mensgem de erro
if (DEBUG_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
}else {
    error_reporting(0);
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
}

?>