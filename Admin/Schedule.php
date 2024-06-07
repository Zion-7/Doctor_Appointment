<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="../CSS/appointment.css">
    <link rel="stylesheet" href="../CSS/doctor.css">
</head>

<body>
    <?php
   include("sidebar.php");
   ?>
    <div class="main-part">
        <h1>Schedule Manager</h1>

        <p id="today-date">Today's date <img src="../img/calendar.svg" alt=""><br></p>
        <div class="add-new-section">
            <h2>Schedule A Session</h2>
            <button id="add-new-button">+ Add Session</button>
        </div>
        <p>All Sessions(1)</p>
        <div class="input-sections">
            Date:<input type="date" name="date" id="date">
            Doctor: <select name="doctor" id="doctor">
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
            <button><img src="../img/icons/filter-iceblue.svg" alt="" id="filter"> Filter</button>

        </div>
        <table>
            <tr>
                <th>Session Title</th>
                <th>Doctor</th>
                <th>Schedule date&time</th>
                <th>Max num Booked</th>
                <th>Events</th>
            </tr>
            <tr>
                <td>Hllo world</td>
                <td>Neba</td>
                <td>01/02/2024</td>
                <td>45</td>
                <td>
                    <button class="view-button"><img src="../img/view-gray.svg" alt="view">View</button>
                    <button class="delete-button"><img src="../img/icons/delete-iceblue.svg" alt="delet">Cancel</button>
                </td>
            </tr>
        </table>
        <?php
        include("New_session.php");
         ?>
        <div class="schedule-detail-pop-up">
            <div class="pop-up-header">
                <h2>View Detail</h2>
                <p id="xs-sign">&times;</p>
            </div>
            <p>Session Title :</p>
            <p></p>
            <p>Doctor of This Session :</p>
            <p></p>
            <p>Scheduled Date :</p>
            <p></p>
            <p>Scheduled Time :</p>
            <p></p>
            <h4>Patients That Already Registered for this session(1/50)</h4>
            <table>
                <tr>
                    <th>Patient ID</th>
                    <th>Patient Name</th>
                    <th>Appointment Number</th>
                    <th>Patient Telephone</th>
                </tr>
            </table>
        </div>
        <script src="../JS/index.js"></script>
</body>

</html>