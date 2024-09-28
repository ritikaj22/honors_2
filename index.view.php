<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Management System</title>
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
    <h1>My Contacts</h1>
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($rows as $row) : ?>
        <tr>
            <td><?=$row->id; ?></td>
            <td><?=$row->name; ?></td>
            <td><?=$row->email; ?></td>
            <td><?=$row->phone; ?></td>
            <td>
                <form action="delete.php" method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?=$row->id; ?>">
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</main>
</body>
</html>
