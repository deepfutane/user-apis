<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "deepalidublincoding@gmail.com";
         $subject = "Hi";
         
         $message = "<b>Hi there.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:deepalidublincoding@gmail.com \r\n";
         $header .= "Cc:deepalidublincoding@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
          $header = "Content-type: text/html\r\n";
         
         //$retval = mail ($to,$subject,$message,$header);
         
         // if( $retval == true ) {
         //    echo "Message sent successfully...";
         // }else {
         //    echo "Message could not be sent...";
         // }
        $header = "From: deepalidublincoding@gmail.com\r\n";
        $header.= "MIME-Version: 1.0\r\n";
        //$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        //$header.= "Content-type: text/html; charset=iso-8859-1";
        $header.= "X-Priority: 1\r\n";

        $status = mail("deepalidublincoding@gmail.com", $subject, $message, $header);
        echo $subject. $message. $header;
        error_get_last();
        if($status)
        {
            echo '<p>Your mail has been sent!</p>';
        } else {
            echo '<p>Something went wrong. Please try again!</p>';
        }
      ?>
      
   </body>
</html>