<html>
    <body>
        Thanks for your enqueries, we received it and reply to you soon...
        <?php 
        $name = $_POST['Name']; 
        $email = $_POST['Email'];
        $content = $_POST['Textcontent'];
        $to = "12796746@student.uts.edu.au";
        $subject = "Party enquiries";
        $message = "Hi Manager! \n\nDear customer $name has some enquiries about our party package, please reply ASAP \n\n";
        $message .= "Details are as follow:\n\nCustomer email address: $email\n ";
        $message .= "$content";
        $header = "From: Customer \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html \r\n";
        mail($to,$subject,$message,$headers);
        ?>
    </body>
</html>