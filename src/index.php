<!DOCTYPE html>
<html>
<head>
    <title>Email Form</title>
</head>
<body>
    <h2>Email Form</h2>
    <form method="POST" action="send_email.php">
        <label for="fromEmail">From Email:</label><br>
        <input type="text" id="fromEmail" name="fromEmail"><br><br>

        <label for="fromName">From Name:</label><br>
        <input type="text" id="fromName" name="fromName"><br><br>

        <label for="toEmail">To Email:</label><br>
        <input type="text" id="toEmail" name="toEmail"><br><br>

        <label for="toName">To Name:</label><br>
        <input type="text" id="toName" name="toName"><br><br>

        <label for="subject">Subject:</label><br>
        <input type="text" id="subject" name="subject"><br><br>

        <label for="textContent">Content:</label><br>
        <textarea id="textContent" name="textContent" rows="6" cols="50"></textarea><br><br>

        <input type="submit" value="Send Email">
    </form>
</body>
</html>
