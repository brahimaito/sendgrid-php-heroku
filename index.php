<?php
echo "V1";
    require 'vendor/autoload.php';

    $from = new SendGrid\Email("Example User", getenv('brahimaito@gmail.com'));
    $subject = "Hello from sendgrid-php";
    $to = new SendGrid\Email("Example User", getenv('zizorify@gmail.com'));
    $content = new SendGrid\Content("text/plain", "Hello from sendgrid-php");
    $mail = new SendGrid\Mail($from, $subject, $to, $content);
    
    $apiKey = getenv('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');
    $sg = new \SendGrid($apiKey);
    
    $response = $sg->client->mail()->send()->post($mail);
    echo "status code: " . $response->statusCode() . "<BR>";
    echo "<pre>";
    print_r($response->headers());
    echo "</pre>";
    echo "response body: " . $response->body();
