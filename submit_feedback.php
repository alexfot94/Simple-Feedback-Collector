<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($message !== "") {
        $entry = "Name: $name\nEmail: $email\nMessage: $message\n---\n";
        file_put_contents("feedback.txt", $entry, FILE_APPEND);
    }
    header("Location: index.php");
    exit;
}
?>
