<?php
    // Get the PHP helper library from twilio.com/docs/php/install
    require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
    use Twilio\Rest\Client;
    $account_sid = '';
    $auth_token = '';
    $client = new Client($account_sid, $auth_token);
    $messages = $client->messages->create('', array(
         'From' => '',
         'Body' => 'Hello from Shreya Rajwade CS 643 Fall 2017'
    ));
?>

Message Sent!!
