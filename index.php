<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="dashboard.css">
  <title>Dashboard</title>
</head>
<body>
  <div class="header">
    <img id="logo" src="logo1.png" alt="Company Logo">
    <div class="border"></div>
    <div class="rectangle">
      <img id="new-logo" src="new logo.png" alt="New Logo">
    </div>
    <div class="rectangle2">
      <div class="admin-text">Siquitour Admin Panel</div>
      <div class="sidebar">
        <a href="dashboard.html" class="menu-item">Dashboard</a>
        <a href="create.html" class="menu-item">Create</a>
        <a href="#" class="menu-item">Room Status</a>
      </div>
      <div class="line"></div>
    </div>
    <div class="logout">
      <img src="login.png" alt="Logout Icon" class="logout-icon">
      <a href="#" class="logout-text">Log out</a>
    </div>
  </div>

  <h1>OVERVIEW</h1>

  <div class="dashboard-container">
    <div class="filter-container">
      <select id="room-type-dropdown" class="room-type-dropdown">
        <option value="all">All Rooms</option>
        <option value="Single">Single</option>
        <option value="Double">Double</option>
        <option value="Suite">Suite</option>
        <option value="Deluxe">Deluxe</option>
      </select>
    </div>
    <div class="separator-line"></div>
    <table class="dashboard-table">
      <thead>
        <tr>
          <th>Room ID</th>
          <th>Room Type</th>
          <th>Room Name</th>
          <th>Room Capacity</th>
          <th>Room Available</th>
          <th>Room Amenities</th>
          <th>Room Rate</th>
          <th>UPDATE</th>
          <th>DELETE</th>
        </tr>
      </thead>
      <tbody id="room-table-body">
        <?php include 'fetch_rooms.php'; ?>
      </tbody>
    </table>
  </div>

  <script src="dashboard.js"></script>
</body>
</html>
