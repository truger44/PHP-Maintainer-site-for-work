```php
<?php
include 'db_connection.php';

$db_connection = connectToDB();

$topRooms = getTopRooms($db_connection);
?>

<!DOCTYPE html>
<html>
<head>
    <title>School Equipment Maintenance</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Top 5 Most Repaired Rooms</h1>
    <table id="room-list">
        <tr>
            <th>Room Number</th>
            <th>Number of Repairs</th>
        </tr>
        <?php foreach($topRooms as $room): ?>
            <tr>
                <td><a href="room_detail.php?room_id=<?php echo $room['id']; ?>"><?php echo $room['room_number']; ?></a></td>
                <td><?php echo $room['repair_count']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <script src="scripts.js"></script>
</body>
</html>
```