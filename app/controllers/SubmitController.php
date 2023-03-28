<?php

class SubmitController
{
    
    public function submitEntry()
    {
        // session_start();

        // Generate a CSRF token if it doesn't exist
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = uniqid();
        }

        // Load the show view template and pass in the item data
        require_once __DIR__ . '/../views/submit.php';
    }

    public function sendEmail()
    {
        // Validate the CSRF token
        // session_start();
        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            die('Invalid CSRF token');
        }

        // Get the form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $url = $_POST['url'];

        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $createdAt = date('Y-m-d H:i:s');

        // Validate the form data
        if (empty($name) || empty($email) || empty($url)) {
            die('Please fill out all fields');
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die('Invalid email address');
        }

        // Append the subscriber to the JSON file
        $submissionsFile = __DIR__ . '/../data/submission.json';
        $submissions = json_decode(file_get_contents($submissionsFile), true);
        $id = end($submissions)['id'] + 1;
        $submissions[] = [
            'id' => $id,
            'name' => $name,
            'email' => $email,
            'url' => $url,
            'created_at' => $createdAt,
            'ipaddress' => $ipAddress,
        ];
        file_put_contents($submissionsFile, json_encode($submissions));

        // Prepare the email message
        $to = 'test@test,com';
        $subject = 'New website submission';
        $message = "Name: $name\nEmail: $email\nURL: $url";
        $headers = "From: $email";

        // Send the email using mail()
        if (mail($to, $subject, $message, $headers)) {
            // Email sent successfully, redirect to homepage with success message
            header('Location: /submit-your-website?success=1');
            exit();
        } else {
            // Email sending failed, redirect to homepage with error message
            header('Location: /submit-your-website?error=1');
            exit();
        }
    }
}
