<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/classroom.css">
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
    <h1>Classrooms
        <button class="add-button">Add</button>
    </h1>
    <div class="table-container">
        <label for="day-select">Monday</label>
        <select id="day-select" name="day">
            <option value="monday">Monday</option>
            <option value="tuesday">Tuesday</option>
            <option value="wednesday">Wednesday</option>
            <option value="thursday">Thursday</option>
            <option value="friday">Friday</option>
            <option value="saturday">Saturday</option>
        </select>

        <table>
            <thead>
                <tr>
                    <th>ROOM CODE</th>
                    <th>STATUS</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $rooms = [
                    ["Comlab 2", "Occupied"],
                    ["Room 8", "Vacant"],
                    ["Comlab 3", "Occupied"],
                    ["Comlab 5", "Occupied"],
                    ["Room 9", "Vacant"],
                    ["Room 101", "Vacant"],
                    ["Room 10", "Vacant"],
                    ["Room 4", "Vacant"]
                ];

                foreach ($rooms as $room) {
                    $statusClass = $room[1] == "Occupied" ? "occupied" : "vacant";
                    echo "<tr>
                            <td>{$room[0]}</td>
                            <td class='$statusClass'>{$room[1]}</td>
                            <td><button class='view-btn'>&#128065;</button></td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>