<?php
    $defUser = 'sourav';
    $defPass = '0000';
    // print_r($_POST);
    if($defUser == $_POST['username'] && $defPass == $_POST['pass']) {
        echo "Login Success";
    } else {
        echo "Login Faild";
    }
?>