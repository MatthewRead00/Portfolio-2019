<?php

    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    echo "fName is $fName\n
          lName is $lName\n
          email is $email\n
          phone is $phone";

		  $errors = 0;
		  if (empty($fName)) $errors ++;
          if (empty($lName)) $errors ++;
          if (empty($email)) $errors ++;
          if (empty($phone)) $errors ++;

		  if ($errors > 0) {
			  echo "there were errors";
		  }	  else {
			  echo "data received";
		  }
		  
?>