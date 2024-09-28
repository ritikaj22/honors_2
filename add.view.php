<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Management</title>
    <link rel="stylesheet" href="/pico.min.css" />
</head>
<body>
<header class="container">
    <nav>
        <ul>
            <li><strong>Contact Management System</strong></li>
        </ul>
        <ul>
            <li><a href="/index.php">List Contacts</a></li>
            <li><a href="/add.php">Add Contact</a></li>
        </ul>
    </nav>
</header>
<main class="container">
    <h1>Add Contact</h1>
    <form method="post">
        <label>Name</label>
        <input type="text" name="name" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Phone</label>
        <input type="tel" name="phone" required>
        <input type="submit" value="Add Contact">
    </form>
</main>
</body>
</html>
