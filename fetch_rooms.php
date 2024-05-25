<?php
// Database connection details
$host = 'localhost'; // database host
$dbname = 'siquijordb'; // database name
$username = 'root'; // default username for local setup
$password = ''; // default password for local setup

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare and execute the SQL query
    $stmt = $pdo->query('SELECT room_Type, room_Capacity, room_Available, room_id, room_Amenities, room_Rate FROM rooms');
    // Fetch all the rows as an associative array
    $rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // Handle connection errors
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

// Function to render room table rows
function renderRoomRows($rooms) {
    $html = '';
    foreach ($rooms as $room) {
        $html .= '<tr>';
        $html .= '<td>' . htmlspecialchars($room['room_id']) . '</td>';
        $html .= '<td>' . htmlspecialchars($room['room_Type']) . '</td>';
        $html .= '<td>' . htmlspecialchars($room['room_Type']) . '</td>'; // Assuming room name is the same as room type
        $html .= '<td>' . htmlspecialchars($room['room_Capacity']) . '</td>';
        $html .= '<td>' . htmlspecialchars($room['room_Available']) . '</td>';
        $html .= '<td>' . htmlspecialchars($room['room_Amenities']) . '</td>';
        $html .= '<td>' . htmlspecialchars($room['room_Rate']) . '</td>';
        $html .= '<td><a href="update.php?id=' . htmlspecialchars($room['room_id']) . '">Update</a></td>';
        $html .= '<td><a href="delete.php?id=' . htmlspecialchars($room['room_id']) . '">Delete</a></td>';
        $html .= '</tr>';
    }
    return $html;
}

// Output the room rows HTML
echo renderRoomRows($rooms);
?>
