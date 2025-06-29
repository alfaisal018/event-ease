<?php
include './db.php';
function getContactMessages(){
    global $conn;
    $sql='select * from contact_messages';
    $result=$conn->query($sql);
    $messages=[];
    while($row=$result->fetch_assoc()){
        $messages[]=$row;
    }
    return $messages;
}
?>