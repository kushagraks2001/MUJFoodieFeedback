<?php
include '../db/conn.php';
if(isset($_REQUEST['submit']))
{
    if(!$con){
        die("connection failed".mysqli_connect_error());
    }
    $fdbk = $_POST['fdbk'];
    $cafe = $_POST['cafe'];
    $stars = $_POST['stars'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO feedbacks ( cafe,feedback, stars, phone) VALUES ('$cafe','$fdbk','$stars','$phone');";
    mysqli_query($con,$sql);
    echo(mysqli_error($con));
    mysqli_close($con);
    header("Location:../index.php");
}
?>