<?php
/**
 * Created by PhpStorm.
 * User: Perron
 * Date: 12/16/2014
 * Time: 10:45 PM
 */

require_once('MailChimp.php');

$mailChimpAPI = '01347cf80be05a96e87c7908b8ef0485-us6';
/*
$mailChimpDataCenter = 'us6';
$mailChimpEndPoint = 'https://' + $mailChimpDataCenter + '.api.mailchimp.com/2.0/';
*/
$yellowBirdListID = '8e591b77f5';

if (isset($_POST['email'])) {
    $email = (string)$_POST['email'];
    $MailChimp = new MailChimp($mailChimpAPI);

    $result = $MailChimp->call('lists/subscribe', array(
        'id' => $yellowBirdListID,
        'email' => array('email' => $email),
        'merge_vars' => array(),
        'double_optin' => false,
        'update_existing' => true,
        'replace_interests' => false,
        'send_welcome' => false,
    ));
    echo json_encode($result);
    // $result = $MailChimp->call('lists/list'); // Call to get lists
    // print_r($result);
}

?>