```php
<?php
require_once 'db_connection.php';

function printQRCode($equipmentId) {
    global $db_connection;

    $query = "SELECT * FROM equipment WHERE id = ?";
    $stmt = $db_connection->prepare($query);
    $stmt->bind_param("i", $equipmentId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $equipment = $result->fetch_assoc();
        $qrCodeData = "Equipment ID: " . $equipment['id'] . "\n" .
                      "Asset Tag: " . $equipment['asset_tag'] . "\n" .
                      "Location: " . $equipment['location_notes'] . "\n" .
                      "Unit Type: " . $equipment['unit_type'] . "\n" .
                      "Category: " . $equipment['category'];

        // Generate QR code using a library or API
        // This is a placeholder and should be replaced with actual QR code generation code
        echo "<img src='generate_qr_code.php?data=" . urlencode($qrCodeData) . "' alt='QR Code'>";
    } else {
        echo "No equipment found with the provided ID.";
    }
}

// Placeholder for equipment ID
// This should be replaced with actual equipment ID from request
$equipmentId = 1;

printQRCode($equipmentId);
?>
```