<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Simple Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h1>Welcome to My Simple Website!</h1>
        <p>This is a simple website with PHP and HTML to demonstrate dynamic content.</p>
    </section>

    <section class="content">
        <h2>Latest News</h2>
        <?php
            $news = "We're glad you're here! Stay tuned for updates.";
            echo "<p>$news</p>";
        ?>
    </section>

    <footer>
        <p>&copy; 2025 My Simple Website</p>
    </footer>
</body>
</html>
