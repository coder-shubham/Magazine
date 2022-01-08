<!DOCTYPE html>
<html>
<body>
        <?php 
        require 'session.php';
        require 'PHPMailerAutoload.php';

        session_start();

        if(!isset($_SESSION["Vachanamemail"]))
        {
            echo "<script type='text/javascript'>alert('Nothing To Send')</script>";
            echo "<script type='text/javascript'>window.close()</script>";
        }

        $recipients = $_SESSION["Vachanamemail"];
        $error = 0;
        $errorList = '';

        $mail = new PHPMailer;

            $mail->isSMTP();                                      
            $mail->SMTPKeepAlive = true;
            $mail->Host = 'smtp.gmail.com';  
            $mail->SMTPAuth = true;        
            $mail->Username = "vachanamb@gmail.com";                
            $mail->Password = "vachanam2020"; 
            $mail->SMTPSecure = 'tls'; 
            $mail->Port = 587; 

            $mail->setFrom("vachanamb@gmail.com", 'Vachanam Balivediyil');

            $mail->addReplyTo("vachanamb@gmail.com");
            
            $mail->isHTML(true);

            $mail->Subject = "Subscription Expired";
            foreach ($recipients as $email) {
                
                $mail->ClearAllRecipients();
                $mail->addAddress($email[0]);

                

                if(isset($_SESSION['Vachanamreminder']))
				{
					$mail->Subject = "Subscription Reminder";
					$mail->Body = "Hello ".$email[1].",<br /><br /><p>The renewal date of 'Vachanam Balivediyil' is near. Kindly remit the annual subscription fee as early as possible.</p>
                    <p>Account details:<br />Bank: South Indian Bank<br />Name: vachanam<br />A/c no. 0037053000010527<br />IFSC no. SIBL0000037<br />BRANCH : KOTTAYAM</p>
                    <p>Thank You</p>";
				    $mail->AltBody = "Your subscription for Vachanam Balivediyil magazine is going to expire soon.Please Renew it.";
				}
				else
				{
                    $mail->Body = "Hello ".$email[1].",<br /><br /><p>Your subscription for Vachanam Balivediyil is expired.Please renew it by paying annual subscription fee as early as possible.</p>
                    <p>Account details:<br />Bank: South Indian Bank<br />Name: vachanam<br />A/c no. 0037053000010527<br />IFSC no. SIBL0000037<br />BRANCH : KOTTAYAM</p>
                    <p>Thank You</p>";
				    $mail->AltBody = "Your subscription for Vachanam Balivediyil magazine is expired.Please Renew it.";
				}
 
                if($mail->Send()) {
                    echo "Message sent!\n";
                } else {
                    echo "Mailer Error: " . $mail->ErrorInfo . "\n";
                    $error = 1;
                    $errorList .= $email[1].",";
                    
                }

            }

            $mail->SmtpClose();
            if($error == 1)
            {
               echo "<script type='text/javascript'>alert('Error while sending mail to ".$errorList."!!')</script>";
            }
            else
            {
              echo "<script type='text/javascript'>alert('Mail Sent Successfully To All')</script>";
            }
            
            echo "<script type='text/javascript'>window.close()</script>";


            ?>

</body>
</html>