<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Feedback Form</h2>
        <form id="feedbackForm" action="submit_feedback.php" method="POST">
            <input type="text" name="name" placeholder="Your Name">
            <input type="email" name="email" placeholder="Your Email">
            <textarea name="message" placeholder="Your Feedback"></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>

    <div class="feedback-display">
        <h3>Previous Feedback</h3>
        <?php
        if (file_exists("feedback.txt")) {
            $lines = file("feedback.txt");
            foreach ($lines as $line) {
                echo "<p>" . nl2br(htmlspecialchars($line)) . "</p>";
            }
        }
        ?>
    </div>

    <script src="script.js"></script>
</body>
</html>
