<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your external CSS file -->
</head>
<body>

<h1>Guestbook</h1>

<form action="process.php" method="post">
    <input type="text" name="name" placeholder="Your name" required>
    <textarea name="comment" placeholder="Your comment" required></textarea>
    <button type="submit">Add Comment</button>
</form>

<hr>

<div id="comments-section">
    <?php
    // Assuming you have a connection to your database in db.php
    include 'db.php';

    // Fetch all comments from the database
    $result = $conn->query("SELECT name, comment, created_at FROM comments ORDER BY created_at DESC");

    // Display each comment
    while ($row = $result->fetch_assoc()) {
        echo "<div class='comment'>";
        echo "<p>" . htmlspecialchars($row['comment']) . "</p>";
        echo "<small>— " . htmlspecialchars($row['name']) . " on " . date('F j, Y, g:i a', strtotime($row['created_at'])) . "</small>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
