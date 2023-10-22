<?php

class SubscribeController
{

    public function subscribe()
    {
        // session_start();
        
        // Validate the CSRF token
        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            die('Invalid CSRF token');
        }

        // Get the form data
        $email = $_POST['email'];

        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $createdAt = date('Y-m-d H:i:s');

         // Validate
        $errorMessage = '';
        if (empty($email)) {
            $errorMessage = 'Please fill out the email field.';
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMessage = 'Invalid email address.';
        }
        if (!empty($errorMessage)) {
            header('Location: /?error=' . urlencode($errorMessage) . '#subscribe');
            exit();
        }

        // Append the subscriber to the JSON file
        $subscribersFile = __DIR__ . '/../data/subscribers.json';
        $subscribers = json_decode(file_get_contents($subscribersFile), true);
        $id = end($subscribers)['id'] + 1;
        $subscribers[] = [
            'id' => $id,
            'email' => $email,
            'created_at' => $createdAt,
            'ipaddress' => $ipAddress,
        ];
        file_put_contents($subscribersFile, json_encode($subscribers));

        // Get MailTo value from Config file
        $configFile = __DIR__ . '/../config.php';
        require_once($configFile);
        $mailTo = MAIL_TO;
        
        // Prepare the email message
        $to = $mailTo;
        $subject = 'Beautiful Website Newsletter Subscription';
        $message = "ID: $id\nEmail: $email\nCreated At: $createdAt\nIP Address: $ipAddress";
        $headers = "From: $mailTo";

        // Send the email using mail()
        mail($to, $subject, $message, $headers);

        // Subscriber added successfully, redirect to homepage with success message
        header('Location: /?success=1' . '#subscribe');

    }
}
