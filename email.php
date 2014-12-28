<?php
/**
 * Created by PhpStorm.
 * User: Perron
 * Date: 12/26/2014
 * Time: 10:34 AM
 */

require_once('swiftmailer/lib/swift_required.php');
require_once('config/config.php');

// Create the message
$message = Swift_Message::newInstance();

// Set the From address with an associative array
$message->setFrom(array($emailSender => $emailSenderName));
$message->setSender(array($emailSender => $emailSenderName));

// Set the To addresses with an associative array
$message->setTo(array('pjones35@gatech.edu'));

// Give the message a subject
$message->setSubject('Welcome to YellowBird');

// Give the message a body
$HTMLBody = getHTMLBody($message);
$message->setBody($HTMLBody, 'text/html');

// Add alternative parts with addPart()
$message->addPart('My amazing body in plain text', 'text/plain');

// Create the Transport
$transport = Swift_SmtpTransport::newInstance($emailSMTPServer, $emailSMTPServerPort);
$transport->setUsername($emailSender);
$transport->setPassword($emailSenderPassword);

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Send the message
$result = $mailer->send($message);

echo $result;

function getHTMLBody($message){

    $headerImage = $message->embed(Swift_Image::fromPath('images/wordmark@2x.png'));
    $twitterShareImage = $message->embed(Swift_Image::fromPath('images/twitter.png'));
    $faceBookShareImage = $message->embed(Swift_Image::fromPath('images/facebook.png'));
    $mailShareImage = $message->embed(Swift_Image::fromPath('images/email.png'));
    $smallTwitterImage = $message->embed(Swift_Image::fromPath('images/socialLinks_twitter.png'));
    $smallFaceBookImage = $message->embed(Swift_Image::fromPath('images/socialLinks_facebook.png'));

    $HTMLBody = '<html>';
    $HTMLBody = $HTMLBody . '<head>';
    $HTMLBody = $HTMLBody . '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
    $HTMLBody = $HTMLBody . '<title>YellowBird | Signing Up</title>';
    $HTMLBody = $HTMLBody . '<style type="text/css">';
    $HTMLBody = $HTMLBody . '/*////// RESET STYLES //////*/';
    $HTMLBody = $HTMLBody . 'body, #bodyTable, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;}';
    $HTMLBody = $HTMLBody . 'table{border-collapse:collapse;}';
    $HTMLBody = $HTMLBody . 'img, a img{border:0; outline:none; text-decoration:none;}';
    $HTMLBody = $HTMLBody . 'h1, h2, h3, h4, h5, h6{margin:0; padding:0;}';
    $HTMLBody = $HTMLBody . 'p{margin: 1em 0;}';
    $HTMLBody = $HTMLBody . '/*////// CLIENT-SPECIFIC STYLES //////*/';
    $HTMLBody = $HTMLBody . '.ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail/Outlook.com to display emails at full width. */';
    $HTMLBody = $HTMLBody . '.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%;} /* Force Hotmail/Outlook.com to display line heights normally. */';
    $HTMLBody = $HTMLBody . 'table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up. */';
    $HTMLBody = $HTMLBody . '#outlook a{padding:0;} /* Force Outlook 2007 and up to provide a "view in browser" message. */';
    $HTMLBody = $HTMLBody . 'img{-ms-interpolation-mode: bicubic;} /* Force IE to smoothly render resized images. */';
    $HTMLBody = $HTMLBody . 'body, table, td, p, a, li, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%;} /* Prevent Windows- and Webkit-based mobile platforms from changing declared text sizes. */';
    $HTMLBody = $HTMLBody . '/*////// GENERAL STYLES //////*/';
    $HTMLBody = $HTMLBody . 'h1, h2, h3, p, #referenceURL{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;}';
    $HTMLBody = $HTMLBody . 'h1, h1 a{color:black; font-size:36px; font-weight:600; line-height:115%; text-align:center;}';
    $HTMLBody = $HTMLBody . 'h2, h2 a{color:#606060; font-size:34px; font-weight:100; line-height:100%; text-align:center;}';
    $HTMLBody = $HTMLBody . 'h3, h3 a{color:#D83826; font-size:30px; font-weight:100; line-height:115%; text-align:center;}';
    $HTMLBody = $HTMLBody . 'p{margin:0; padding:0; line-height:1.35; color:#b5b5b5;}';
    $HTMLBody = $HTMLBody . '#roundedRectangle h2 {text-align:center; font-weight:600; font-size:60px; color:black;}';
    $HTMLBody = $HTMLBody . 'body, #bodyTable{background-color:white;}';
    $HTMLBody = $HTMLBody . '#emailContainer{width:100%;}';
    $HTMLBody = $HTMLBody . '#logoContainer {margin-top:40px;}';
    $HTMLBody = $HTMLBody . '#thankYouContainer{padding:40px;}';
    $HTMLBody = $HTMLBody . '#thankYouHeading h1 {margin: 20px;}';
    $HTMLBody = $HTMLBody . '#thankYouBody {border-bottom:5px solid #f0f0f0; padding-bottom:30px;}';
    $HTMLBody = $HTMLBody . '#roundContainer {padding:0px; margin:0px 0 20px;}';
    $HTMLBody = $HTMLBody . '#roundedRectangle {padding: 15px 0; align:center;}';
    $HTMLBody = $HTMLBody . '#roundedRectangle h2 {margin:0; padding: 0;}';
    $HTMLBody = $HTMLBody . '.roundText {margin:0px 0px 20px 0p; padding:0px 0px;}';
    $HTMLBody = $HTMLBody . '#referContainer{padding:40px; margin: 20px 0;}';
    $HTMLBody = $HTMLBody . '#shareContainer{padding:20px;}';
    $HTMLBody = $HTMLBody . '#referenceURL{margin:20px 0; padding: 25px 0;}';
    $HTMLBody = $HTMLBody . '.social {width:60px; height:60px; border-radius:100%; background-color:#00afec; margin:0px 20px 30px;}';
    $HTMLBody = $HTMLBody . '.twitter {background-color:#00aced;}';
    $HTMLBody = $HTMLBody . '.facebook {background-color:#65318f;}';
    $HTMLBody = $HTMLBody . '.email {background-color:#acacac;}';
    $HTMLBody = $HTMLBody . '#footerContainer{width:100%; margin: 20px 0; padding:40px;border-top:5px solid #f0f0f0;}';
    $HTMLBody = $HTMLBody . '.footerContent {padding-top: 20px;}';
    $HTMLBody = $HTMLBody . '.socialLink {width:40px; height:40px;}';
    $HTMLBody = $HTMLBody . '</style>';
    $HTMLBody = $HTMLBody . '</head>';
    $HTMLBody = $HTMLBody . '<body>';
    $HTMLBody = $HTMLBody . '<center>';
    $HTMLBody = $HTMLBody . '<!-- // BEGIN HERO BLOCK -->';
    $HTMLBody = $HTMLBody . '<table align="center" border="0" id="logoContainer"></table>';
    $HTMLBody = $HTMLBody . '<tr>';
    $HTMLBody = $HTMLBody . '<td align="center" class="wordmark"><a href="www.yellowbird.io"><img src="'. $headerImage .'" alt="YellowBird wordmark" height="43" width="285" id="heroImage" /></a>';
    $HTMLBody = $HTMLBody . '</td>';
    $HTMLBody = $HTMLBody . '</tr>';
    $HTMLBody = $HTMLBody . '</table>';
    $HTMLBody = $HTMLBody . '<!-- END HERO BLOCK // -->';
    $HTMLBody = $HTMLBody . '<!-- // Begin Thank You Block -->';
    $HTMLBody = $HTMLBody . '<table border="0" width="520">';
    $HTMLBody = $HTMLBody . '<tr>';
    $HTMLBody = $HTMLBody . '<td align="center" valign="top" id="thankYouContainer">';
    $HTMLBody = $HTMLBody . '<table border="0" cellpadding="0" cellspacing="0" id="thankYouBlock" width="100%">';
    $HTMLBody = $HTMLBody . '<tr>';
    $HTMLBody = $HTMLBody . '<td align="center" valign="top" id="thankYouHeading"><h1>Thank you for joining!</h1></td>';
    $HTMLBody = $HTMLBody . '</tr>';
    $HTMLBody = $HTMLBody . '<tr>';
    $HTMLBody = $HTMLBody . '<td align="center" valign="top" id="thankYouBody"><p>We\'re excited that you\'re joining us in our mission to make stock market education easy for everyone. Due to limited invites, we\'re giving out accounts in rounds.</p></td>';
    $HTMLBody = $HTMLBody . '</tr>';
    $HTMLBody = $HTMLBody . '</td>';
    $HTMLBody = $HTMLBody . '</table>';
    $HTMLBody = $HTMLBody . '<!-- // End Thank You Block -->';
    $HTMLBody = $HTMLBody . '<!-- // Round Block -->';
    $HTMLBody = $HTMLBody . '<table border="0" cellpadding="0" id="roundContainer">';
    $HTMLBody = $HTMLBody . '<tr>';
    $HTMLBody = $HTMLBody . '<td align="center" valign="top" id="roundedRectangle"><h2>1</h2></td>';
    $HTMLBody = $HTMLBody . '</tr>';
    $HTMLBody = $HTMLBody . '<tr>';
    $HTMLBody = $HTMLBody . '<td align="center" valign="top" class="roundText"><p>Your current round</p></td>';
    $HTMLBody = $HTMLBody . '</tr>';
    $HTMLBody = $HTMLBody . '</table>';
    $HTMLBody = $HTMLBody . '<!-- // End Round Block -->';
    $HTMLBody = $HTMLBody . '<!-- // Reference Block -->';
    $HTMLBody = $HTMLBody . '<table border="0" cellpadding="0" cellspacing="0" id="referContainer">';
    $HTMLBody = $HTMLBody . '<tr>';
    $HTMLBody = $HTMLBody . '<td align="center"><p>Want to stay in the first round? Be sure to share your unique url with your family and friends. Others want your spot!</p></td>';
    $HTMLBody = $HTMLBody . '</tr>';
    $HTMLBody = $HTMLBody . '<tr>';
    $HTMLBody = $HTMLBody . '<td align="center" valign="top" id="referenceURL"><strong>www.yellowbird.io/?ref=</strong></td>';
    $HTMLBody = $HTMLBody . '</tr>';
    $HTMLBody = $HTMLBody . '</table>';
    $HTMLBody = $HTMLBody . '<!-- // End Reference Block -->';
    $HTMLBody = $HTMLBody . '<!-- // Share Reference Block -->';
    $HTMLBody = $HTMLBody . '<table border="0" id="shareContainer">';
    $HTMLBody = $HTMLBody . '<tr>';
    $HTMLBody = $HTMLBody . '<td align="left" valign="middle" id="twitter"><a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fwww.robinhood.com%2F%3Fref%3DMxmEd3&amp;text=YellowBird+is+a+gamified+stock+market+education+platform.+Reserve+your+spot+today+at&amp;via=getyellowbird"><img src="' . $twitterShareImage . '" class="social twitter"></a></td>';
    $HTMLBody = $HTMLBody . '<td align="center" valign="middle" id="facebook"><a href="https://www.facebook.com/sharer/sharer.php?u=www.yellowbird.io/?ref=alphonso_jordan7"><img src="' . $faceBookShareImage . '" class="social facebook"></a></td>';
    $HTMLBody = $HTMLBody . '<td align="right" valign="middle" id="email"><a href="mailto:?body=YellowBird%20is%20a%20free%20educational%20platform%20that %20teaches%20users%20how%20to%20invest%20in %20the%20stock%20market.%20https%3A%2F%2Fwww.robinhood.com%2F%3Fref%3DMxmEd3&amp;subject=Stock%20market%20educationâ€”gamified!" id="share_email"><img src="' . $mailShareImage . '" class="social email"></a></td>';
    $HTMLBody = $HTMLBody . '</tr>';
    $HTMLBody = $HTMLBody . '</table>';
    $HTMLBody = $HTMLBody . '<!-- // End Share Reference Block -->';
    $HTMLBody = $HTMLBody . '<!-- // Footer Block -->';
    $HTMLBody = $HTMLBody . '<table border="0" align="center" id="footerContainer">';
    $HTMLBody = $HTMLBody . '<tr>';
    $HTMLBody = $HTMLBody . '<td align="center" class="footerContent"><p>Â© 2014 YellowBird Financial, Inc  &nbsp; &bull; &nbsp; Made in Atlanta</p>';
    $HTMLBody = $HTMLBody . '</td>';
    $HTMLBody = $HTMLBody . '</tr>';
    $HTMLBody = $HTMLBody . '<tr>';
    $HTMLBody = $HTMLBody . '<td align="center" valign="top">';
    $HTMLBody = $HTMLBody . '<a href="http://www.twitter.com/getyellowbird"><img src="' . $smallTwitterImage .'" class="socialLink"</a>';
    $HTMLBody = $HTMLBody . '<a href="http://www.facebook.com/yellowbirdapp"><img src="' . $smallFaceBookImage . '" class="socialLink"</a>';
    $HTMLBody = $HTMLBody . '</td>';
    $HTMLBody = $HTMLBody . '</tr>';
    $HTMLBody = $HTMLBody . '</table>';
    $HTMLBody = $HTMLBody . '<!-- // End Footer Block -->';
    $HTMLBody = $HTMLBody . '</center>';
    $HTMLBody = $HTMLBody . '</body>';
    $HTMLBody = $HTMLBody . '</html>';

    return $HTMLBody;
}


?>