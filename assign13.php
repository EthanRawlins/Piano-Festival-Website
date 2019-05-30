<?php
   if(file_exists("data/text.txt") == false) {
      $initial = "<tr><th>Student Name(s)</th><th>Type</th><th>Instrument(s)</th><th>Location</th><th>Time</th></tr>";
      file_put_contents("data/text.txt", $initial);
   }
   else {
      $students = $_GET["stuff"];
      file_put_contents("data/text.txt", $students, FILE_APPEND);
      echo file_get_contents("data/text.txt");
   }
   ?>
