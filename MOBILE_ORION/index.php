<?php
    session_start();
    require_once 'login/loginFunction.php';
    require_once 'pages/MessagerieFonction.php';
    require_once 'connect/connection.php';
    require_once 'header.php';
    $uri = $_SERVER['REQUEST_URI'];
    if($uri==="/my-app/index.php?/pages/Messagerie.php")
    {
        $_SESSION['connected']=true;
    }
    
    if($uri === '/my-app/MOBILE_ORION/index.php?/pages/Messagerie.php')
    {
        require_once "/pages/Messagerie.php";
    }
    elseif($uri === '/my-app/MOBILE_ORION/index.php?/pages/CreationCompte.php')
    {
        require_once "/pages/CreationCompte.php";
    }
    elseif($uri === '/my-app/MOBILE_ORION/index.php?/login/login.php')
    {
        require_once "/login/login.php";
    }
    elseif($_SESSION['connected'])
    {
        require_once "/pages/Messagerie.php"; 
    }
    else require_once "/login/login.php"; 
?>
