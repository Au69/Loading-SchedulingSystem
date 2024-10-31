<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sched.css">
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

<div class="schedule-header">
    <h2>Faculty Schedule</h2>
    <button class="edit-button">Edit</button>
</div>

<div class="filter-wrapper">
    <div class="schedule-filter">
        <label for="schedule">Check schedule of:</label>
        <select id="schedule" name="schedule">
        <option value="" disabled selected>please select here</option>
            <option value="monday">Daniel Cruz</option>
            <option value="tuesday">Abby Wonkee</option>
            <option value="wednesday">John Doe</option>
            <option value="thursday">What the Sigma?</option>
            <option value="friday">Jamal Murray</option>
        </select>
    </div>

    <div class="schedule-day">
        <label for="schedule">Select Day:</label>
        <select id="schedule" name="schedule">
        <option value="" disabled selected>please select here</option>
            <option value="monday">Monday</option>
            <option value="tuesday">Tuesday</option>
            <option value="wednesday">Wednesday</option>
            <option value="thursday">Thursday</option>
            <option value="friday">Friday</option>
            <option value="friday">Saturday</option>
        </select>
    </div>
</div>



    <table class="schedule-table">
        <thead>
            <tr>
                <th>COURSE CODE</th>
                <th>COURSE NAME</th>
                <th>TIME START</th>
                <th>TIME END</th>
                <th>INSTRUCTOR</th>
                <th>ROOM</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $schedule = [
                ['course_code' => 'ITCC 103', 'course_name' => 'Fundamentals of Problem Solving and Programming 2', 'time_start' => '8:00 AM', 'time_end' => '10:00 AM', 'instructor' => 'Daniel Cruz', 'room' => 'Comlab 2', 'status' => 'ongoing'],
                ['course_code' => 'DIT 122', 'course_name' => 'Fundamentals of Nutrition', 'time_start' => '8:00 AM', 'time_end' => '10:00 AM', 'instructor' => 'Maria Reyes', 'room' => 'Comlab 3', 'status' => 'ongoing'],
                ['course_code' => 'IT 313N', 'course_name' => 'Operating Systems', 'time_start' => '8:00 AM', 'time_end' => '10:00 AM', 'instructor' => 'Kevin Santos', 'room' => 'Comlab 5', 'status' => 'ongoing'],
                ['course_code' => 'ITELECT2LEC', 'course_name' => 'IT Elective 2', 'time_start' => '10:00 AM', 'time_end' => '12:00 PM', 'instructor' => 'Joshua Gomez', 'room' => 'Room 8'],
                ['course_code' => 'IT 312', 'course_name' => 'System Development', 'time_start' => '1:00 PM', 'time_end' => '3:00 PM', 'instructor' => 'Sofia Fernandez', 'room' => 'Room 9'],
                ['course_code' => 'IT 311DLAB', 'course_name' => 'Information Assurance and Security 1', 'time_start' => '1:00 PM', 'time_end' => '3:00 PM', 'instructor' => 'Michael Rivera', 'room' => 'Room 101'],
                ['course_code' => 'NET2', 'course_name' => 'Networking 2', 'time_start' => '1:00 PM', 'time_end' => '3:00 PM', 'instructor' => 'Elena Castillo', 'room' => 'Room 10'],
                ['course_code' => 'PROG 1', 'course_name' => 'Computer Programming 1', 'time_start' => '3:00 PM', 'time_end' => '4:00 PM', 'instructor' => 'Elena Castillo', 'room' => 'Room 4']
            ];

            foreach ($schedule as $class) {
                $rowClass = isset($class['status']) && $class['status'] == 'ongoing' ? 'ongoing-row' : '';
                echo "<tr class='{$rowClass}'>";
                echo "<td>{$class['course_code']}</td>";
                echo "<td>{$class['course_name']}</td>";
                echo "<td>{$class['time_start']}</td>";
                echo "<td>{$class['time_end']}</td>";
                echo "<td>{$class['instructor']}</td>";
                echo "<td>{$class['room']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
