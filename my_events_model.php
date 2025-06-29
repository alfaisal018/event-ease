<?php
include './db.php';
function getMyEvents($id){
  global $conn;
  $sql="select a.id, e.title, e.location, e.date, e.time, a.number_of_tickets, a.booking_time from attendee_list a join events e on a.event_id=e.id where a.user_id = $id order by a.booking_time desc";
  $result=$conn->query($sql);
  $myEvents=[];
  while($row=$result->fetch_assoc()){
    $myEvents[]=$row;
  }
  return $myEvents;
}
?>