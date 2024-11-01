<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/noti.css">
    <title>Faculty Dashboard</title>
</head>
<body>

<!-- HEADER SECTION -->
<div class="header">
    <div class="logo">
        <img src="css/images/ITE-removebg.png" alt="ITE Faculty Logo">
    </div>

    <div class="search-container">
        <input type="text" placeholder="Search...">
        <button>Search</button>
    </div>
</div>

<!-- NAVIGATION BAR -->
<ul class="navbar">
    <li><a href="dashboard.php">HOME</a></li>
    <li><a href="curriculum.php">CURRICULUM</a></li>
    <li><a href="sched.php">CLASS SCHEDULE</a></li>
    <li><a href="classrooms.php">CLASSROOMS</a></li>
    <li><a href="instructors.php">INSTRUCTOR</a></li>
    <li><a href="notifications.php">NOTIFICATIONS</a></li>
    <li class="account-settings">
        <a href="#" class="dropdown-toggle">ACCOUNT SETTINGS</a>
        <ul class="dropdown-menu">
            <li><a href="profile.php">Profile</a></li>
            <li><a href="faculty.php">Faculty</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </li>
</ul>

<!-- MAIN CONTENT -->
<div class="content">
    <h1>Notifications</h1>
    <div class="notifications-list">
        <?php
        $notifications = [
            ["message" => "Comlab 2 is now occupied.", "time" => "8:00 AM"],
            ["message" => "Comlab 2 is now vacant.", "time" => "Yesterday"],
            ["message" => "Comlab 3 is now occupied.", "time" => "Yesterday"],
            ["message" => "Comlab 5 is now occupied.", "time" => "Yesterday"],
            ["message" => "Your request has been approved", "time" => "Yesterday"],
            ["message" => "New schedule added.", "time" => "Yesterday"],
            ["message" => "New instructor added.", "time" => "Yesterday"],
            ["message" => "New room added.", "time" => "Yesterday"],
        ];

        foreach ($notifications as $notification) {
            echo "<div class='notification-item'>
                    <span class='message'>{$notification['message']}</span>
                    <span class='time'>{$notification['time']}</span>
                    <button class='options'>⋮</button>
                  </div>";
        }
        ?>
    </div>
</div>

</body>
</html>