<?php
   session_start();

   if(session_destroy()) {
      header("Location: http://localhost/kibblebit//workspace/html5up-hyperspace/index.php");


   }
?>
