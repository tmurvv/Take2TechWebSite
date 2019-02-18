<?php
    include 'config.php';
    
    if (isset($_POST['submit'])) {
        $result = '';

        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
        {
            $secret = '6LejVJIUAAAAANMI442a4a_qbWKQFyVFSffkzLI0';
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
            if($responseData->success)
            {
                $result = 'reCaptcha verification successful.';
            }
            else
            {
                $result = "Please try again.";
            }
        }

        if (isset($result) && strpos($result, 'fail') === false) {

            $inputName = $_POST['name'];
            $inputEmail = $_POST['email'];
            $inputPhone = $_POST['phone'];
            $inputMessage = $_POST['message'];
    
            $mail_body = '<html>
            <body style="font-family: Arial, Helvetica, sans-serif;
                                line-height:1.8em;">
            <p>Hello '.$siteEmailRecipient.', <br> A message with the following information was sent via the contact form on the J.Dolan Stories website:</p>
            <p>Name: '.$inputName.'<br>
            Email: '.$inputEmail.'<br>
            Phone: '.$inputPhone.'<br>
            Message: '.$inputMessage.'<br>
            <br>
            Have a nice day!<br>
            take2tech.ca
            </p>
            </body>
            </html>';
        
            $subject = "Message from take2tech.ca contact form";
            $headers = "From: take2tech.ca" . "\r\n";
            $headers .= "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            //Error Handling for PHPMailer
            if(!mail($email, $subject, $mail_body, $headers)){
                $result = "Email failed to send.";
            }
            else{
                $result = "Email sent!";
            }
        }       
    }
    $_POST = [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tangerine:100,300,300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:100,300,300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>take2tech.ca-Contact</title>

    <script src='https://www.google.com/recaptcha/api.js' async defer ></script>
    
</head>
<body>
    <div class="contact">
        <div class="contact__image">
            <img class="hardImage" src="img/lightglassburstmytint.gif" alt="Artiscally presented exploding glass.">
            <div class="contact__text">
                <p>take2tech.ca provides reasonably priced web development. All sites are custom-coded meeting or exceeding industry standards in usability, SEO, security, and performance.</p>
            </div>                    
            <div class="contact__form">
                <form action="contact.php" name='submit' method="post" id='recaptchaForm'>
                    
                    <div class="contact__form--title">
                        <?php if(isset($result)) {echo $result.'<br>'; unset($result);} else {echo '<p>Contact Us</p>';} ?> 
                    </div>
                    
                    <div class="contact__form--userInputs">
                        <div class="contact__form--userInputs-item">
                            <label for="name">Name:</label>
                            <input type="text" name='name'>
                        </div>
                        <div class="contact__form--userInputs-item">
                            <label for="email">Email:</label>
                            <input type="email" name='email'>
                        </div>
                        <div class="contact__form--userInputs-item">
                            <label for="phone">Phone:</label>
                            <input type="text" name='phone' placeholder='optional'><br>
                        </div>
                        <label for="message">Message:</label>
                        <textarea rows="4" name="message"></textarea><br>
                        <div class="g-recaptcha" data-sitekey="<?php echo $recaptchaKey; ?>"></div>
                        <button type='submit' name='submit'>Submit</button>
                    </div>
                </form>
            </div>
        </div>           
    </div>
</body>
</html>