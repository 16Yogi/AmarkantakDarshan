<?php
// Connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve table names
$sql = "SHOW TABLES";
$result = $conn->query($sql);
$tables = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tables[] = $row["Tables_in_" . $dbname];
    }
}

// Retrieve rows based on button click
if (isset($_GET['table']) && in_array($_GET['table'], $tables)) {
    $table = $_GET['table'];
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }
}
?>

<!-- Display buttons and rows -->
<!DOCTYPE html>
<html>
<head>
    <title>Display Table Rows on Button Click</title>
</head>
<body>
    <?php foreach ($tables as $table): ?>
        <button onclick="location.href='?table=<?php echo $table; ?>'"><?php echo $table; ?></button>
    <?php endforeach; ?>
    <br><br>
    <?php if (isset($rows)): ?>
        <table>
            <?php foreach ($rows as $row): ?>
                <tr>
                    <?php foreach ($row as $cell): ?>
                        <td><?php echo $cell; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>
