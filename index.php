<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>予約者一覧</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Ninnzuu</th>
        <th>Nyuten</th>
        <th>Time</th>
        <th>Action</th>
    </tr>

    <?php
    // PHPコードでデータベースからデータを取得し、表に表示する
    $conn = new mysqli('localhost', 'username', 'password', 'reservation_system');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM okyaku");

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['ninnzuu']}</td>";
        echo "<td>{$row['nyuten']}</td>";
        echo "<td>{$row['time']}</td>";
        echo "<td><a href='delete.php?id={$row['id']}'>削除</a></td>";
        echo "</tr>";
    }

    $conn->close();
    ?>
</table>

</body>
</html>
