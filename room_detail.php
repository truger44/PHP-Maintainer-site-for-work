```php
<?php
include 'db_connection.php';

$room_id = $_GET['id'];

$room_details = getRoomDetails($room_id);
$equipment_details = getEquipmentDetails($room_id);
$top_repairs = getTopRepairs($room_id);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Room Details</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div id="room-details">
        <h1 id="equipment-title"><?php echo $room_details['equipment_name']; ?></h1>
        <button id="building-name"><?php echo $room_details['building_name']; ?></button>
        <table id="equipment-details">
            <tr>
                <td>Room #</td>
                <td><?php echo $room_details['room_number']; ?></td>
            </tr>
            <tr>
                <td>Asset Tag #</td>
                <td><?php echo $equipment_details['asset_tag']; ?></td>
            </tr>
            <tr>
                <td>Location notes</td>
                <td><?php echo $equipment_details['location_notes']; ?></td>
            </tr>
            <tr>
                <td>Unit Type</td>
                <td><?php echo $equipment_details['unit_type']; ?></td>
            </tr>
            <tr>
                <td>Category</td>
                <td><?php echo $equipment_details['category']; ?></td>
            </tr>
        </table>
        <div id="repair-list">
            <h2>Top 3 Repairs</h2>
            <ul>
                <?php foreach($top_repairs as $repair): ?>
                    <li><?php echo $repair['repair_details']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <button id="add-repair">Add repair</button>
        <button id="print-qr" style="float: right;">Print QR Code</button>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
```