```php
<?php
include 'db_connection.php';

$equipment_id = $_GET['id'];
$equipment = getEquipmentDetails($equipment_id);
$repairs = getTopRepairs($equipment_id);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div id="equipment-title">
        <button id="building-name"><?php echo $equipment['building_name']; ?></button>
        <h1><?php echo $equipment['equipment_name']; ?></h1>
    </div>
    <table id="equipment-details">
        <tr>
            <td>Room #</td>
            <td><?php echo $equipment['room_number']; ?></td>
        </tr>
        <tr>
            <td>Asset Tag #</td>
            <td><?php echo $equipment['asset_tag']; ?></td>
        </tr>
        <tr>
            <td>Location notes:</td>
            <td><?php echo $equipment['location_notes']; ?></td>
        </tr>
        <tr>
            <td>Unit Type:</td>
            <td><?php echo $equipment['unit_type']; ?></td>
        </tr>
        <tr>
            <td>Category:</td>
            <td><?php echo $equipment['category']; ?></td>
        </tr>
    </table>
    <div id="repair-list">
        <h2>Top 3 Repairs</h2>
        <ul>
            <?php foreach($repairs as $repair): ?>
                <li><?php echo $repair['repair_details']; ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="more_details.php?id=<?php echo $equipment_id; ?>">More details</a>
    </div>
    <div class="button-container">
        <button id="add-repair" onclick="addRepairClicked()">Add repair</button>
        <button id="print-qr" onclick="printQRClicked()" style="float: right;">Print QR Code</button>
    </div>
</body>
<script src="scripts.js"></script>
</html>
```