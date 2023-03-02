<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event calender</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>

    <h3 class="text-center" id="car">Event calender</h3>

    <div class="container" id="tbl">
        <?php
        // Get the current year and month
        $year = date('Y');
        $month = date('m');

        // Get the number of days in the current month
        $numDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);

        // Get the name of the current month
        $monthName = date('F', mktime(0, 0, 0, $month, 1, $year));

        // Get the day of the week of the first day of the current month
        $firstDayOfWeek = date('N', mktime(0, 0, 0, $month, 1, $year));

        echo "<h4 class='text-center'>$monthName $year</h4>";

        // Print the calendar header
        echo "<table class='offset-lg-3 col-lg-6 border border-secondary'>";
        echo "<tr class='bg-dark text-light text-center'>";
        echo "<th>Mon</th>";
        echo "<th>Tue</th>";
        echo "<th>Wed</th>";
        echo "<th>Thu</th>";
        echo "<th>Fri</th>";
        echo "<th>Sat</th>";
        echo "<th>Sun</th>";
        echo "</tr>";

        // Print the calendar body
        echo "<tr>";
        for ($i = 1; $i < $firstDayOfWeek; $i++) {
            echo "<td class='border border-secondary col-lg-1'></td>";
        }
        for ($i = 1; $i <= $numDays; $i++) {
            echo "<td class='p-4 m-4 border border-secondary text-center col-lg-1'><span>$i</span><div id='i$i'></div></td>";
            if (($i + $firstDayOfWeek - 1) % 7 == 0) {
                echo "</tr><tr>";
            }
        }
        for ($i = ($firstDayOfWeek + $numDays - 1) % 7; $i < 7; $i++) {
            echo "<td class='border border-secondary col-lg-1'></td>";
        }
        echo "</tr>";

        echo "</table>";

        ?>
    </div>

</body>

</html>

<script>
    $(document).ready(function () {
        $("td span").click(function () {
            let event1 = prompt("Enter events");
            let date = this.innerText;
            if (event1 != null && event1 != "" && event1 != undefined) {
                $.ajax({
                    type: "post",
                    url: "insertDB.php",
                    data: { event: event1, date: date },
                    dataType: "text",
                    success: function (response) {
                        alert(response);
                        updates();
                    }
                });


            } else {

                event.preventDefault();
            }
        })

        updates();



        $(document).on('click', '.event', function () {

            var del = $(this).attr('id');

            var agree = confirm("Do you wanna delete this event?");

            console.log(agree);

            if (agree) {
                $.ajax({
                    type: "post",
                    url: "delete.php",
                    data: { delete: del },
                    dataType: "text",
                    success: function (response) {
                        alert(response);
                        updates();
                    }

                });
            } else {
                event.preventDefault();
            }

        });

    });

    function updates() {

        $.ajax({
            type: "GET",
            url: "fetch.php",
            dataType: "json",
            success: function (data) {
                $(".event").empty();
                for (let num = 0; num < data.length; num++) {
                    $("#i" + data[num][0]).append(`<p class='bg-primary text-light rounded event' id="${data[num][2]}">${data[num][1]}</p>`);

                }
            }

        });

    }


    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }

</script>