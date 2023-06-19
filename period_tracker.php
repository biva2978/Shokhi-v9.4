
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style/period_tracker.css">
</head>

<body>
    <!-- top banner  -->

    <div class="top-banner">
        <div class="container">
            <div class="small-bold-text banner-text">📣 New to shokhi! <a href="about.html">Read more →</a></div>
        </div>
    </div>

    <!-- Navigation bar -->

    <nav>
        <div class="container main-nav flex">
            <a href="#" class="company-logo">
                <img src="Images/1.png" alt="company-logo">
            </a>

            <div class="nav-links">
                <ul class="flex">
                    <li><a href="home.php" class="hover-link">Home</a></li>
                    <li><a href="articles.html" class="hover-link">Articles</a></li>
                    <li><a href="period_tracker.html" class="hover-link">Period tracker</a></li>
                    <li><a href="appointment.html" class="hover-link">Appointment</a></li>
                    <li><a href="about.html" class="hover-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- period tracker -->

    <!DOCTYPE html>

    <h1>Period Tracker</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="start-date">Start Date:</label>
        <input type="date" id="start-date" name="start-date" required>

        <label for="cycle-length">Cycle Length:</label>
        <input type="number" id="cycle-length" name="cycle-length" min="1" required>

        <button type="submit">Track</button>
    </form>
  
    <div id="result">
    
        <?php
        echo("you next period start date would be ");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $startDate = $_POST["start-date"];
            $cycleLength = $_POST["cycle-length"];

            // Perform date calculation
            $resultDate = date('Y-m-d', strtotime($startDate . ' + ' . $cycleLength . ' days'));

            // Output the result
            echo $resultDate;
        }
        ?>
    </div>

    <script src="script/period_tracker.js"></script>
</body>

</html>

</body>

</html>