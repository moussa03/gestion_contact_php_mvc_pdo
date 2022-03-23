<?php 

if(isset($_COOKIE['succes']))
{
    
    echo "<div class='alert alert-success' role='alert'>".
    $_COOKIE['succes'].
    "</div>";
}
if(isset($_COOKIE['new_user']))
{
    
    echo "<div class='alert alert-success' role='alert'>".
    $_COOKIE['new_user'].
    "</div>";
}

if(isset($_COOKIE['update'])){
    echo "<div class='alert alert-secondary' role='alert'>".
    $_COOKIE['update'].
    "</div>";
}
if(isset($_COOKIE['delete'])){
    echo "<div class='alert alert-danger' role='alert'>".
    $_COOKIE['delete'].
    "</div>";
}
if(isset($_COOKIE['eror'])){
    echo "<div class='alert alert-danger' role='alert'>".
    $_COOKIE['eror'].
    "</div>";
}


?>