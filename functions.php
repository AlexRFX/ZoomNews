<?php
// Verifica se o usuario está, logado:
function loggedin(){
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
        return false;
    }
    return true;
}