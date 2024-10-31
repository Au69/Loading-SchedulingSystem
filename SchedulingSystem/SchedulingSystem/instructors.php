<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/instructors.css">
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

<!-- MAIN CONTENT -->
<div class="content">
    <div class="header-title">
        <h1>View Instructor</h1>
        <button class="edit-header-btn">Edit</button>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Instructors</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $instructors = [
                    "Daniel Cruz", "Maria Reyes", "Kevin Santos",
                    "Joshua Gomez", "Sofia Fernandez", "Michael Rivera",
                    "Elena Castillo", "Pablo Escobar"
                ];

                foreach ($instructors as $instructor) {
                    echo "<tr>
                            <td>{$instructor}</td>
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