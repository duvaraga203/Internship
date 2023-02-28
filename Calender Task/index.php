<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calender</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
</head>

<body>
    <h3 class="text-center mt-lg-5">Dynamic Calender</h3>
    <div class="container row mb-lg-4">
        <form method="POST" class="offset-lg-5 pl-lg-4 mt-lg-3" action="index.php">

            <div class="input-group mb-3">
                <div class="input-group-prepend col-lg-2">
                    <label for="days_week" class="input-group-text pl-lg-4">Days in a
                        week</label>
                </div>
                <input type="number" class="col-lg-2 border border-secondary rounded-right" id="days_week"
                    name="days_week" min="1" max="7" required>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend col-lg-2">
                    <label for="days_month" class="input-group-text pl-lg-4">Days in a month</label>
                </div>
                <input type="number" class="col-lg-2 border border-secondary rounded-right" id="days_month"
                    name="days_month" max="31" required><br>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend col-lg-2">
                    <label for="months" class="input-group-text pl-lg-4">Months in a year</label>
                </div>
                <input type="number" class="col-lg-2 border border-secondary rounded-right" id="months" name="months"
                    min="1" max="12" required><br>
            </div>

            <button type="submit" class="btn btn-primary ml-lg-5 col-lg-3" name="submit">Generate Calendar</button>
        </form>
    </div>


    <div class="container" id="calendar_div">
        <div class="row table-responsive">
            <?php
            if (isset($_POST['submit'])) {


                // Days in a week, days in a month, and months in a year
                $numDaysInWeek = $_POST['days_week'];
                $numDaysInMonth = $_POST['days_month'];
                $numMonthsInYear = $_POST['months'];

                // Weekdays
                $weekdays = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');

                // Months
                $months = array(
                    'January',
                    'February',
                    'March',
                    'April',
                    'May',
                    'June',
                    'July',
                    'August',
                    'September',
                    'October',
                    'November',
                    'December'
                );

                // Initial day of the week to Sunday
                $dayOfWeek = 0;

                // Calendar table
                echo '<table class="table-striped offset-lg-4 col-lg-4">';

                // Months in the year
                for ($month = 1; $month <= $numMonthsInYear; $month++) {

                    // Adding month in top
                    echo "<th class='text-center bg-danger text-light' colspan='$numDaysInWeek'>" . $months[$month - 1];

                    // Adding weekdays
                    echo '<tr>';
                    for ($i = 0; $i < $numDaysInWeek; $i++) {
                        echo '<th class="bg-dark text-light ">' . $weekdays[$i] . '</th>';
                    }
                    echo '</tr>';

                    // Calculate the number of blank cells\
                    $numBlankCells = $dayOfWeek;

                    echo '<tr>';

                    for ($i = 0; $i < $numBlankCells; $i++) {
                        echo '<td></td>';
                    }

                    for ($day = 1; $day <= $numDaysInMonth; $day++) {
                        // If this is the first cell in a row, start a new row
                        if (($dayOfWeek + $day - 1) % $numDaysInWeek == 0) {
                            echo '</tr><tr>';
                        }
                        // Add day
                        echo '<td class="border border-secondary text-center">' . $day . '</td>';
                    }
                    // Add blank cells after the last day
                    for ($i = ($dayOfWeek + $numDaysInMonth) % $numDaysInWeek; $i < $numDaysInWeek; $i++) {
                        echo '<td></td>';
                    }
                    echo '</tr>';

                    // Set first day of the next month
                    $dayOfWeek = ($dayOfWeek + $numDaysInMonth) % $numDaysInWeek;

                    echo "<tr><td>&nbsp;</td></tr>";

                }
            
                echo '</table>';
            }
            ?>
        </div>

    </div>

</body>

</html>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>