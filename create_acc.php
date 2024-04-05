<?php
include "connection.php";
if (isset($_POST['create']))
{
    $uname=$_POST['uname'];
    $pass=$_POST['psw'];
    echo $uname;
    $sql = "INSERT INTO login_det(uname,pass) VALUES ('$uname', '$pass')";
    if (mysqli_query($conn, $sql)) {
        echo("<script type='text/javascript'>alert('Account Created Successfully');</script>");
    } 
    else {
        echo "<script type='text/javascript'>alert('Account Creation Failed');</script>";
    }
}
if(isset($_POST['contactus']))
{
    $uname=$_POST['uname'];
    $pass=$_POST['psw'];
    $subject=$_POST['subject'];
    $feedback=$_POST['feedback'];
    $sql = "INSERT INTO contactus(username,gmail,subject,feedback) VALUES ('$uname', '$pass','$subject','$feedback')";
    if (mysqli_query($conn, $sql)) {
        echo("<script type='text/javascript'>alert('Thank you for your feedback');</script>");
    } 
    else {
        echo "<script type='text/javascript'>alert('Feedback send failed');</script>";
    }

}
    mysqli_close($conn);

?>