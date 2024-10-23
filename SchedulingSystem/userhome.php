<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mystyle.css">
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
    <li><a href="#">HOME</a></li>
    <li><a href="#">CURRICULUM</a></li>
    <li><a href="#">CLASS SCHEDULE</a></li>
    <li><a href="#">CLASSROOMS</a></li>
    <li><a href="#">INSTRUCTOR</a></li>
    <li><a href="#">NOTIFICATIONS</a></li>
    <li><a href="#">ACCOUNT SETTINGS</a></li>
</ul>

<!-- MAIN CONTENT SECTION -->
<div class="container">

    <!-- Overview Section -->
    <div class="overview">
        <h2>Overview</h2>
        <div class="overview-item">
            <h3>Courses within Day: <span>4</span></h3>
            <i class="icon">⏰</i>
        </div>
        <div class="overview-item">
            <h3>Rooms Available: <span>6</span></h3>
            <i class="icon">🚪</i>
        </div>
        <div class="overview-item">
            <h3>Handled Courses: <span>3</span></h3>
            <i class="icon">📚</i>
        </div>
        <div class="overview-item conflicts">
            <h3>Conflicts: <span>0</span></h3>
            <i class="icon">⚠️</i>
        </div>
    </div>

    <!-- Schedule Section -->
    <div class="schedule">
        <h2>My Schedule</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Course Code</th>
                    <th>Time Start</th>
                    <th>Time End</th>
                    <th>Room</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Sample dynamic data - replace with your database query
                $schedule = [
                    ['course' => 'ITCC 103', 'start' => '8:00 AM', 'end' => '9:00 AM', 'room' => 'ComLab 2'],
                    ['course' => 'ITPC 213', 'start' => '1:00 PM', 'end' => '3:00 PM', 'room' => 'Room 4'],
                ];

                // Output each row dynamically
                foreach ($schedule as $class) {
                    echo "<tr>";
                    echo "<td>{$class['course']}</td>";
                    echo "<td>{$class['start']}</td>";
                    echo "<td>{$class['end']}</td>";
                    echo "<td>{$class['room']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <h2>Ongoing Schedule</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Course Code</th>
                    <th>Time Start</th>
                    <th>Time End</th>
                    <th>Room</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Sample ongoing schedule data
                $ongoing_schedule = [
                    ['course' => 'DIT 122', 'start' => '9:00 AM', 'end' => '12:00 PM', 'room' => 'Room 3'],
                    ['course' => 'NETWORKING 3', 'start' => '3:00 PM', 'end' => '5:00 PM', 'room' => 'ComLab 2'],
                ];

                // Output each row dynamically
                foreach ($ongoing_schedule as $ongoing_class) {
                    echo "<tr>";
                    echo "<td>{$ongoing_class['course']}</td>";
                    echo "<td>{$ongoing_class['start']}</td>";
                    echo "<td>{$ongoing_class['end']}</td>";
                    echo "<td>{$ongoing_class['room']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>
