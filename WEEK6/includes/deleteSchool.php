<?php

if (isset($_POST['deleteSchool'])) {
    $schoolID = $_POST['schoolID'];
    require('../reusables/connect.php');

    $query = "DELETE FROM schools 
    WHERE `id` = '" . mysqli_real_escape_string($connect, $schoolID) . "'";

    $result = mysqli_query($connect, $query);

    if ($result) {
      header("Location: ../index.php");
    } else {
      echo "There was an error deleteing the school: " . mysqli_error($connect);
    }
  }