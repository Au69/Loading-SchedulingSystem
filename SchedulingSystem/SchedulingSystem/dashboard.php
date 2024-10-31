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
    <li><a href="dashboard.php">HOME</a></li>
    <li><a href="curriculum.php">CURRICULUM</a></li>
    <li><a href="sched.php">CLASS SCHEDULE</a></li>
    <li><a href="classrooms.php">CLASSROOMS</a></li>
    <li><a href="instructors.php">INSTRUCTOR</a></li>
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
        <!-- Class Instructors Table -->
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h2>Class Instructors</h2>
            <select>
                <option value="">Select Day</option>
                <option value="monday">Monday</option>
                <option value="tuesday">Tuesday</option>
                <option value="wednesday">Wednesday</option>
                <option value="thursday">Thursday</option>
                <option value="friday">Friday</option>
                <option value="saturday">Saturday</option>
            </select>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Instructor</th>
                    <th>Room</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $schedule = [
                    ['Instructor' => 'Michael Rivera','room' => 'ComLab 2'],
                    ['Instructor' => 'Daniel Cruz', 'room' => 'Room 4'],
                ];
                foreach ($schedule as $class) {
                    echo "<tr>";
                    echo "<td>{$class['Instructor']}</td>";
                    echo "<td>{$class['room']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <div style="text-align: center; margin-top: 10px;">
            <button onclick="location.href='class_instructors_details.php'">View More</button>
        </div>

        <!-- Ongoing Schedule Table -->
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
                $ongoing_schedule = [
                    ['course' => 'DIT 122', 'start' => '9:00 AM', 'end' => '12:00 PM', 'room' => 'Room 3'],
                    ['course' => 'NETWORKING 3', 'start' => '3:00 PM', 'end' => '5:00 PM', 'room' => 'ComLab 2'],
                ];
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
        <div style="text-align: center; margin-top: 10px;">
            <button onclick="location.href='ongoing_schedule_details.php'">View More</button>
        </div>
    </div>

</div>

</body>
</html>
