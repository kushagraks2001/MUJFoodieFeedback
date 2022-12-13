<?php
$sql = "SELECT * FROM `feedbacks`;";
    if(!$con){
        die("connection failed".mysqli_connect_error());
    }
    $cafe_rating = mysqli_query($con,$sql);
?>