$to = "deepalidublincoding@gmail.com";
        $subject = "Hi";
       
        $message = "<b>Hi there.</b>";
        $message .= "<h1>This is headline.</h1>";
    
   $header = "From: deepalidublincoding@gmail.com\r\n";
       $header.= "MIME-Version: 1.0\r\n";
       $header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
       $header.= "X-Priority: 1\r\n";

       $status = mail("deepalidublincoding@gmail.com", $subject, $message, $header);

