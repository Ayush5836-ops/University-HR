<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Attendance</title>
</head>
<body>
    <h2>Mark Attendance</h2>
    <form method="POST">
        Name: <input type="text" name="name" required>
        <input type="submit" name="submit" value="Mark Present">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $date = date('Y-m-d');

        $sql = "INSERT INTO attendance (name, date) VALUES ('$name', '$date')";
        if ($conn->query($sql)) {
            echo "Attendance marked for $name.";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    echo "<h3>Today's Attendance</h3>";
    $result = $conn->query("SELECT * FROM attendance WHERE date = CURDATE()");
    while ($row = $result->fetch_assoc()) {
        echo $row['name'] . "<br>";
    }
    ?>
</body>
</html>