<?php
include 'general/error.php';
if (isset($_POST['saveme']))
    setcookie("keep",1,time()+3600*24*30);
if ($_COOKIE['keep']==1)
   session_set_cookie_params(3600*24*30);
session_start();
include './general/connect_bdd.php';
if (isset($_GET['page']))
    $var = is_file("controleurs/".$_GET['page'].".php");
if (isset($_GET['page']))
    $var = is_file("./controleurs/".$_GET['page'].".php");
ob_start();
if(isset($_GET['page']) && !empty($_GET['page']) && $var === TRUE)
{
    include ('controleurs/'.$_GET['page'].'.php');
}
else
{
    include ('controleurs/home.php');
}
$content = ob_get_contents();
ob_end_clean();
include_once ('vues/layout.php');
?>


