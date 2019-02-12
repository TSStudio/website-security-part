<?php
    session_start();
    if(empty($_SESSION['username'])){
        header("Refresh:0;url=loginform.php?URL=index.php");
        die();
    }
    echo "Logged in as ".$_SESSION['username'];;