<?php
include './db.php';
function submitQuery($name,$email,$subject,$message){
    global $conn;
    $sql="insert into contact_messages(name,email,subject,message) values ('$name','$email','$subject','$message')";
    $result=$conn->query($sql);
    return $result;
}
?>