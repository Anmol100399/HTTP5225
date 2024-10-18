<?php

if (isset($_POST['deleteSchool'])) {
    $schoolID = $_POST['schoolID'];
    require('../reusables/connect.php');

    // SQL query to delete the school by its ID
    $query = "DELETE FROM schools 
    WHERE `id` = '" . mysqli_real_escape_string($connect, $schoolID) . "'";

    // Execute the query
    $result = mysqli_query($connect, $query);

    // Check if the query was successful
    if ($result) {
      // Redirect to the index page or a success page
      header("Location: ../index.php");
    } else {
      // Display an error message if something went wrong
      echo "There was an error deleteing the school: " . mysqli_error($connect);
    }
  }
?>