<?php include('db.php'); ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['create'])) {
        $event_name = $_POST['event_name'];
        $attendee_type = $_POST['attendee_type'];
        $event_start = $_POST['event_start'];
        $event_end = $_POST['event_end'];
        $day = $_POST['day'];
        $booked = $_POST['booked'];
        $status = $_POST['status'];

        $sql = "INSERT INTO events (event_name, attendee_type, event_start, event_end, day, booked, status)
                VALUES ('$event_name', '$attendee_type', '$event_start', '$event_end', '$day', '$booked', '$status')";
        $conn->query($sql);

        header('Location: index.php');
        exit();
    }

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $event_name = $_POST['event_name'];
        $attendee_type = $_POST['attendee_type'];
        $event_start = $_POST['event_start'];
        $event_end = $_POST['event_end'];
        $day = $_POST['day'];
        $booked = $_POST['booked'];
        $status = $_POST['status'];

        $sql = "UPDATE events SET event_name='$event_name', attendee_type='$attendee_type', event_start='$event_start',
                event_end='$event_end', day='$day', booked='$booked', status='$status' WHERE id=$id";
        $conn->query($sql);

        header('Location: index.php');
        exit();
    }

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM events WHERE id=$id";
        $conn->query($sql);

        header('Location: index.php');
        exit();
    }
}

$sql = "SELECT * FROM events";
$result = $conn->query($sql);

$events = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $events[] = $row;
    }
}

$conn->close();
?>
