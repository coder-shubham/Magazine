<?php
    session_start();
    
    $mailname = $_POST['name'];
    $mailto = $_POST['email'];
    $mailphone= $_POST['phone'];
    $maildata = $_POST['date'];
    $mailmsg=$_POST['appmsg'];
    $mailSub = "Appointment Confirmation email";
    //Email Html Template
    $mailMsg = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
    <html xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office'>
    
    <head>
        <meta charset='UTF-8'>
        <meta content='width=device-width, initial-scale=1' name='viewport'>
        <meta content='telephone=no' name='format-detection'>
        <title></title>
        <!--[if (mso 16)]>
        <style type='text/css'>
        a {text-decoration: none;}
        </style>
        <![endif]-->
        <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
        <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
        <o:AllowPNG></o:AllowPNG>
        <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    </head>
    
    <body>
        <div class='es-wrapper-color'>
            <!--[if gte mso 9]>
                <v:background xmlns:v='urn:schemas-microsoft-com:vml' fill='t'>
                    <v:fill type='tile' color='#cccccc'></v:fill>
                </v:background>
            <![endif]-->
            <table class='es-wrapper' width='100%' cellspacing='0' cellpadding='0'>
                <tbody>
                    <tr>
                        <td class='esd-email-paddings' valign='top'>
                            <table class='es-content esd-header-popover' cellspacing='0' cellpadding='0' align='center'>
                                <tbody>
                                    <tr>
                                        <td class='es-adaptive esd-stripe' esd-custom-block-id='24' align='center'>
                                            <table class='es-content-body' style='background-color: #efefef;' width='600' cellspacing='0' cellpadding='0' bgcolor='#efefef' align='center'>
                                                <tbody>
                                                    <tr>
                                                        <td class='esd-structure es-p10' align='left'>
                                                            <!--[if mso]><table width='580'><tr><td width='280' valign='top'><![endif]-->
                                                            <table class='es-left' cellspacing='0' cellpadding='0' align='left'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class='esd-container-frame' width='280' align='left'>
                                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class='es-infoblock esd-block-text' align='center'> Appointment Confirmed</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--[if mso]></td><td width='20'></td><td width='280' valign='top'><![endif]-->
                                                            <table class='es-right' cellspacing='0' cellpadding='0' align='right'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class='esd-container-frame' width='280' align='left'>
                                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class='es-infoblock esd-block-text' align='right'>
                                                                                            <p><a href='https://viewstripo.email' target='_blank' class='view'></a></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--[if mso]></td></tr></table><![endif]-->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class='es-header' cellspacing='0' cellpadding='0' align='center'>
                                <tbody>
                                    <tr>
                                        <td class='esd-stripe' esd-custom-block-id='3089' align='center'>
                                            <table class='es-header-body' width='600' cellspacing='0' cellpadding='0' align='center'>
                                                <tbody>
                                                    <tr>
                                                        <td class='esd-structure es-p10t es-p10b es-p10r es-p10l' align='left'>
                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class='esd-container-frame' width='580' valign='top' align='center'>
                                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                                <tbody>
                                                                                    <tr>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class='esd-structure es-p5r es-p5l' style='background-color: #4a7eb0;' bgcolor='#4a7eb0' align='left'>
                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class='esd-container-frame' width='590' valign='top' align='center'>
                                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class='esd-empty-container' align='center' style='display: none;'></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class='es-content' cellspacing='0' cellpadding='0' align='center'>
                                <tbody>
                                    <tr>
                                        <td class='esd-stripe' esd-custom-block-id='3109' align='center'>
                                            <table class='es-content-body' style='background-color: #ffffff;' width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' align='center'>
                                                <tbody>
                                                    <tr>
                                                        <td class='esd-structure es-p20t es-p20b es-p40r es-p40l' esd-general-paddings-checked='true' align='left'>
                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class='esd-container-frame' width='520' valign='top' align='center'>
                                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class='esd-block-text' align='left'>
                                                                                            <h1 style='color: #4a7eb0;'>Appointment Confirmed</h1>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class='esd-block-spacer es-p5t es-p20b' style='font-size:0' align='left'>
                                                                                            <table width='5%' height='100%' cellspacing='0' cellpadding='0' border='0'>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td style='border-bottom: 2px solid #999999; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; height: 1px; width: 100%; margin: 0px;'></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class='esd-block-text es-p10b' align='left'> 
                                                                                             <p><span style='font-size: 16px; line-height: 150%;'>
                                                                                             Hello   ".$_SESSION['Email']."!!! Welcome
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class='esd-block-text' align='left'>
                                                                                            You're appointment with our doctor at Healthy Life has being scheduled on ".$maildata." for ".$mailmsg." \n. Please visit the website if you would like to cancel the appointment.
                                                                                            
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class='esd-block-text' align='left'>
                                                                                            <p>If you need help visit the <a target='_blank' href='https://viewstripo.email/'>Help</a> page or <a target='_blank' href='https://viewstripo.email/'>contact us</a>.</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class='esd-structure es-p20t es-p20b es-p40r es-p40l' esd-general-paddings-checked='true' align='left'>
                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class='esd-container-frame' width='520' valign='top' align='center'>
                                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class='esd-block-spacer es-p20t es-p20b es-p5r' style='font-size:0' align='center'>
                                                                                            <table width='100%' height='100%' cellspacing='0' cellpadding='0' border='0'>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td style='border-bottom: 1px solid #ffffff; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; height: 1px; width: 100%; margin: 0px;'></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class='esd-footer-popover es-content' cellspacing='0' cellpadding='0' align='center'>
                                <tbody>
                                    <tr>
                                        <td class='esd-stripe' align='center'>
                                            <table class='es-content-body' style='background-color: transparent;' width='600' cellspacing='0' cellpadding='0' align='center'>
                                                <tbody>
                                                    <tr>
                                                        <td class='esd-structure es-p30t es-p30b es-p20r es-p20l' align='left'>
                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class='esd-container-frame' width='560' valign='top' align='center'>
                                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class='esd-empty-container' align='center' style='display: none;'></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
    
    </html>
    ";
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();

   
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465;  
   $mail ->IsHTML(true);
   $mail ->Username = "vachanamb@gmail.com";
   $mail ->Password = "vachanam2020";
   $mail ->SetFrom("vachanamb@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
    echo "<script>if(confirm('Mail sent.')){document.location.href='home.php'};</script>";
   }

