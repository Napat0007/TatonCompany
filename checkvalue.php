<?php
    if (isset($_POST["post"])){
        header("Location: index.php");
    }elseif (isset($_POST["setting"])){
        header("Location: setting.php");
    }elseif (isset($_POST["profile"])){
        header("Location: profile.php");
    };
?>