<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calender</title>

    <!-- table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

    <link rel="stylesheet" href="../css/calender.css">
    <?php include "../admin/nav-admin.php";
    
    include "../fuction/importlink.php" ?>

    <!-- calender -->
    <link href='../fullcalendar/lib/main.css' rel='stylesheet' />
    <script src='../fullcalendar/lib/main.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
      });

    </script>
</head>
<body>
    <h2><b>ปฎิทินการจอง</b></h2>
    <div id='calendar'></div>
</body>

</html>