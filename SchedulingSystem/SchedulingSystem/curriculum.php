<?

require_once 'auth.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/curriculum.css">
    <title>Faculty Curriculum</title>
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


<div class="content">
    <h1>Curriculum
    <button class="add-button">Add</button>
    </h1>
    <div class="table-container">
        <h2>Academic Programs</h2>
        <table>
            <thead>
                <tr>
                    <th>COURSE CODE</th>
                    <th>COURSE NAME</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $courses = [
                    ["PROG 1", "COMPUTER PROGRAMMING 1"],
                    ["IT ELEC 2", "IT ELECTIVE 2"],
                    ["PROG 2", "COMPUTER PROGRAMMING 2"],
                    ["IT 312", "SYSTEM DEVELOPMENT"],
                    ["IT 313N", "OPERATING SYSTEMS"]
                ];

                foreach ($courses as $course) {
                    echo "<tr>
                            <td>{$course[0]}</td>
                            <td>{$course[1]}</td>
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