<?php

    if(isset($_GET['url'])){

        $url = $_GET['url'];

    }else{

        $url = 'home.php';

    }

    $url = explode('/', $url);


    $file = $url[0];

    if(is_file($file)){
        include $file;
    }else{
        include '404.php';
    }   



?>
<html>
<head>

</head>

</html>