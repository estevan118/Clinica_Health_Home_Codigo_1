<?php
session_start();
if (!isset($_SESSION['num_doc_pers'])){
    header('Location: ../../Login/Login.php');
}
if(($_SESSION['rol'] == 1 )){
    header('Location: ../../view/Login/Login.php');
    }
    if(($_SESSION['rol'] == 2 )){
        header('Location: ../../view/Login/Login.php');
        }
        if(($_SESSION['rol'] == 4 )){
            header('Location: ../../view/Login/Login.php');
            }
?>