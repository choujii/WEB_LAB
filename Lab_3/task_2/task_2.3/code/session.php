<?php
if( false === isset( $_POST['name'], $_POST['age'], $_POST['salary'],$_POST['number'], $_POST['home_adress'] ) ){
    header('Location: /');
    exit();
}

session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['age'] = $_POST['age'];
$_SESSION['salary'] = $_POST['salary'];
$_SESSION['number'] = $_POST['number'];
$_SESSION['home_adress'] = $_POST['home_adress'];
echo '<ul>';
foreach ($_SESSION as $key => $value){
    echo '<li>'. $key. ": ". $value. '</li>';
}
echo'</ul>';
?>