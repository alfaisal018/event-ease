<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include './contact_msg_controller.php';
$messages=contactMessages();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Message</title>
  <link rel="stylesheet" href="./public/contact_message.css">
  <link rel="stylesheet" href="./public/navbar.css">
  <style>
    table{
      max-width: 100%;
      overflow-x: auto;
    }
    table th,td{
      padding: 10px;
    }
    .header-content{
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
  </style>
</head>
<body>
  <?php include './navbar.php';?>
  <main class="user-table">
    <div class="header-content">
      <h1>All Messages</h1>
    </div>
    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Submission Time</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($messages) {
            foreach($messages as $msg){
              echo "<tr>";
              echo "<td>" . $msg["id"] . "</td>";
              echo "<td>" . $msg["name"] . "</td>";
              echo "<td>" . $msg["email"] . "</td>";
              echo "<td>" . $msg["subject"] . "</td>";
              echo "<td>" . $msg["message"] . "</td>";
              echo "<td>" . $msg["submitted_at"] . "</td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='6'>No list found.</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>