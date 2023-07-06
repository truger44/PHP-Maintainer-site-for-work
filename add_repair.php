<?php
include 'db_connection.php';

$connection = connectToDB();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roomNumber = $_POST['roomNumber'];
    $assetTag = $_POST['assetTag'];
    $locationNotes = $_POST['locationNotes'];
    $unitType = $_POST['unitType'];
    $category = $_POST['category'];

    $sql = "INSERT INTO repairs (roomNumber, assetTag, locationNotes, unitType, category) VALUES (?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sssss", $roomNumber, $assetTag, $locationNotes, $unitType, $category);
    $stmt->execute();

    header("Location: equipment_detail.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Repair</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="roomNumber">Room Number:</label><br>
        <input type="text" id="roomNumber" name="roomNumber"><br>
        <label for="assetTag">Asset Tag:</label><br>
        <input type="text" id="assetTag" name="assetTag"><br>
        <label for="locationNotes">Location Notes:</label><br>
        <input type="text" id="locationNotes" name="locationNotes"><br>
        <label for="unitType">Unit Type:</label><br>
        <input type="text" id="unitType" name="unitType"><br>
        <label for="category">Category:</label><br>
        <input type="text" id="category" name="category"><br>
        <input type="submit" value="Submit">
    </form>
    <script src="scripts.js"></script>
</body>
</html>