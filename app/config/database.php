<?php

    $conn = new mysqli("localhost","root","12301230","crud");

    if($conn ->connect_error){
        die("Error de conexion". $conn-> connect_error);
    }


?>