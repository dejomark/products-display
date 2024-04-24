<?php
    session_start(); 
    if (isset($_SESSION['sessionId']) && isset($_SESSION['admin'])) {
        require 'comment-verify.php';
    } else {
        require 'access-denied.php';
    }
    
?>