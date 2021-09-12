<?php
  echo("- php is working ...<br>");

  if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo '- We don\'t have mysqli!!!<br>';
  } else {
    echo '- Phew we have msqli!<br>';
  }

  $servername = "mysql";
  $username = "signum";
  $password = "#time2fly#";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
     die("- Connection failed: " . $conn->connect_error);
  }

  echo("- php conected to mysql ... <br>");
  echo("\n");
  
  phpinfo(); 
?>