<?php
    $connect = new mysqli("localhost:8080", "root", "", "showroom_dafaandika_table", 3306);

    if(!$connect){
        die("<p>Not Connected</p>"
        mysqli_connect_error());
    }
?>