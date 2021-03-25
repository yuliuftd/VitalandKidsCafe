<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .email {
            font-size: 1.2em;
            text-align: center;
        }
    </style>
    <title>Email</title>
</head>
<body>
    <p class="email">Thanks for your enqueries, we received it and our staff will reply to you soon...<p>
    <p id="timer" class="email"></p>
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
    <script>
        const timer = document.getElementById('timer');
        var a = 4;
        function count(time) {
            setInterval(() => {
                if (time > 1) {
                    time -= 1;
                    timer.innerHTML = 'You will be redirct to contacts page in ' + time + ' second';
                }else{
                    clearInterval;
                    window.location.href = 'contacts.html';
                }
                
            }, 1000);
        }
        count(a);
    </script>
</body>
</html>