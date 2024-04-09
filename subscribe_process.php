<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = strip_tags($_POST['firstname']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Here, you would typically add the email to your newsletter system or database.
    // For the sake of simplicity, we'll just acknowledge the subscription.

    echo "Thank you, " . htmlspecialchars($firstname) . ", for subscribing to our newsletter!";
    // In a real application, consider redirecting the user to a new page or displaying a confirmation message on your website.
}
?>
